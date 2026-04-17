
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- BACKGROUND (landing) -->
    <div class="background">
        <h1 class="bg-logo">X</h1>
    </div>

    <!-- LOGIN MODAL -->
    <div class="modal-overlay">

        <div class="login-card">

            <h2>Sign in to X</h2>
            @if(session('error'))
                <div class="error-box">
                    {{ session('error') }}
                </div>
            @endif
            <form method="POST" action="/login">
                <input type="text" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">

                <button type="submit">Login</button>
            </form>

            <a href="#" class="small-link">Forgot password?</a>

            <p class="signup-text">
                Don’t have an account? <a href="/register">Sign up</a>
            </p>

        </div>

    </div>

</body>
</html>