@extends('layouts.admin')

@section('title')
    Edit Worker
@endsection

@section('content')
    <div class="card shadow-lg mx-4">
        <div class="card-body p-3">
            <div class="container-fluid py-4">
                <div class="col-md-6">
                    <form action="{{ route('workers.update', $worker->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row col-md-12">
                            <div class="form-group col-md-6">
                                <label for="example-text-input" class="form-control-label">Name</label>
                                <input class="form-control w-100" name="name" value="{{ $worker->user->name }}"
                                    autofocus>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email" value="{{ $worker->user->email }}"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Image</label>
                                <input type="file" class="form-control" name="image">
                                @php
                                    $worker_image = $worker->user->image;
                                @endphp
                                <img src="{{ asset("uploads/users/$worker_image") }}" style="width:70%;" class="mt-5 mb-5"
                                    alt="user image">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Age</label>
                                <input type="number" class="form-control" value="{{ $worker->age }}" name="age"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Price Per Month</label>
                                <input type="text" class="form-control" value="{{ $worker->price_per_month }}"
                                    name="price_per_month" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Number</label>
                                <input type="number" class="form-control " value="{{ $worker->number }}" name="number"
                                    required>
                            </div>
                        </div>


                        <div class="form-group col-md-6">
                            <label for="" class="h5">Roles</label>
                            <div class="input-group ">
                                <div class="form-group d-flex">
                                    @foreach ($roles as $id => $role)
                                        <label for="">{{ $role }}</label>
                                        <input type="checkbox" @if (in_array($id, $worker->user->roles->pluck('id')->toArray())) checked @endif
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
