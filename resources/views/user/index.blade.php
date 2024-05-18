@extends('layout.main')

<title>List of Users | Demo App</title>

@include('include.sidebar')

@section('content')
    
<div class="card mt-3">
    <div class="card-body">
        <h5 class="card-title">List of Users</h5>
        <div class="mb-3">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="search" name="search" >
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
        </div>
        <div class="table-responsive">
            {{ $users->links() }}
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Birth Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td><img src="{{ ($user->user_image) ? asset('storage/img/user/' . $user->user_image) : asset('images/defaultImage.jpg') }}" width="100" height="100" ></td>
                            <td>{{ $user->first_name }}</td>
                            <td>{{ $user->middle_name }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>{{ $user->gender }}</td>
                            <td>{{ $user->birth_date }}</td>
                            <td>
                                <a href="/user/show/{{ $user->user_id }}"><button type="button"
                                        class="btn btn-info">View</button></a>
                                <a href="/user/edit/{{ $user->user_id }}"><button type="button"
                                        class="btn btn-warning">Edit</button></a>
                                <a href="/user/delete/{{ $user->user_id }}"><button type="button"
                                        class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection