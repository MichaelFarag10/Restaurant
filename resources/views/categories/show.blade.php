@extends('layouts.app2')

@section('content')


<section class="offer_section layout_padding-bottom">


    <div class="offer_container">
      <div class="container ">
        <div class="row">

            @foreach ($category->menus as $menu )


            <div class="col-md-4  ">
            <div class="box ">
              <div class="img-box p-3">
                <img class="w-100 h-90" src="{{Storage::url($menu->image)}}" alt="">
              </div>
              <div class="detail-box">

                <h5>
                    {{$menu->name}}
                  </h5>
                  <h6>
                    <span style="font-size:20px;">{{$menu->price}}$</span>
                  </h6>

              </div>
            </div>
          </div>

            @endforeach



        </div>
      </div>
    </div>
  </section>





@endsection()
