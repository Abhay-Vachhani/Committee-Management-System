{{-- {{$message ?? ''}}
<form action="{{ route('login') }}" method="post">
    @csrf
    <input type="text" name="email" value="admin@au.com"><br>
    <input type="password" name="password" value="admin"><br>
    <input type="submit" autofocus>
</form>
@auth
<a href="{{ route('logout') }}">Logout</a>
@endauth


<form action="{{ route('login') }}" method="post">
    @csrf
    <input type="text" name="email" value="{{$email}}"><br>
    <input type="password" name="password" value="password"><br>
    <input type="submit" autofocus>
</form> --}}

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login - ADMIN | USER</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
	<!-- icons-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<!-- animation-->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    
	<style>
    footer {
    position: fixed;
    width: 100%;
    bottom: 0;
	}
    /* new */
	body {
		background: url(img/bg_bg.png);
		background-repeat: no-repeat;
		background-position: center;
		background-size: cover;
		background-attachment: fixed;

		}
	.form-control {
			border: 1px solid #252258
		}
	</style>
</head>
<body class="body" onload="myFunction()">
	<div id="loader"></div>
	<div class="container animate-bottom" style=" display:none;" id="myDiv">
		@include('admin.header-admin')
		<div class="login row ">
			<form class="col-11 col-sm-10 col-md-7 col-lg-4 px-5 mt-sm-5 mt-xs-5 mt-lg-5   animate__animated animate__fadeIn" action="{{ route('login') }}" method="post">
                @csrf
				<div class="text-left mb-3">
					<h4 class="font-lucida text-center">Login</h4>
				</div>
				<hr>
				<div class="mb-3">
					<input type="email" name="email" class="form-control" id="exampleInputEmail1"
						placeholder="Enter Email" aria-describedby="emailHelp" value="admin@au.com" required>
				</div>
				<div class="mb-3">
					<input type="password" name="password" class="form-control" placeholder="Enter Password"
						id="exampleInputPassword1" value="admin" required>
				</div>
				<!-- <div class="mb-3 form-check"><input type="checkbox" class="form-check-input" id="exampleCheck1" required><label class="form-check-label" for="exampleCheck1">Check me out</label></div> -->
				<hr>
				<button type="submit" class="btn med new-btn w-100 text-center" name="submit">Login</button>
			</form>
            @auth
                <a href="{{ route('logout') }}">Logout</a>
            @endauth
		</div>
	</div>
    @include('footer')
	<!-- Pre loader -->
	<script>
		var myVar;
		function myFunction() {
			myVar = setTimeout(showPage, 100);
		}

		function showPage() {
			document.getElementById("loader").style.display = "none";
			document.getElementById("myDiv").style.display = "block";
		}
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
		crossorigin="anonymous"></script>
</body>

</html>