<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\Department;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        $teachers = Teacher::all();
        return view('add-teacher',compact('teachers','departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Teacher $teacher)
    {

        $validate = request()->validate([
            "department_id" => ['required','min:1'],
            "first_name" => ['required','min:3'],
            "last_name" => ['required','min:3'],
            "email" => ['required'],
            "cell" => ['required'],
            "qualification" => ['required'],
            "address" => ['required']
        ]);

        $teacher->create($validate);
        return back()->with('success','Teacher Added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departments = Department::all();
        $teacher = Teacher::find($id);
        return view('update-teacher',compact('teacher','departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $validate = request()->validate([
            "department_id" => ['required','min:1'],
            "first_name" => ['required','min:3'],
            "last_name" => ['required','min:3'],
            "email" => ['required'],
            "cell" => ['required'],
            "qualification" => ['required'],
            "address" => ['required']
        ]);

        $teacher->update($validate);
        return back()->with('success','Teacher Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return back()->with('success','Teacher Deleted successfully!');
    }
}
