@extends('admin.view.index')
@section('list')

<a href="{{route('admin.add')}}" class="btn btn-success">Add</a>

<table class="table table-danger table-striped ">
    <thead>
        <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($types as $type )
        <tr>
            <td>{{$type->name}}</td>
            <td>{{$type->username}}</td>
            <td>{{$type->email}}</td>
            <td>{{$type->address}}</td>
            <td>
                <a href="{{route('admin.delete',$type->id)}}" class="btn btn-danger">Delete</a>
                <a href="{{route('admin.update',$type->id)}}" class="btn btn-info">Edit</a>
            </td>

        </tr>
        @endforeach


    </tbody>
</table>



@endsection
