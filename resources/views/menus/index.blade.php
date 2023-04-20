@extends('layouts.app2')

@section('content')


<section class="offer_section layout_padding-bottom">


    <div class="offer_container">
      <div class="container ">
        <div class="row">

            @foreach ($menus as $menu )


            <div class="col-md-6  ">
              <div class="box ">
                <div class="img-box">
                  <img src="{{Storage::url($menu->image)}}" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                   {{$menu->name}}
                  </h5>
                  <h6>
                    <span>{{$menu->price}}$</span> Off
                  </h6>
                  <h6>
                    <span>{{$menu->description}}$</span>
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
