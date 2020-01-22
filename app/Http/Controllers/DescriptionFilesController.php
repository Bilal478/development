<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Subject;
use App\Descriptionfile;

class DescriptionFilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $descriptionfiles = Descriptionfile::all();
        return view('show-description-file',compact('descriptionfiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = Subject::all();
        $descriptionfiles = Descriptionfile::all();
        return view('add-description-file',compact('subjects','descriptionfiles'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('name')){

            $fileExtention = $request->name->getClientOriginalExtension();

            if($fileExtention != 'docx')
            return back()->with('warning','Plese add file of extention .docx');

            $value = DB::table('descriptionfiles')->where('subject_id',$request->subject_id)->exists();
            if($value == true){
                return back()->with('error','Description File Already existed of this subject');
            }

            $subject = Subject::find($request->subject_id );
            $fileName =$subject->name;

            $fileName = $fileName.".".$fileExtention;
            $request->name->storeAs('public/files/descriptionfiles/',$fileName);

            $descriptionfile = new Descriptionfile;

            $descriptionfile->name =  $fileName;
            $descriptionfile->path = 'storage/files/descriptionfiles/'.$fileName;
            $descriptionfile->subject_id = $request->subject_id;

            $descriptionfile->save();

            return back()->with('success','File Uploaded successfully!');

        }

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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Descriptionfile $descriptionfile)
    {
        File::delete($descriptionfile->path);
        $descriptionfile->delete();
        return back()->with('success','File Deleted successfully!');
    }
}
