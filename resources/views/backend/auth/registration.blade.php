
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{ asset('style')}}/img/logo/logo.png" rel="icon">
  <title>BaseManagement - Register</title>
  <link href="{{ asset('style')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="{{ asset('style')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="{{ asset('style')}}/css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Register Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Register</h1>
                  </div>
                  @if(Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                   @endif
                   @if(Session::has('fail'))
                    <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                   @endif
                  <form action="{{ route('register-user')}}" method="POST">

                   
                    @csrf
                    <div class="form-group">
                      <label>First Name</label>
                      <input type="text"
                       class="form-control" 
                       id="exampleInputFirstName" 
                       name="first_name"
                       placeholder="Enter First Name"
                        value="{{old('first_name')}}"/>
                      <span class="text-danger">
                        @error('first_name'){{ $message }}
                      @enderror
                    </span>
                    </div>
                    <div class="form-group">
                      <label>Last Name</label>
                      <input type="text"
                       class="form-control" 
                       id="exampleInputLastName" 
                       name="last_name"
                       placeholder="Enter Last Name"
                       value="{{old('last_name')}}"/>
                      <span class="text-danger">
                        @error('last_name'){{ $message }}
                        @enderror
                      </span>
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email"
                       class="form-control"
                        id="exampleInputEmail" 
                        aria-describedby="emailHelp"
                        name="email"
                        placeholder="Enter Email Address"
                        value="{{old('email')}}"/>
                        <span class="text-danger">
                          @error('email'){{ $message }}
                          @enderror
                        </span>
                      </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password"
                       class="form-control" 
                       id="exampleInputPassword"
                       name="password"
                       placeholder="Password"
                       value="{{old('password')}}"/>
                      <span class="text-danger">
                        @error('password'){{ $message }}
                        @enderror
                      </span>
                    </div>
                    <div class="form-group">
                      <label>Repeat Password</label>
                      <input type="password" class="form-control" id="exampleInputPasswordRepeat"
                        placeholder="Repeat Password"/>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <hr>
                    <a href="index.html" class="btn btn-google btn-block">
                      <i class="fab fa-google fa-fw"></i> Register with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                    </a>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="font-weight-bold small" href="login">Already have an account?</a>
                  </div>
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Register Content -->
  <script src="{{ asset('style')}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{ asset('style')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('style')}}/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="{{ asset('style')}}/js/ruang-admin.min.js"></script>
</body>

</html>