@extends('layouts.admin')

@section('title')
    Create Group
@endsection

@section('content')
    <div class="card shadow-lg mx-4">
        <div class="card-body p-3">
            <div class="container-fluid py-4">
                <div class="col-md-6">
                    <form action="{{ route('groups.update', $group->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Title</label>
                                <input class="form-control w-100" value="{{ $group->title }}" name="title" autofocus>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Start</label>
                                <input type="time" class="form-control" value="{{ $group->start }}" name="start" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">End</label>
                                <input type="time" class="form-control" value="{{ $group->end }}" name="end" required>
                            </div>
                        </div>
                        
                        <div class="row col-md-12">
                            <div class="form-group col-md-6">
                                <label for="" class="h5">Courses</label>
                                <div class="input-group ">
                                    <select name="course_id" class="form-control">
                                        <option value="" selected>Choose Course</option>
                                        @foreach ($courses as $id => $course)
                                            <option @if($group->course_id == $id) selected @endif   value="{{ $id }}">{{ $course }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
    
                            <div class="form-group col-md-6">
                                <label for="" class="h5">Rooms</label>
                                <div class="input-group ">
                                    <select name="room_id" class="form-control">
                                        <option value="" selected>Choose Room</option>
                                        @foreach ($rooms as $id => $room)
                                            <option @if($group->room_id == $id) selected @endif value="{{ $id }}">{{ $room }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="" class="h5">Weeks</label>
                            <div class="input-group ">
                                <div class="form-group d-flex">
                                    @foreach ($weeks as $id => $week)
                                        <label for="">{{ $week }}</label>
                                        <input type="checkbox" @if(in_array($id, $group->weeks->pluck('id')->toArray())) checked @endif
                                            class="form-check ms-2" name="weeks[]" value="{{ $id }}">
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Create Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
