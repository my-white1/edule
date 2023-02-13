@extends('layouts.admin')

@section('title')
    Edit Room
@endsection

@section('content')
    <div class="card shadow-lg mx-4">
        <div class="card-body p-3">
            <div class="container-fluid py-4">
                <div class="col-md-6">
                    <form action="{{ route('rooms.update', $room->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label"></label>
                            <input class="form-control" name="title" value="{{ $room->title }}" autofocus>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Update Room</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
