
@extends('layouts.app2')

@section('content')

<section class="slider_section ">
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container ">
            <div class="row">
              <div class="col-md-7 col-lg-6 ">
                <div class="detail-box">
                  <h1>
                    Fast Food Restaurant
                  </h1>
                  <p>
                    Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste magni quos nihil ducimus libero ipsam.
                  </p>
                  <div class="btn-box">
                    <a href="{{route('reservations.step.one')}}" class="btn1">
                     Make Reservation
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item ">
          <div class="container ">
            <div class="row">
              <div class="col-md-7 col-lg-6 ">
                <div class="detail-box">
                  <h1>
                    Fast Food Restaurant
                  </h1>
                  <p>
                    Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste magni quos nihil ducimus libero ipsam.
                  </p>
                  <div class="btn-box">
                    <a href="" class="btn1">
                      Order Now
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container ">
            <div class="row">
              <div class="col-md-7 col-lg-6 ">
                <div class="detail-box">
                  <h1>
                    Fast Food Restaurant
                  </h1>
                  <p>
                    Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste magni quos nihil ducimus libero ipsam.
                  </p>
                  <div class="btn-box">
                    <a href="" class="btn1">
                      Order Now
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
      </div>
    </div>

  </section>
  <!-- end slider section -->
</div>

<!-- offer section -->
{{--  specail category  --}}
<section class="offer_section layout_padding-bottom">
  <div class="offer_container">
    <div class="container ">
      <div class="row">
        <div class="container">
        <div class="heading_container heading_center">
            <h2>
              Specials
            </h2>
          </div>
        </div>
        @foreach ($specials->menus as $menu )


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

            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </div>
</section>

<!-- end offer section -->

<!-- food section -->

<section class="food_section layout_padding-bottom">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Our Menu
      </h2>
    </div>



    <div class="filters-content">
        <div class="row grid">

        @foreach ($menus as $menu )
        <div class="col-sm-6 col-lg-4 all pizza">
          <div class="box">
            <div>
              <div class="img-box">
                <img src="{{Storage::url($menu->image)}}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                    {{$menu->name}}
                </h5>
                <p>
                    {{$menu->description}}

                </p>
                <div class="options">
                  <h6>
                    ${{$menu->price}}
                  </h6>

                </div>
              </div>
            </div>
          </div>
        </div>



        @endforeach

      </div>
    </div>
    <div class="btn-box">
      <a href="{{route('menus.index')}}">
        View More
      </a>
    </div>
  </div>
</section>

<!-- end food section -->

<!-- about section -->

<section class="about_section layout_padding">
  <div class="container  ">

    <div class="row">
      <div class="col-md-6 ">
        <div class="img-box">
          <img src="{{asset('fornt/images/about-img.png')}}" alt="">
        </div>
      </div>
      <div class="col-md-6">
        <div class="detail-box">
          <div class="heading_container">
            <h2>
              We Are Feane
            </h2>
          </div>
          <p>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
            in some form, by injected humour, or randomised words which don't look even slightly believable. If you
            are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
            the middle of text. All
          </p>
          <a href="">
            Read More
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end about section -->



  @endsection()



