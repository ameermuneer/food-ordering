@extends('layouts.app')
@section('head')


  <!-- Custom fonts for this template -->
  <link href="  {{asset('welcome/vendor/fontawesome-free/css/all.min.css')}}
" rel="stylesheet">
  <link href="  {{asset('welcome/vendor/simple-line-icons/css/simple-line-icons.css')}}
" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="  {{asset('welcome/css/landing-page.min.css')}}
" rel="stylesheet">
@endsection
@if (Route::has('login'))
              
                    @auth
                   @section('left-nav')
                   <li class="nav-item">
                    <a class="nav-link" href="{{ url('/home') }}">{{ __('Home') }}</a>
                  </li>

                   @endsection
                    
                    @endauth
      
@endif
@section('content-welcome')
    <style>
        .bgimgwel {
            {{--background-image: url('{{asset('welcome/img/bg-showcase-2.jpg')}}');--}}
            background-color: white;
        }
    </style>
  <!-- Masthead -->
  <div class="bgimgwel">
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
    
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5">Sign up to get the delecious food now!</h1>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form>
            <div class="form-row justify-content-center">
              <div class="col-12 col-md-3">
              <a class="btn btn-primary " href="{{ route('register') }}">Order Now</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </header>

  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-screen-desktop m-auto text-primary"></i>
            </div>
            <h3>Fast Deleivery</h3>
            <p class="lead mb-0">You can order what ever pizza you want and we will deleiver it to your home!</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-layers m-auto text-primary"></i>
            </div>
            <h3>Hot Food</h3>
            <p class="lead mb-0">The food is arriving to your house in a healthy situation!</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-check m-auto text-primary"></i>
            </div>
            <h3>Easy to Use</h3>
            <p class="lead mb-0">Every one can easily use the system!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Image Showcases -->
  <section class="showcase">
    <div class="container-fluid p-0">
      <div class="row no-gutters">

        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url({{ asset('welcome/img/bg-showcase-1.jpg') }});"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Pizaa with diiffrent sizes</h2>
          <p class="lead mb-0">We have pizza that meets every person favouirts</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image:url({{ asset('welcome/img/bg-showcase-2.jpg') }});"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Special offers</h2>
          <p class="lead mb-0">Stay tuned, get your special offer daily!</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url({{ asset('welcome/img/bg-showcase-3.jpg') }});"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>A taste that you will never forget</h2>
          <p class="lead mb-0">Buy one, and we can guarantee it won't be the last!</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="testimonials text-center bg-light">
    <div class="container">
      <h2 class="mb-5">What people are saying...</h2>
      <div class="row">
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="  {{asset('welcome/img/testimonials-1.jpg')}}" alt="">
            <h5>Margaret E.</h5>
            <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="{{asset('welcome/img/testimonials-2.jpg')}}" alt="">
            <h5>Fred S.</h5>
            <p class="font-weight-light mb-0">"This resturant is amazing, i order pizza everyday and it just get better"</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="{{asset('welcome/img/testimonials-3.jpg')}}" alt="">
            <h5>Sarah W.</h5>
            <p class="font-weight-light mb-0">"Thanks so much for making these delicious pizza!"</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="call-to-action text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h2 class="mb-4">Ready to get started? Sign up now!</h2>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form>
            <div class="form-row justify-content-center">
              
              <div class="col-12 col-md-3">
              <a class="btn btn-primary " href="{{ route('register') }}">Enrol</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#">About</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Contact</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; .</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('welcome/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('welcome/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<div>
@endsection
