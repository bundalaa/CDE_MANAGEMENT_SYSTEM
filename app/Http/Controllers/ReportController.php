<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Report;
use Illuminate\Http\Request;
use App\Team;
use Illuminate\Support\Facades\Request as REQ;
use Illuminate\Support\Facades\Validator;


class ReportController extends Controller
{
    public function viewReport()
    {
        return view('supervisor.reports',);
    }

    public function getReports()
    {
        $report = Report::all();

        if (REQ::is('api/*'))
            return response()->json(['Report' => $report], 201);
        //for web route
        return view('welcome',);
    }

    public function getReport($reportId)
    {
        $report = Report::find($reportId);

        if (!$report) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Report not found']);
        }

        if (REQ::is('api/*'))
            return response()->json(['Report' => $report]);

        ///web route
        return view();
    }

    public function postReport(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'supervisor_id' => 'required',
            'team_id' => 'required',
            'status' => 'required',
            'content' => 'required',
        ]);

        $team = Team::find($request->team_id);
        if (!$team)
            return response()->json(['error' => 'team not found'], 404);
        $report = new Report();

        $report->content = $request->input('content');
        $report->supervisor_id = $request->input('supervisor_id');
        $report->team_id = $request->input('team_id');
        $report->status = $request->input('status');


        $team->report()->save($report);

        if (REQ::is('api/*'))
            return response()->json(['Report' => $report]);

        //for web route
        return view();
    }

    public function putReport(Request $request, $reportId)
    {

        $validator = Validator::make($request->all(), [
            'status' => 'required',

        ]);

        if ($validator->fails()) {
            if (REQ::is('api/*'))
                return response()->json(['errors' => $validator->errors(),], 400);
        }

        $report = Report::find($reportId);

        if (!$report) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Report not found']);
        }


        $report->update([
            'status' => $request->input('status'),
        ]);

        if (REQ::is('api/*'))
            return response()->json(['Report' => $report]);

        //for web route
        return view();
    }
    public function deleteReport($reportId)
    {
        $report = Report::find($reportId);

        if (!$report) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Report not found']);
        }

        $report->delete();
        if (REQ::is('api/*'))
            return response()->json(['message' => 'Report deleted successfully']);

        ///web route
        return view();
    }
    public function postCommentReport(Request $request, $reportId)
    {
        $validator = Validator::make($request->all(), [
            'description' => 'required',
        ]);
        if ($validator->fails()) {
            if (REQ::is('api/*'))
                return response()->json(['errors' => $validator->errors(),], 400);
        }
        $report = Report::find($reportId);

        if (!$report) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Report not found']);
        }
        $comment = new Comment();
        $comment->description = $request->description;
        $report->comments()->save($comment);
        if (REQ::is('api/*'))
            return response()->json(['Comment' => $comment]);
    }
}
