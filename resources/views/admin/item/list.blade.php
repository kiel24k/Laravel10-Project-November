@extends('admin.view.index')
@section('item')
<button class="btn btn-success"><a class="text-white nav-link" href="{{route('add.item')}}">Add item</a></button>
    <div class="item">
        <table class="table table-striped">
            <thead>
                <th>image</th>
                <th>name</th>
                <th>description</th>
                <th>price</th>
                <th>quantity</th>
                <th>actions</th>
            </thead>
            <tbody>
                @foreach ($ItemData as $item)
                    <tr>
                        <td>{{ $item->image }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td><button class="btn btn-success"><a class="nav-link text-white" href="{{route('update.item',$item->id)}}">Update</a></button>
                            <button class="btn btn-danger"><a class="nav-link text-white" href="{{route('item.delete',$item->id)}}">Delete</a></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
