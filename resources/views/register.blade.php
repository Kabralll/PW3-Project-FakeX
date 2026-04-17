<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>

<div class="auth-container">

    <div class="auth-card">

        <h2>Create your account</h2>

        <form method="POST" action="/register">
            @csrf

            <input type="text" name="name" placeholder="Name" required>

            <input type="text" name="username" placeholder="Username" required>

            <input type="email" name="email" placeholder="Email" required>

            <input type="password" name="password" placeholder="Password" required>

            <input type="password" name="password_confirmation" placeholder="Confirm password" required>

            <button type="submit">Sign up</button>
        </form>

        <p class="switch">
            Already have an account?
            <a href="/login">Log in</a>
        </p>

    </div>

</div>

</body>
</html>