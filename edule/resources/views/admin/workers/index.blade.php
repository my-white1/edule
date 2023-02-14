@extends('layouts.admin')

@section('title')
    Tables
@endsection

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <a href="{{ route('workers.create') }}" class="btn btn-success">Create</a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Image</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Name</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Email</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Number</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Roles</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Price Per Month</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Age</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($workers as $worker)
                                        <tr>
                                            <td>
                                                @php
                                                    $worker_img = $worker->user->image;
                                                @endphp
                                                <img style="width: 50px; height: 50px; border-radius: 50%;"
                                                    src='{{ asset("uploads/users/$worker_img") }}'
                                                    alt="worker image" />
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">

                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $worker->user->name }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="text-xs font-weight-bold">{{ $worker->user->email }}</span>
                                            </td>
                                            <td>
                                                <span class="text-xs font-weight-bold">{{ $worker->number }}</span>
                                            </td>
                                            <td>
                                                @foreach ($worker->user->roles as $key => $role)
                                                    <span class="text-xs font-weight-bold">{{ $role->title }}</span>
                                                @endforeach

                                            </td>
                                            <td>
                                                <span class="text-xs font-weight-bold">{{ $worker->price_per_month }}</span>
                                            </td>
                                            <td>
                                                <span class="text-xs font-weight-bold">{{ $worker->age }}</span>
                                            </td>
                                            @can('workers_actions')
                                                <td>
                                                    <a href="{{ route('workers.edit', $worker->id) }}"
                                                        class="btn btn-success text-white">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </a>
                                                    <form action="{{ route('workers.destroy', $worker->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger text-white"><i
                                                                class="fa-solid fa-trash"></i></button>
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
