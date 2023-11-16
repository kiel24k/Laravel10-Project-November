@extends('user/main/index')
@section('login')
    <login>
        <div class="container">
            <div class="row">
                <div class="col text-start ">
                    <a href="index.php" class="nav-link text-dark ">
                        <h3>Shop</h3>
                    </a>
                </div>
                <div class="col text-end mt-2">
                    <a href="" class="nav-link text-dark">
                        <h5>Need Help?</h5>
                    </a>
                </div>
            </div>
        </div>
        <div class="container-fluid form-container text-center">
            <div class="form">
                <form action="{{route('user.login')}}" method="POST">
                    @csrf
                    <p>Login</p>
                    <div class="email">
                        @error('email')
                        <span class="text-danger">{{$message}}</span>

                        @enderror
                        <input type="email" name="email" placeholder="Email" class="form-control" autofocus>
                    </div>
                    <div class="password">
                        @error('password')
                        <span class="text-danger">{{$message}}</span>

                        @enderror
                        <input type="password" name="password" placeholder="Password" class="form-control" autofocus>
                    </div>

                    <div class="submit">
                        <button class="btn" type="submit">Login</button>
                    </div>
                </form>
                <div class="signuplink text-dark">
                    <span><small class="text-dark">New To Shop?<a href="{{route('user.signup')}}"> Sign Up</a></small></span>
                </div>
            </div>
        </div>
        </div>
        </signup>
        @endsection
