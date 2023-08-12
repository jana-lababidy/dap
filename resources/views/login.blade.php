<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Pipeline Project Management Bootstrap Theme</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A project management Bootstrap theme by Medium Rare">
    <link href="{{asset('assets/img/favicon.ico')}}" rel="icon" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gothic+A1" rel="stylesheet">
    <link href="{{asset('assets/css/theme.css')}}" rel="stylesheet" type="text/css" media="all" />
  </head>

  <body>
    <div class="main-container fullscreen">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 col-md-7">
            <div class="text-center">
              <h1 class="h2">Welcome Back 👋</h1>
              <p class="lead">Log in to your account to continue</p>
              <button class="btn btn-lg btn-block btn-primary">
                <img alt="Google" src="assets/img/logo-google.svg" class="rounded align-top mr-2" />Continue with Google
              </button>
              <hr>
              <form action="{{route('auth')}}" method="post">
        @csrf
                <div class="form-group">
                  <input class="form-control" type="email" placeholder="Email Address" name="email" />
                  @error('email')<div class="text-danger text-left">{{$message}}</div>@enderror
                </div>

                <div class="form-group">
                  <input class="form-control" type="password" placeholder="Password" name="password" />
                  @error('password')<div class="text-danger text-left">{{$message}}</div>@enderror
                  <div class="text-right">
                    <small><a href="#">Forgot password?</a>
                    </small>
                  </div>
                </div>
                <button class="btn btn-lg btn-block btn-primary" role="button" type="submit">
                  Log in
                </button>
                <div class="text-right">
                    <small><a href="{{route('register')}}">Create account</a>
                    </small>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.js')}}"></script>

    <!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js')}} if site does not use that feature) -->

    <!-- Autosize - resizes textarea inputs as user types -->
    <script type="text/javascript" src="{{asset('assets/js/autosize.min.js')}}"></script>
    <!-- Flatpickr (calendar/date/time picker UI) -->
    <script type="text/javascript" src="{{asset('assets/js/flatpickr.min.js')}}"></script>
    <!-- Prism - displays formatted code boxes -->
    <script type="text/javascript" src="{{asset('assets/js/prism.js')}}"></script>
    <!-- Shopify Draggable - drag, drop and sort items on page -->
    <script type="text/javascript" src="{{asset('assets/js/draggable.bundle.legacy.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/swap-animation.js')}}"></script>
    <!-- Dropzone - drag and drop files onto the page for uploading -->
    <script type="text/javascript" src="{{asset('assets/js/dropzone.min.js')}}"></script>
    <!-- List.js')}} - filter list elements -->
    <script type="text/javascript" src="{{asset('assets/js/list.min.js')}}"></script>

    <!-- Required theme scripts (Do not remove) -->
    <script type="text/javascript" src="{{asset('assets/js/theme.js')}}"></script>

  </body>

</html>