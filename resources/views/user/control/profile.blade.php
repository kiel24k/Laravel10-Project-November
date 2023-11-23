@extends('user.main.index')
@section('section')
    <profile>
        <div class="profile">
            <div class="container">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            @auth
                                <p class="text-info"> {{ Auth::user()->name }}'s Cart</p>

                            @endauth
                            <th>Orders</th>
                            <th>Info</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($table as $items)
                            <tr>
                                <td>{{$items->product_name}}</td>
                                <td>{{$items->status}}</td>
                            </tr>
                        @endforeach






                    </tbody>
                </table>
            </div>
        </div>
    </profile>
@endsection
