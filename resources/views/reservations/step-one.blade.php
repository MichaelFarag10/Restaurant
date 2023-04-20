@extends('layouts.app2')

@section('content')


<section class="offer_section layout_padding-bottom">


    <div class="offer_container">
      <div style="/* From https://css.glass */
      background: rgba(255, 255, 255, 0.13);
      border-radius: 16px;
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(0px);
      -webkit-backdrop-filter: blur(0px);
      border: 1px solid rgba(255, 255, 255, 0.3); color:white;" class="container w-50 p-3 mt-5">
     <div style="width: 80%; margin: auto">
      <form action="{{route('reservations.store.step.one')}}" method="POST">
         @csrf
         <div class="mb-6">
                <label for="first_name" class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                <input style="font-size: 25px;" type="text" name="first_name" class="form-control @error('first_name') border-red-400 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$reservation->first_name ?? ''}}" required>
              </div>
              @error('first_name')
                  <div class="text-sm text-red-400">{{$message}}</div>
              @enderror
              <div class="mb-6">
                <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                <input style="font-size: 25px;" type="text" name="last_name" class=" form-control @error('last_name') border-red-400 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$reservation->last_name ?? ''}}"required>
              </div>
              @error('last_name')
                  <div class="text-sm text-red-400">{{$message}}</div>
              @enderror
              <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input style="font-size: 25px;" type="text" name="email" class="form-control @error('email') border-red-400 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$reservation->email ?? ''}}" required>
              </div>
              @error('email')
              <div class="text-sm text-red-400">{{$message}}</div>
              @enderror

              <div class="mb-6">
                <label for="tel_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                <input style="font-size: 25px;" type="text" name="tel_number" class="form-control @error('tel_number') border-red-400 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$reservation->tel_number ?? ''}}" required>
              </div>

              @error('tel_number')
                  <div class="text-sm text-red-400">{{$message}}</div>
              @enderror

              <div class="mb-6">
                <label for="res_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Reservation Date</label>
                <input style="font-size: 25px;" type="datetime-local" name="res_date" min="{{$min_date}}" max="{{$max_date}}" class="form-control @error('res_date') border-red-400 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$reservation->res_date ?? ''}}"  required>
              </div>
              @error('res_date')
                  <div class="text-sm text-red-400">{{$message}}</div>
              @enderror

              <div class="mb-6">
                <label for="guest_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Guest Number</label>
                  <input style="font-size: 25px;" type="number"  name="guest_number" id="" class="form-control @error('guest_number') border-red-400 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$reservation->guest_number ?? ''}}" required>
              </div>
              <br>

              <button style="font-size: 25px;" type="submit" class="btn btn-primary">Next</button>

          </form>
        </div>
      </div>
    </div>
  </section>





@endsection()
