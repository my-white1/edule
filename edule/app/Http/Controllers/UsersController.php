<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('roles')->get();

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('title', 'id');

        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = $request->all();

        $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:6|max:255|confirmed',
        ]);

        $file = $request->file('image');
        $image_name = uniqid() . $file->getClientOriginalName();
        $user['image'] = $image_name;
        $file->move(public_path('uploads/users'), $image_name);

        $user = User::create($user);

        $user->roles()->sync($request->roles);

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

        $roles = Role::pluck('title', 'id');

        return view('admin.users.edit', compact('roles', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|max:255',
        ]);

        if (!$request->file('image')) {
            $user->update($request->all());

            $user->roles()->sync($request->roles);

            return redirect()->route('users.index');

        } else {
            $new_user = $request->all();
            unlink(public_path("uploads/users/$user->image"));
            $file = $request->file('image');
            $image_name = uniqid() . $file->getClientOriginalName();
            $file->move(public_path('uploads/users/'), $image_name);
            $new_user['image'] = $image_name;

            $user->roles()->sync($request->roles);
            
            $user->update($new_user);

            return redirect()->route('users.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        // unlink(public_path("uploads/users/$user->image"));

        $user->roles()->sync([]);
        $user->delete();

        return redirect()->back();
    }
}
