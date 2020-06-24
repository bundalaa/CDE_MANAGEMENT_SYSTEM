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
    public function getAttendances()
    {
        $attendances = Attendance::all();

        if (REQ::is('api/*'))
            return response()->json(['attendance' => $attendances], 201);
        //for web route
        return view('welcome',);
    }
    public function getAttendance($attendanceId)
    {
        $attendance = Attendance::find($attendanceId);

       if (!$attendance) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Attendance not found']);
       }

        if (REQ::is('api/*'))
          return response()->json(['Attendance' => $attendance]);

   //    web route
        return view();
    }
    public function postAttendance(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'student_id' => 'required',
            'supervisor_id' => 'required',
            'status' => 'required',
            'date' => 'required'
        ]);

        if ($validator->fails()) {
            if (REQ::is('api/*'))
                return response()->json(['errors' => $validator->errors(),], 400);
        }
        $student = Student::find($request->input('student_id'));

        if (!$student) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Student not found']);
        }
        if ($validator->fails()) {
            if (REQ::is('api/*'))
                return response()->json(['errors' => $validator->errors(),], 400);
        }
        $supervisor = Supervisor::find($request->input('supervisor_id'));

        if (!$supervisor) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Supervisor not found']);
        }
        $attendance = new Attendance();

        $attendance->date = $request->input('date');
        $attendance->status = $request->input('status');

        $student->attendances()->save($attendance);

        if (REQ::is('api/*'))
            return response()->json(['attendance' => $attendance]);

        //for web route
        return view();
    }

    public function putAttendance(Request $request, $attendanceId)
    {

        $validator = Validator::make($request->all(), [
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            if (REQ::is('api/*'))
                return response()->json(['errors' => $validator->errors(),], 400);
        }

        $attendance = Attendance::find($attendanceId);

        if (!$attendance) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Attendance not found']);
        }

        $attendance->update([
            'status' => $request->input('status')
        ]);

        if (REQ::is('api/*'))
            return response()->json(['attendance' => $attendance]);

        //for web route
        return view();
    }
    public function deleteAttendance($attendanceId)
    {
        $attendance = Attendance::find($attendanceId);

        if (!$attendance) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Attendance not found']);
        }

        $attendance->delete();
        if (REQ::is('api/*'))
            return response()->json(['message' => 'Attendance deleted successfully']);

        ///web route
        return view();
    }

}
