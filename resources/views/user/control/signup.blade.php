@extends('user/main/index')
@section('signup')


    <signup>
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
                    <p>Sign up</p>

                    <div class="gameid">
                        <input type="text" placeholder="GameID" class="form-control">
                    </div>
                    <div class="email">
                        <input type="email" placeholder="Email" class="form-control">
                    </div>
                    <div class="password">
                        <input type="password" placeholder="Password" class="form-control">
                    </div>
                    <div class="confirmpassword">
                        <input type="password" placeholder="confirm password" class="form-control">
                    </div>
                    <div class="submit">
                        <button class="btn" type="submit">Next</button>
                    </div>
                    <div class="signuplink">
                    <span><small>Already Account?<a href="{{route('user.login')}}"> Log In</a></small></span>
                </div>
                </form>
            </div>
        </div>
        </div>
        @endsection
