<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="shortcut icon" href="images/favicon.png" type="">

        <title> Feane </title>

        <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="{{asset('fornt/css/bootstrap.css')}}" />

        <!--owl slider stylesheet -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
        <!-- nice select  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
        <!-- font awesome style -->
        <link href="{{asset('fornt/css/font-awesome.min.css')}}" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href="{{asset('fornt/css/style.css')}}" rel="stylesheet" />
        <!-- responsive style -->
        <link href="{{asset('fornt/css/responsive.css')}}" rel="stylesheet" />




        <!-- Scripts -->
 {{--     @vite(['resources/css/app.css', 'resources/js/app.js'])  --}}

    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="hero_area">
            <div class="bg-box">
              <img src="{{asset('fornt/images/hero-bg.jpg')}}" alt="">
        </div>
            <!-- header section strats -->
            <header class="header_section">
              <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="/">
                    <span>
                      Feane
                    </span>
                  </a>

                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  mx-auto ">
                      <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('menus.index')}}">Menu</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('categories.index')}}">Categories</a>
                      </li>
                    </ul>
                    <div class="user_option">
                      <a href="" class="user_link">
                        <i class="fa fa-user" aria-hidden="true"></i>
                      </a>

                      <form class="form-inline">
                        <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                          <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                      </form>
                      <a href="{{route('reservations.step.one')}}" class="order_online">
                       Make Reservation
                      </a>
                    </div>
                  </div>
                </nav>
              </div>
            </header>

            <main class="py-4">
                @yield('content')
            </main>

            <!-- end slider section -->
        </div>



        <footer class="footer_section">
                <div class="container">
                  <div class="row">
                    <div class="col-md-4 footer-col">
                      <div class="footer_contact">
                        <h4>
                          Contact Us
                        </h4>
                        <div class="contact_link_box">
                          <a href="">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>
                              Location
                            </span>
                          </a>
                          <a href="">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>
                              Call +01 1234567890
                            </span>
                          </a>
                          <a href="">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>
                              demo@gmail.com
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 footer-col">
                      <div class="footer_detail">
                        <a href="" class="footer-logo">
                          Feane
                        </a>
                        <p>
                          Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
                        </p>
                        <div class="footer_social">
                          <a href="">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                          </a>
                          <a href="">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                          </a>
                          <a href="">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                          </a>
                          <a href="">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                          </a>
                          <a href="">
                            <i class="fa fa-pinterest" aria-hidden="true"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 footer-col">
                      <h4>
                        Opening Hours
                      </h4>
                      <p>
                        Everyday
                      </p>
                      <p>
                        10.00 Am -10.00 Pm
                      </p>
                    </div>
                  </div>
                  <div class="footer-info">

                  </div>
                </div>
              </footer>

              <!-- jQery -->
              <script src="{{asset('fornt/js/jquery-3.4.1.min.js')}}"></script>
              <!-- popper js -->
              <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
              </script>
              <!-- bootstrap js -->
              <script src="{{asset('fornt/js/bootstrap.js')}}"></script>
              <!-- owl slider -->
              <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
              </script>
              <!-- isotope js -->
              <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
              <!-- nice select -->
              <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
              <!-- custom js -->
              <script src="{{asset('fornt/js/custom.js')}}"></script>

        </div>
    </body>
</html>
