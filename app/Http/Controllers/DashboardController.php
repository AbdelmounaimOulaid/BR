<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->user()->isAdmin == 1) {
            $details = Detail::with('users')->orderBy('status', 'desc')
                ->orderBy('updated_at', 'desc')->get();

            return view('dashboard')->with(compact('details'));
        } else {
            return Redirect('/');
        };
    }

    public function deleteDetail($id)
    {
        if (auth()->user()->isAdmin == 1) {
            Detail::find($id)->delete();
            return Redirect('/dashboard');
        } else {
            return Redirect('/');
        };
    }

    public function changeStatus(Request $request)
    {
        if (auth()->user()->isAdmin == 1) {
            $detail = Detail::find($request->id);
            $detail->status = 0;
            $detail->save();
            return true;
        } else {
            return Redirect('/');
        };
    }

    public function login(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication successful
            // Redirect to the payment page
            return redirect()->route('dashboard');
        }

        // Authentication failed
        // Redirect back with an error message
        return back()->withErrors(['email' => 'Invalid credentials']);
    }
}
