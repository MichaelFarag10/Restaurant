@extends('layouts.app2')

@section('content')


<section class="offer_section layout_padding-bottom">


    <div class="offer_container">
      <div class="container ">
        <div class="row">

            @foreach ($categories as $category )


            <div class="col-md-4  ">
            <div class="box ">
              <div class="img-box p-3">
                <img class="w-100 h-90" src="{{Storage::url($category->image)}}" alt="">
              </div>
              <div class="detail-box">
             <a href="{{route('categories.show',$category->id)}}">
                <h5>
                    {{$category->name}}
                  </h5>
             </a>

              </div>
            </div>
          </div>

            @endforeach



        </div>
      </div>
    </div>
  </section>





@endsection()
