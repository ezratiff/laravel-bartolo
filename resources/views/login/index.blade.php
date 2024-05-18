@extends('layout.main')

@section('content')

<div class="card col-md-4 position-absolute top-50 start-50 translate-middle">
    <div class="card-body">
        <h5 class="card-title">Login</h5>
        <form action="/process/login" method="post">
            @csrf
            <div class="mb-3">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" />
                @error('username') <p class="text-danger">{{ $message }}</p> @enderror
            </div>
            <div class="mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" />
                @error('password') <p class="text-danger">{{ $message }}</p> @enderror
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>

@endsection
