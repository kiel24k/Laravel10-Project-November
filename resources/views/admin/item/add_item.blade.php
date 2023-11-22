@extends('admin.view.index')
@section('item')
<div class="add-item">
    <div class="container">
        <div class="form">
            <form action="{{route('add.data.item')}}" method="post">
                @csrf
                <div class="name">
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
                <div class="description">
                    <input type="text" name="description"  class="form-control" placeholder="Description">
                </div>
                <div class="price">
                    <input type="text" name="price"  class="form-control" placeholder="Price">
                </div>
                <div class="quantity">
                    <input type="text" name="quantity"  class="form-control" placeholder="Quanitty">
                </div>
                <div class="image">
                    <input type="text" name="image"  class="form-control" placeholder="Image">
                </div>
                <div class="submit">
                    <button class="btn btn-info" type="submit">Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
