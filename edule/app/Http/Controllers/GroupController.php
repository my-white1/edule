<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Group;
use App\Models\Room;
use App\Models\Week;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::with('weeks')->get();

        return view('admin.groups.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::pluck('title', 'id');
        $weeks = Week::pluck('title', 'id');
        $rooms = Room::pluck('title', 'id');
        return view('admin.groups.create', compact('courses', 'weeks', 'rooms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //   dd($request->all());
          $request->validate([
            'title' => 'required|max:255',
            'start' => 'required',
            'end' => 'required',
            'course_id' => 'required',
            'room_id' => 'required',
            'weeks' => 'required',
        ]);

        $group = Group::create($request->all());
        $group->weeks()->sync($request->weeks);
        return redirect()->route('groups.index');

        
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
    public function edit(Group $group)
    {
        $courses = Course::pluck('title', 'id');
        $weeks = Week::pluck('title', 'id');
        $rooms = Room::pluck('title', 'id');
        return view('admin.groups.edit', compact('group','courses', 'weeks', 'rooms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        $request->validate([
            'title' => 'required|max:255',
            'start' => 'required',
            'end' => 'required',
            'course_id' => 'required',
            'room_id' => 'required',
            'weeks' => 'required',
        ]);

        $group->weeks()->sync($request->weeks);
        $group->update($request->all());

        return redirect()->route('groups.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        $group->weeks()->sync([]);

        $group->delete();

        return redirect()->back();
    }
}
