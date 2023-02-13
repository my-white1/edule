@extends('layouts.admin')

@section('title')
    Create Role
@endsection

@section('content')
    <div class="card shadow-lg mx-4">
        <div class="card-body p-3">
            <div class="container-fluid py-4">
                <div class="col-md-6">
                    <form action="{{ route('roles.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Role</label>
                            <input class="form-control" name="title" autofocus>
                        </div>
                        <label for="" class="h5">Permissions</label>
                        <div class="input-group">
                            <div class="form-group d-flex">
                                @foreach ($permissions as $id => $permission)
                                <div class="ms-3"></div>
                                <label for="">{{ $permission }}</label>
                                <input type="checkbox" @if(in_array($id, $permissions->pluck('id')->toArray())) checked @endif class="form-check ms-2" name="permissions[]"
                                value="{{ $id }}">
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Create Role</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
