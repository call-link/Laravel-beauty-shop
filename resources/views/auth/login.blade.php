@extends('authLayaout')
@section('content')
    <div class="wrapper">
        <form action="{{route('login.store')}}" method="POST">
            @csrf
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" name="email" placeholder="Your email" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Your Password" id="" required>
            </div>
            <div class="remember-folget">
                <label for="">
                    <input type="checkbox" name="remember">Remember Me.
                </label>
                <br>
            </div>
            <button type="submit" class="btn">Login</button><br>
            <a href="">Forget Password</a>
            <div class="register-list">
                <p>Don't have account ?</p><a href="">Register</a>
            </div>
            
        </form>
    </div>
@endsection