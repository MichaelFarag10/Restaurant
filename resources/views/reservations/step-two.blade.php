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
      <form action="{{route('reservations.store.step.two')}}" method="POST">
         @csrf
         <div class="mb-6">
            <div class="mb-6">


                    <label for="table_id"  style="font-size: 25px;" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Step Tow</label>
                    <div style="float: right;">
                    <a href="{{route('reservations.step.one')}}" style="color:white;" class="btn btn-warning">Previous</a>
                     </div>
               <select  style="font-size: 25px;" name="table_id" id=""  class="form-control form-multiselect block w-full mt-1">
                @foreach ($tables as $table )
                    <option value="{{$table->id}}" @selected($table->id == $reservation->table_id)>{{$table->name}} ({{$table->guest_number}})Guest</option>
                @endforeach
            </select>
              </div>

              <br>
              <button style="font-size: 25px;" type="submit" class="btn btn-primary">Finsh</button>

          </form>
        </div>
      </div>
    </div>
  </section>





@endsection()
