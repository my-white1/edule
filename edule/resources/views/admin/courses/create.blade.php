@extends('layouts.admin')

@section('title')
    Create Course
@endsection

@section('content')
    <div class="card shadow-lg mx-4">
        <div class="card-body p-3">
            <div class="container-fluid py-4">
                <div class="col-md-6">
                    <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="no" name="course_certificate">
                        <div class="row col-md-12">

                            <div class="form-group col-md-6">
                                <label for="example-text-input" class="form-control-label">Title</label>
                                <input class="form-control" name="title" required autofocus>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="example-text-input" class="form-control-label">Month</label>
                                <input class="form-control" name="month" required>
                            </div>
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Price</label>
                                <input class="form-control" name="price" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="example-text-input" class="form-control-label">Image</label>
                                <input type="file" class="form-control" name="image" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="">Choose certificate</label>
                                <select name="Certificate" id="" class="form-control ">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Description</label>
                                <textarea class="form-control" name="description" id="" cols="30" rows="10" required></textarea>
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
