<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="container">
        <img src="{{ asset('images/logokailila.png') }}" alt="Company Logo">
        <!-- <h2 class="login-form-text">Login</h2> -->
        <form>
            <input type="text" name="username" placeholder="Username" required="">
            <input type="password" name="password" placeholder="Password" required="">
            <button type="submit">Login</button>
            <p>Don't have an account? <a href="/register">Register</a></p>
        </form>
    </div>
</body>
</html>