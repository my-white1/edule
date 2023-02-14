<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workers = Worker::with('user')->get();
        return view('admin.workers.index', compact('workers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('title', 'id');
        return view('admin.workers.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'age' => 'required|numeric',
            'number' => 'required|numeric',
        ]);

        $user_data = [
            'name'  => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'image' => $request->file('image'),
        ];


        $file = $request->file('image');
        $image_name = uniqid() . $file->getClientOriginalName();
        $user_data['image'] = $image_name;
        $file->move(public_path('uploads/users'), $image_name);

        $user_data = User::create($user_data);

        $user_data->roles()->sync($request->roles);
        $worker_data = $request->all();
        $worker_data['user_id'] = $user_data->id;

        Worker::create($worker_data);

        return redirect()->route('workers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function show(Worker $worker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function edit(Worker $worker)
    {
        $roles = Role::pluck('title', 'id');
        return view('admin.workers.edit', compact('worker', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Worker $worker)
    {
        $request->validate([
            'name' => 'min:3|max:255',
            'email' => 'email',
            'age' => 'numeric',
            'number' => 'numeric',
        ]);

        if (!$request->file('image')) {
            $user_data = [
                'email' => $request->email,
                'name' => $request->name,
            ];

            $worker->user->update($user_data);

            $worker->user->roles()->sync($request->roles);


            $worker_data = $request->all();
            $worker->update($worker_data);

            return redirect()->route('workers.index');
        } else {
            $user_data = [
                'email' => $request->email,
                'name' => $request->name,
                'image' => $request->file('image'),
                'age' => $request->age,
                'number' => $request->number,
                'price_per_month' => $request->price_per_month,
            ];

            $old_image = $worker->user->image;
            unlink(public_path("uploads/users/$old_image"));
            $file = $request->file('image');
            $image_name = uniqid() . $file->getClientOriginalName();
            $file->move(public_path('uploads/users/'), $image_name);
            $user_data['image'] = $image_name;

            $worker->user->roles()->sync($request->roles);

            $worker->user->update($user_data);

            return redirect()->route('workers.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Worker  $worker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Worker $worker)
    {
        $worker->user->roles()->sync([]);

        $worker->user->delete();

        $worker->delete();

        return redirect()->back();
    }
}
