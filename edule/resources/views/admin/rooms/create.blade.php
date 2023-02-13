@extends('layouts.admin')

@section('title')
    Create Permission
@endsection

@section('content')
    <div class="card shadow-lg mx-4">
        <div class="card-body p-3">
            <div class="container-fluid py-4">
                <div class="col-md-6">
                    <form action="{{ route('rooms.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Room</label>
                            <input class="form-control" name="title" autofocus>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Create Room</button>
                        </div>
                      
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
