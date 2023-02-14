@extends('layouts.admin')

@section('title')
    Create Course
@endsection

@section('content')
    <div class="card shadow-lg mx-4">
        <div class="card-body p-3">
            <div class="container-fluid py-4">
                <div class="col-md-6">
                    <form action="{{ route('courses.update', $course->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row col-md-12">

                            <div class="form-group col-md-6">
                                <label  class="form-control-label">Title</label>
                                <input class="form-control" name="title" value="{{ $course->title }}" required autofocus>
                            </div>
                            <div class="form-group col-md-6">
                                <label  class="form-control-label">Month</label>
                                <input class="form-control" name="month" required value="{{ $course->month }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label  class="form-control-label">Price</label>
                                <input class="form-control" name="price" required value="{{ $course->price }}">
                            </div>

                            <div class="form-group col-md-6">
                                <label  class="form-control-label">Image</label>
                                <input type="file" class="form-control" name="image">
                                <img src="{{ asset("uploads/courses/$course->image") }}" style="width:70%;" class="mt-5 mb-5"
                                    alt="user image">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Choose certificate</label>
                                <select name="Certificate" id="" class="form-control ">
                                    <option value="yes" @if($course->Certificate == 'yes') selected @endif>Yes</option>
                                    <option value="no"  @if($course->Certificate == 'no') selected @endif>No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="description" id="" cols="30" rows="10" placeholder="description" required>
                                    {{ $course->description }}
                                </textarea >
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
