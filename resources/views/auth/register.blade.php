@extends('authLayaout')
@section('content')

<body>
    <div class="wrapper">
        <form  method="POST" action="{{ route('register.create') }}">
            @csrf
            <h1>Register</h1>
            <div class="input-box">
                <input type="text" placeholder="Your Name" name="name" required>
            </div>
            <div class="input-box">
                <input type="email" name="email" placeholder="Your Email" id="" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Your Password" id="" required>
            </div>
            <div class="input-box">
                <input type="password" name="password_confirmation" placeholder="confirm Password" id="" required>
            </div>
            <div class="remember-folget">
                <label for="">
                    <input type="checkbox" name="remember">Remember Me.
                </label>
                <br>
            </div>
            <input type="submit" class="btn" value="Register"><br>
            <a href="">Forget Password</a>
            <div class="register-list">
                <p>Do you have account ?</p><a href="">Login</a>
            </div>

        </form>
    </div>
    @endsection