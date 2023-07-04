@extends('layouts.auth')

@section('content')
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card hvr-float-shadow">
            <div class="card-body">
                <div class="text-center mb-4">
                    <img src="{{ asset('images/logokailila.png') }}" alt="Company Logo" class="logo">
                </div>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Username" required="">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" required="">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
                <p class="text-center mt-3">Don't have an account? <a href="/register">Register</a></p>
            </div>
        </div>
    </div>
@endsection