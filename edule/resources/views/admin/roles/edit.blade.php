@extends('layouts.admin')

@section('title')
    Edit Permission
@endsection

@section('content')
    <div class="card shadow-lg mx-4">
        <div class="card-body p-3">
            <div class="container-fluid py-4">
                <div class="col-md-6">
                    <form action="{{ route('roles.update', $role->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Role</label>
                            <input class="form-control" name="title" value="{{ $role->title }}" autofocus>
                        </div>
                        <label for="" class="h5">Permissions</label>
                        <div class="input-group">
                            @foreach ($permissions as $id => $permission)
                                <div >
                                    <label>{{ $permission }}</label>
                                    <input type="checkbox" @if (in_array($id, $role->permissions->pluck('id')->toArray())) checked @endif
                                        name="permissions[]" value="{{ $id }}">
                                </div>
                            @endforeach
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Update Role</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
