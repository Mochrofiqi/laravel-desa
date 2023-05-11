@extends('utama.layouts.master')

@section('content')

    <div class="login box">
        <main class="form-signin">
            <h1 class="text-center" style="font-family: Lucida Sans" style="color: rgb(78, 71, 61)">Login</h1><hr>
            <form action="/login" method="POST">
                @csrf
                <div class="mb-3">
                    <p for="email" class="form-label h5 pt-3 pb-1">Email Address</p>
                    <div class="input-group custom">
                    <input type="text" class="form-control form-control-lg" name="email" placeholder="Email">
                    </div>
                    @error('email')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <p for="password" class="form-label h5 pb-1">Password</p>
                    <div class="input-group custom">
                    <input type="password" class="form-control form-control-lg" name="password" placeholder="**********">
                    </div>
                    @error('password')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="text-center" style="font-family: Segoe UI">
                    <button class="btn btn-primary btn-lg" type="submit">Login</button>
                    <div class="font-16 weight-600 pt-1 pb-1" data-color="#707373">OR</div>
					<div class="text-center">
						<a class="btn btn-outline-primary btn-lg btn-block" href="register">Register To Create Account</a>
                    </div>
                </div>
            </form>
        </main>
    </div>

@endsection
