@extends('layouts.admin')

@section('title')
    Create User
@endsection

@section('content')
    <div class="card shadow-lg mx-4">
        <div class="card-body p-3">
            <div class="container-fluid py-4">
                <div class="col-md-6">
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">User</label>
                            <input type="text" class="form-control" name="name" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Eamil</label>
                            <input type="email" class="form-control" name="email" >
                        </div>
                        
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Password</label>
                            <input name="password" type="password" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Password Confirmation</label>
                            <input name="password_confirmation" type="password" class="form-control" >
                        </div>


                        <label for="" class="h5">Roles</label>
                        <div class="input-group">
                            <div class="form-group d-flex">
                                @foreach ($roles as $id => $role)
                                <div class="ms-3"></div>
                                <label for="">{{ $role }}</label>
                                <input type="checkbox" @if(in_array($id, $roles->pluck('id')->toArray())) checked @endif class="form-check ms-2" name="roles[]"
                                value="{{ $id }}">
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Create User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
