<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Report;
use App\Reportcomment;
use App\Supervisor;
use Illuminate\Http\Request;
use App\Team;
use DB;
use App\User;
use Illuminate\Support\Facades\Request as REQ;
use Illuminate\Support\Facades\Validator;


class ReportController extends Controller
{
    public function viewReport()
    {
        $reports=Report::all();

        return view('supervisor.allreports',[
            'reports'=>$reports]);

    }


    public function get1Report($id)
    {
        $report=Report::find($id);
if(!$report){
    return back()->with('success','report not found');
}
        return view('supervisor.reports',[
            'report'=>$report]);

    }


    public function downloadReport($file)
        {
          return response()->download('public/storage/files/'.$file);
        }


    public function postReport(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'team_id' => 'required',
            'subtitle'=>'required',
            'description' => 'required',
            'file' => 'required|mimes:doc,docx,pdf,txt|max:20400',
        ]);
        if($validator->fails())
        {
         return Redirect()->back()->withInput()->withErrors($validator);

        }

        $team = Team::find($request->team_id);
if(!$team){
    return back()->with('success','team not found');
}
// dd($team);
$supervisor = Supervisor::find($team->supervisor_id);
if(!$supervisor){
    return back()->with('success','supervisor not found');
}
        $data=new Report;
        if ($request->file('file')) {
            $file=$request->file('file');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $request->file->move('public/storage/reports',$filename);

            $data->file=$filename;
        }
        $data->supervisor_id=$supervisor->id;
        $data->team_id=$request->team_id;
        $data->title=$team->identifiedChallenge->name;
        $data->subtitle=$request->subtitle;
        $data->description=$request->description;
        $data->save();

        $details=[ 'title'=>'New ' .$team->identifiedChallenge->name . ' report' ];

         $supervisor->user->notify(new \App\Notifications\cde($details));

        return  redirect()->back()->withSuccess('Great! file has been successfully uploaded.');

    }
 public function postCommentReport(Request $request, $reportId)
    {
        $validator = Validator::make($request->all(), [
            'body' => 'required',
        ]);
        if ($validator->fails()) {
            return Redirect()->back()->withInput()->withErrors($validator);
        }
        $user = User::find($request->user_id);
        if (!$user->supervisor) {
                return back()->with(['success' => 'You are not supervisor']);
        }
        // dd($supervisor);
        $report = Report::find($reportId);
        if (!$report) {
                return back()->with(['success' => 'Report not found']);
        }
        $comment = new Reportcomment();
        $comment->body = $request->body;
        $comment->supervisor_id = $user->supervisor->id;
        $report->reportcomments()->save($comment);
        return redirect('view-report')
        ->with('success', 'comment added successfully');
    }

    public function markReadNotification(){
        auth()->user()->unreadNotifications->markAsRead();
        return redirect('view-report');
    }

    // student module
    public function stunUpload()
    {
        $reports=DB::table('reports')->get();
        $teams = Team::all();
     return view('student.studentReport',['teams'=>$teams],compact('reports'));
    }


}
