@extends('layouts.admin')


@section('title')
    Courses
@endsection

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <a href="{{ route('courses.create') }}" class="btn btn-success">Create</a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Image</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            TItle</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Certificate</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Groups</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Month</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Price</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Created at</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($courses as $course)
                                        <tr>
                                            <td>
                                                <img style="width:50px; height: 50px; border-radius: 50%;"
                                                    src="{{ asset("uploads/courses/$course->image") }}"
                                                    alt="course image" />
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">

                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $course->title }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="text-xs font-weight-bold">{{ $course->Certificate }}</span>
                                            </td>
                                            <td class="">
                                                @foreach ($course->groups as $key => $group)
                                                    <span class="text-xs font-weight-bold">{{ $group->title }}</span>
                                                @endforeach
                                            </td>
                                            <td>
                                                <span class="text-xs font-weight-bold">{{ $course->month }}</span>
                                            </td>
                                            <td>
                                                <span class="text-xs font-weight-bold">{{ $course->price }}</span>
                                            </td>
                                            <td>
                                                <span class="text-xs font-weight-bold">{{ $course->created_at }}</span>
                                            </td>

                                            {{-- @can('courses_actions') --}}
                                            <td class="d-flex">
                                                <a href="{{ route('courses.edit', $course->id) }}" class=""
                                                    data-toggle="tooltip" data-original-title="Edit user">
                                                    <i class="fa-solid fa-pen-to-square btn btn-success me-3"></i>
                                                </a>
                                                <form action="{{ route('courses.destroy', $course->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="fa-solid fa-trash btn btn-danger"
                                                        type="submit"></button>
                                                </form>
                                            </td>
                                            {{-- @endcan --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
