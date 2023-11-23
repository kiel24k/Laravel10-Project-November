@extends('admin.view.index')
@section('item')
    <div class="update">
        <div class="container">
            <div class="form">

                <form action="{{route('update.data.item')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $item->id }}">
                    <div class="name">
                        <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $item->name }}">
                    </div>
                    <div class="description">
                        <input type="text" name="description" class="form-control"  placeholder="Description" value="{{ $item->description }}">
                    </div>
                    <div class="price">
                        <input type="text" name="price" class="form-control"  placeholder="Price" value="{{ $item->price }}">
                    </div>
                    <div class="quantity">
                        <input type="text" name="quantity" class="form-control"  placeholder="Quantity" value="{{ $item->quantity }}">
                    </div>
                    <div class="image">
                        <input type="text" name="image" class="form-control"  placeholder="Image" value="{{ $item->image }}">
                    </div>
                    <div class="submit">
                        <button class="btn btn-info" type="submit">Submit</button>
                    </div>

                </form>
            </div>
        @endsection
