@extends('layouts.admin')


@section('title')
    Roles
@endsection

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <a href="{{ route('roles.create') }}" class="btn btn-success">Create</a>
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
                                            Permissions</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Created at</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $role)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">

                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $role->title }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="">
                                                @foreach($role->permissions as $key => $permission)
                                                <span class="text-xs font-weight-bold">{{ $permission->title }}</span>
                                                @endforeach
                                            </td>
                                            <td>
                                                <span class="text-xs font-weight-bold">{{ $role->created_at }}</span>
                                            </td>
                                            
                                            @can('roles_actions')
                                            <td class="d-flex">
                                                <a href="{{ route('roles.edit', $role->id) }}" class=""
                                                    data-toggle="tooltip" data-original-title="Edit user">
                                                    <i class="fa-solid fa-pen-to-square btn btn-success me-3"></i>
                                                </a>
                                                <form action="{{ route('roles.destroy', $role->id) }}"
                                                    method="post">
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

    </div>
@endsection
