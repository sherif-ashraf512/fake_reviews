@php
$customizerHidden = 'customizer-hide';
$configData = Helper::appClasses();
@endphp
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Osaka - One Page Portfolio Bootstrap 4">
	<meta name="author" content="SVYYAT">
	<title>RVP ->- Review Verfied Products</title>
    <link rel="stylesheet" href="{{asset('asscte/css/login.css')}}">
	<link rel="stylesheet" href="{{asset('asscte/css/bootstrap.min.css')}}">
</head>
<body>

	<div class="login-container">
		<div class="login-wrap">
		  <div class="login-html">
			<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
			<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
			<div class="login-form">
			  <!-- SIGN IN FORM -->
			  <form id="loginForm" action="{{route('login')}}" method="POST" class="sign-in-htm">
          @csrf
				<div class="group">
				  <label for="login-email" class="label">Email</label>
				  <input id="login-email" name="email" type="email" class="input" required>
          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
				</div>
				<div class="group">
				  <label for="login-password" class="label">Password</label>
				  <input id="login-password" name="password" type="password" class="input" data-type="password" required>
				</div>
				<div class="group">
				  <input id="check" type="checkbox" class="check" checked>
				  <label for="check"><input type="checkbox" name="remember" id="vehicle1" name="vehicle1" value="Bike"> Keep me Signed in</label>
				</div>
				<div class="group">
				  <input type="submit" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
				  <a href="#forgot">?Forgot Password</a>
				</div>
			  </form>

			  <!-- SIGN UP FORM -->
			  <form id="signupForm" action="{{route('register')}}"method="POST" class="sign-up-htm">
				<!-- Your signup form fields here -->
        @csrf
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
        @endif
				 <div class="group">
				  <label for="name" class="label">Name</label>
				  <input id="name" name="name" type="name" class="input" required>
				</div>
				<div class="group">
				 <div class="group">
				  <label for="login-email" class="label">ُEmail</label>
				  <input id="login-email" type="email" name="email" class="input" required>
				</div>
				<div class="group">
				  <label for="login-password" class="label">Password</label>
				  <input id="login-password" name="password" type="password" class="input" data-type="password" required>
				</div>
				<div class="group">
				  <input id="check" type="checkbox" class="check" checked>
				  <label for="check"> <input type="checkbox" name="remember" id="vehicle1" name="vehicle1" value="Bike"> Keep Me Signed in</label>
				</div>
				<div class="group">
				  <input type="submit" class=" btn btn-outline-secondary btn-lg w-100  rounded-pill" value="Create Account">
				</div>
				<div class="hr"></div>
			  </form>
			</div>
		  </div>
		</div>
	  </div>
    <script src="{{asset('asscte/js/main.js')}}"> </script>
</body>
</html>
