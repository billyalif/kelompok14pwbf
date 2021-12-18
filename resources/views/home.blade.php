<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viola Boutique</title>
    <link href="css/login.css" rel="stylesheet">
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-in-container">
            <form action="{{ route('login') }}" method="GET">
                <h1>Pegawai</h1>
                <p></p>
                <button class="button" id="signUp">
                    Login
                </button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>Owner</h1>
                    <p> </p>
                    <button class="button" id="signUp">
                        <a href="{{ route('login') }}">Login</a>
                    </button>

                    <p> </p>
                    <button class="button" id="signUp">
                        <a href="{{ route('register.index') }}">Register</a>
                    </button>

                </div>
            </div>
        </div>
    </div>
</body>

</html>