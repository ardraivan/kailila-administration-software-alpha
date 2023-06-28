<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="container">
        <img src="{{ asset('images/logokailila.png') }}" alt="Company Logo">
        <!-- <h2 class="login-form-text">Register</h2> -->
        <form>
            <div class="grid-container">
                <div>
                    <input type="text" name="fullname" placeholder="Full Name" required="">
                    <input type="email" name="email" placeholder="Email" required="">
                    <input type="tel" name="phone" placeholder="Phone Number" required="">
                </div>
                <div>
                    <input type="date" name="birthdate" required="">
                    <input type="password" name="password" placeholder="Password" required="">
                    <input type="password" name="confirm_password" placeholder="Confirm Password" required="">
                </div>
            </div>
            <button type="submit">Register</button>
            <p>Already have an account? <a href="/login">Login</a></p>
        </form>
    </div>
</body>
</html>