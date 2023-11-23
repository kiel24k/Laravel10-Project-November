@extends('user/main/index')
@section('section')
    <section>
        <div class="container navbar-expand p-5">
            <div class="row">
                <div class="col">
                    <ul class="navbar-nav justify-content-center">
                        <li class="nav-item p-1">
                            <a href="" class="nav-link p-2">Coins Rewards</a>
                        </li>
                        <li class="nav-item p-1">
                            <a href="" class="nav-link p-2">Free Shipping</a>
                        </li>
                        <li class="nav-item p-1">
                            <a href="" class="nav-link p-2">Shop Mall</a>
                        </li>
                        <li class="nav-item p-1">
                            <a href="" class="nav-link p-2">Vouchers</a>
                        </li>
                        <li class="nav-item p-1">
                            <a href="" class="nav-link p-2">As low as $9</a>
                        </li>
                        <li class="nav-item p-1">
                            <a href="" class="nav-link p-2">Shop Beauty</a>
                        </li>
                        <li class="nav-item p-1">
                            <a href="" class="nav-link p-2">Shop Styles</a>
                        </li>
                        <li class="nav-item p-1">
                            <a href="" class="nav-link p-2">Shop Supermarket</a>
                        </li>
                        <li class="nav-item p-1">
                            <a href="" class="nav-link p-2">Gadget Zone</a>
                        </li>
                        <li class="nav-item p-1">
                            <a href="" class="nav-link p-2">Partner Promos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($store as $stores)
                    <div class="col">
                        <form action="">
                            <img src="{{ asset('picture/case.png') }}" alt="">
                            <div class="description">
                                <p>{{ $stores->name }}</p>
                                <div class="price">
                                    <h6>₱{{ $stores->price }}.00</h6>
                                </div>
                                <div class="buy-button">
                                    <button class="btn btn-info"><a href="{{ route('user.placeorder', $stores->id) }}"
                                            class="nav-link text-white">Buy</a></button>
                                </div>


                            </div>
                        </form>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
