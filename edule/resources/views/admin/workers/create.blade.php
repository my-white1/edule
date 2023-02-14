@extends('layouts.admin')

@section('title')
    Create Worker
@endsection

@section('content')
    <div class="card shadow-lg mx-4">
        <div class="card-body p-3">
            <div class="container-fluid py-4">
                <div class="col-md-6">
                    <form action="{{ route('workers.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row col-md-12">
                            <div class="form-group col-md-6">
                                <label for="example-text-input" class="form-control-label">Name</label>
                                <input class="form-control w-100" name="name" autofocus>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Image</label>
                                <input type="file" class="form-control" name="image"  required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password_confirmation" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Age</label>
                                <input type="number" class="form-control" name="age" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Price Per Month</label>
                                <input type="text" class="form-control" name="price_per_month" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Number</label>
                                <input type="number" class="form-control" name="number" required>
                            </div>
                        </div>
                        

                        <div class="form-group col-md-6">
                            <label for="" class="h5">Roles</label>
                            <div class="input-group ">
                                <div class="form-group d-flex">
                                    @foreach ($roles as $id => $role)
                                        <label for="">{{ $role }}</label>
                                        <input type="checkbox" @if (in_array($id, $roles->pluck('id')->toArray())) checked @endif
                                            class="form-check ms-2" name="roles[]" value="{{ $id }}">
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Create Course</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
