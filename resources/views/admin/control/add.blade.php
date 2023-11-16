@extends('admin.view.index')
@section('list')
    <div class="container">
        <form action="{{ route('admin.adds') }}" method="post">
            @csrf
            <div class="username">
                <input type="text" class="form-control" name="name" >
            </div>
            <div class="email">
                <input type="text" class="form-control" name="password">
            </div>
            <div class="address">
                <input type="text" class="form-control" name="email" >
            </div>
            <div class="submit">
                <input type="submit" class="btn btn-info">
            </div>
        </form>
    </div>
@endsection
