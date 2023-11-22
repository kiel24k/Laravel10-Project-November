@extends('admin.view.index')
@section('list')
    <div class="container">
        <form action="{{ route('admin.update') }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$types->id}}">
            <div class="username">
                <input type="text" class="form-control" name="username" value="{{ $types->username }}">
            </div>
            <div class="email">
                <input type="text" class="form-control" name="email" value="{{ $types->email }}">
            </div>
            <div class="address">
                <input type="text" class="form-control" name="address" value="{{ $types->address }}">
            </div>
            <div class="submit">
                <input type="submit" class="btn btn-info">
            </div>
        </form>
    </div>
@endsection
