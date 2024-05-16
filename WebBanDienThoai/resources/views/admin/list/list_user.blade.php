@extends('admin.dashboard')


@section('content')
<div class="container">
<h1>List of users</h1>

<form action="{{route('user.searchUser')}}" method="POST">
@csrf
    <input type="text" name="search" placeholder="Search...">
    <button type="submit">Search</button>
</form>
<table class="table table-hover">
    <thead>
        <tr>
             <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Image</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <th>{{$user->id_user}}</th>
            <th>{{$user->name}}</th>
            <th>{{$user->email}}</th>
            <th>{{$user->phone}}</th>
            <th>{{$user->address}}</th> 
            <th><img src="{{ asset('uploads/userimage/' . $user->image) }}"
                                    alt="" style="width: 70%;height: 100px;margin: 20px;"></th> 
            <th>
            <a href="{{route('user.updateUser',['id' => $user->id_user]) }}">Update</a>
            </th>
            <th>
                <a href="{{route('user.deleteUser',['id' => $user->id_user]) }}">Delete</a>
            </th>
        </tr>
        
        @endforeach
    </tbody>
</table>
{{$users->links()}}
</div>
@endsection('content')