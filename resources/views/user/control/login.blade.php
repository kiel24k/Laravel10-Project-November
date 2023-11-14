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
                <form action="">
                    <p>Login</p>

                    <div class="email">
                        <input type="email" placeholder="Email" class="form-control">
                    </div>
                    <div class="password">
                        <input type="password" placeholder="Password" class="form-control">
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
