<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

use App\Logfile;
use App\Subject;

class LogFilesController extends Controller
{
    public function subjects(){

    }
    public function index()
    {
        $logFiles = Logfile::all();
        return view('show-log-file',compact('logFiles'));
    }

    public function create()
    {
        $subjects = Subject::all();
        $logFiles = Logfile::all();
        return view('add-log-file',compact('subjects','logFiles'));
    }

    public function store(Request $request)
    {

        if($request->hasFile('name')){

            $fileExtention = $request->name->getClientOriginalExtension();

            if($fileExtention != 'docx')
            return back()->with('warning','Plese add file of extention .docx');

            $value = DB::table('logfiles')->where('subject_id',$request->subject_id)->exists();
            if($value == true){
                return back()->with('error','Log File Already existed of this subject');
            }

            $subject = Subject::find($request->subject_id );
            $fileName =$subject->name;
            $fileName = $fileName.".".$fileExtention;
            $request->name->storeAs('public/files/logfiles/',$fileName);


            $logfile = new Logfile;

            $logfile->name =  $fileName;
            $logfile->path = 'storage/files/logfiles/'.$fileName;
            $logfile->subject_id = $request->subject_id;

            $logfile->save();
            return back()->with('success','File Uploaded successfully!');
        }

    }

    public function show(Logfile $logfile)
    {

    }

    public function destroy(Logfile $logfile)
    {
        File::delete($logfile->path);
        $logfile->delete();
        return back()->with('success','File Deleted successfully!');
    }
}
