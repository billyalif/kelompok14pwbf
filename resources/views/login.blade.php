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
		<form action="/dashboard" method="get">
			<h1>Login</h1>

			<input type="Username" placeholder="No Karyawan" />
			<input type="password" placeholder="Password" />
			<p href="#">Forgot your password?</p>
			<button type="submit" class="button" id="signin" >Sign In</button>
            <p >Masuk ke Home</p>
            <button class="button" id="signUp">
			<a href="/home" >Kembali ke Home</a>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-right">
				<h1>Viola Boutique</h1>
				<p>Klik tombol di bawah untuk membuat akun</p>
				<button class="button" id="signUp">
				<a href="/signup" >Buat akun</a>
				</button>

			</div>
		</div>
	</div>
</div>


</body>
</html>
