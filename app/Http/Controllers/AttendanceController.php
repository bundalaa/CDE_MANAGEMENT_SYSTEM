<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\Student;
use App\Supervisor;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Request as REQ;

class AttendanceController extends Controller
{
    public function viewAttendancePage()
    {
        return view('admin.attendance');
    }
    public function getAttendances()
    {
        $attendances = Attendance::get();
        return view('admin.attendance',['attendances'=>$attendances]);

    }

    public function postAttendance(Request $request)
    {
  $request->validate([
            'name' => 'required',
            'status' => 'required',
            'date' => 'required'
        ]);
        $attendance = new Attendance();
        $attendance->name = $request['name'];
        $attendance->status = $request['status'];
        $attendance->date = $request['date'];

        $attendance->save();
        return redirect('addAttendance')
        ->with('message','Attendance created successfully');
    }

    public function putAttendance(Request $request, $attendanceId)
    {

    }

}
