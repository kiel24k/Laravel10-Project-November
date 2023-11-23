@extends('user.main.index')
@section('section')
<place-order>
<div class="place-order">
    <div class="container">
        <form action="{{route('order')}}" method="post">
            @csrf
            <input type="text" name="auth" value="@auth
            {{Auth::user()->id}}
            @endauth">
            <div class="order-image">
                <input type="text" name="order_image" class="form-control" value="{{$item->image}}">
            </div>
            <div class="order-name">
                <input type="text" name="order_name" class="form-control" value="{{$item->name}}">
            </div>
            <div class="order-description">
                <input type="text" name="order_description" class="form-control" value="{{$item->description}}">
            </div>
            <div class="order-quantity">
                <input type="number" name="order_quantity" class="form-control" value="1">
            </div>
            <div class="order-price">
                <input type="text" name="order_price" class="form-control" value="{{$item->price}}">
            </div>
            <div class="submit-order">
               <button class="btn btn-info" type="submit">Place Order</button>
            </div>
        </form>
    </div>
</div>
</place-order>
@endsection
