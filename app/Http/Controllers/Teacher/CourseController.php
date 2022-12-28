<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\CourseStoreRequest;
use App\Http\Requests\Teacher\CourseUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\User;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::orderBy('id', 'asc')->paginate(10);

        return view('Teacher.Courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $owners = User::where('role_id', 2)->get();

        $categories = CourseCategory::orderBy('name')->get();

        return View('Teacher.Courses.create', compact('owners', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Requests\Teacher\CourseStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseStoreRequest $request)
    {
        Course::create($request->all());

        return redirect()->route('courses.index')
                        ->with('success', __('Kurzus létrehozása sikeres!'));
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
        $owners = User::where('role_id', 2)->get();

        $categories = CourseCategory::orderBy('name')->get();

        return View('Teacher.Courses.edit', compact('owners', 'course', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     * @param  \App\Http\Requests\Teacher\CourseUpdateRequest $request
     * @param  \App\Models\Course $course
     * @return \Illuminate\Http\Response
     */
    public function update(CourseUpdateRequest $request, Course $course)
    {
        $course -> update($request->all());

        return redirect()->route('admin.courses.index')
                        ->with('success', __('Kurzus módosítása sikeres!'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Course::where('id', $id)->delete();

        return redirect()->route('admin.courses.index')
                        ->with('success', __('Kurzus törlése sikeres!'));
    }
}
