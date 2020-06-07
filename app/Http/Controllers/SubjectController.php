<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Subject;
use App\Department;
use App\Semester;
Use App\Section;
use App\Logfile;

class SubjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('subject',['only' => ['store']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('add-files');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments =  Department::all();
        $subjects = Subject::all();
        $semesters = "";
        return view('add-subject',compact('subjects','departments','semesters'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Subject $subject)
    {
        $validate = request()->validate([
            'subject_name' => ['required', 'min:3'],
            'department_id' => ['required'],
            'semester_id' => ['required'],
            'section_id' => ['required']
        ]);

        $subject->create($validate);
        return back()->with('success','Subject Added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departments = Department::all();
        $semesters = Semester::all();
        $sections = Section::all();
        $subject = Subject::find($id);

        return view('update-subject',compact('departments','semesters','sections','subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Subject $subject)
    {

        $validate = request()->validate([
            'subject_name' => ['required', 'min:3'],
            'department_id' => ['required'],
            'semester_id' => ['required'],
            'section_id' => ['required']

        ]);

        $subject->update($validate);
        return back()->with('success','Subject Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        if($subject->logFile){
            $subject->logFile->delete();
        }
        elseif($subject->descriptionFile){
            $subject->descriptionFile->delete();
        }
       elseif($subject->contentFile){
        $subject->contentFile->delete();
       }
        $subject->delete();
        return back()->with('success','Subject Deleted successfully!');
    }
}
