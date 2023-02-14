<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Group;
use Illuminate\Http\Request;

class AdminCoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::with('groups')->get();
        return view('admin.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.courses.create');
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
            'title' => 'required|min:3|max:255',
            'price' => 'required|max:255',
            'description' => 'required',
            'Certificate' => 'required',
        ]);

        $course = $request->all();

        $file = $request->file('image');
        $image_name = uniqid() . $file->getClientOriginalName();
        $course['image'] = $image_name;
        $file->move(public_path('uploads/courses'), $image_name);

        Course::create($course);

        return redirect()->route('courses.index');
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
    public function edit(Course $course)
    {
        return view('admin.courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {

        $request->validate([
            'title' => 'required|min:3|max:255',
            'price' => 'required|max:255',
        ]);

        if (!$request->file('image')) {

            $course->update($request->all());

            return redirect()->route('courses.index');

        } else {
            $new_course = $request->all();
            unlink(public_path("uploads/courses/$course->image"));
            $file = $request->file('image');
            $image_name = uniqid() . $file->getClientOriginalName();
            $file->move(public_path('uploads/courses/'), $image_name);
            $new_course['image'] = $image_name;

            $course->update($new_course);

            return redirect()->route('courses.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        unlink(public_path("uploads/courses/$course->image"));
        $course->delete();
        return redirect()->back();
    }
}
