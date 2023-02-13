@extends('layouts.admin')

@section('title')
    Create Course
@endsection

@section('content')
    <div class="card shadow-lg mx-4">
        <div class="card-body p-3">
            <div class="container-fluid py-4">
                <div class="col-md-6">
                    <form action="{{ route('courses.update', $course->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row col-md-12">

                            <div class="form-group col-md-6">
                                <label for="example-text-input" class="form-control-label">Title</label>
                                <input class="form-control" name="title" value="{{ $course->title }}" required autofocus>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="example-text-input" class="form-control-label">Month</label>
                                <input class="form-control" name="month" required value="{{ $course->month }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="example-text-input" class="form-control-label">Price</label>
                                <input class="form-control" name="price" required value="{{ $course->price }}">
                            </div>
                        </div>
                            <div class="form-group">
                            <button type="submit" class="btn btn-success">Update Course</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
