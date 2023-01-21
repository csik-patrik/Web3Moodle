<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CourseMemberStoreRequest;
use App\Models\Course;
use App\Models\CourseMember;
use App\Models\User;

class CourseMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courseMembers = CourseMember::orderBy('id', 'asc')->paginate(10);

        return view('Admin.CourseMembers.index', compact('courseMembers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = User::where('role_id', 1)->orderBy('name')->get();

        $courses = Course::orderBy('name')->get();

        return View('Admin.CourseMembers.create', compact('students', 'courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Requests\CourseMemberStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseMemberStoreRequest $request)
    {
        CourseMember::create($request->all());

        return redirect()->route('admin.course-members.index')
                        ->with('success', __('Kurzus hozzárendelés sikeres!'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  CourseMember  $courseMember
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseMember $courseMember)
    {
        $courseMember->delete();

        return redirect()->route('admin.course-members.index')
                        ->with('success', __('A kurzus hozzárendelés sikeresen törölve!'));
    }
}
