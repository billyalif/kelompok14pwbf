<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login | Viola Boutique</title>
	<link href="css/login.css" rel="stylesheet">
</head>

<body>
	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<form action="#">
			</form>
		</div>
		<div class="form-container sign-in-container">
			<form action="{{ route('login.authenticate') }}" method="POST">
				@csrf

				<h1>Login</h1>
				<input type="email" name="email" placeholder="Email" required/>
				<input type="password" name="password" placeholder="Password" required/>
				<p href="#">Forgot your password?</p>
				<button type="submit" class="button" id="signin">Sign In</button>

				<p>Masuk ke Home</p>
				<button class="button" id="signUp">
					<a href="/home">Kembali ke Home</a>
				</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<h1>Viola Boutique</h1>
					<p>Klik tombol di bawah untuk membuat akun</p>
					<button class="button" id="signUp">
						<a href="{{ route('register.index') }}">Buat akun</a>
					</button>
				</div>
			</div>
		</div>
	</div>


</body>

</html>