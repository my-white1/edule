@extends('layouts.admin')


@section('title')
    Groups
@endsection

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <a href="{{ route('groups.create') }}" class="btn btn-success">Create</a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                      
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            TItle</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Course</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Weeks</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Room</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Start</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            End</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Created at</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (empty($groups))
                                        No Groups
                                    @endif
                                    @foreach ($groups as $group)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">

                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $group->title }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="">

                                                <span class="text-xs font-weight-bold">{{ $group->course->title }}</span>

                                            </td>
                                            <td class="">
                                                @foreach ($group->weeks as $key => $week)
                                                    <span class="text-xs font-weight-bold">{{ $week->title }}</span>
                                                @endforeach
                                            </td>
                                            <td>
                                                <span class="text-xs font-weight-bold">{{ $group->room->title }}</span>
                                            </td>
                                            <td>
                                                <span class="text-xs font-weight-bold">{{ $group->start }}</span>
                                            </td>
                                            <td>
                                                <span class="text-xs font-weight-bold">{{ $group->end }}</span>
                                            </td>
                                            
                                            @can('groups_actions')
                                            <td class="d-flex">
                                                <a href="{{ route('groups.edit', $group->id) }}" class=""
                                                    data-toggle="tooltip" data-original-title="Edit user">
                                                    <i class="fa-solid fa-pen-to-square btn btn-success me-3"></i>
                                                </a>
                                                <form action="{{ route('groups.destroy', $group->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="fa-solid fa-trash btn btn-danger"
                                                        type="submit"></button>
                                                </form>
                                            </td>
                                            @endcan
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Deleted Permission table</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            TItle</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Status</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">

                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">Permission title</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-xs font-weight-bold">working</span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                                data-toggle="tooltip" data-original-title="Edit user">
                                                Edit
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
