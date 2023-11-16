<table class="table table-danger table-striped ">
    <thead>
        <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Photo</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($types as $type)
            <tr>
                <td>{{ $type->name }}</td>
                <td>{{ $type->photo }}</td>
            </tr>
        @endforeach

    </tbody>
</table>
