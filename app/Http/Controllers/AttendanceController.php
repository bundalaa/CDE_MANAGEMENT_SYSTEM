<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\AttendanceDateReport;
use App\Report;
use App\Student;
use App\Supervisor;
use PDF;
use App\User;
use Illuminate\Http\Request;


class AttendanceController extends Controller
{
    public function viewAttendancePage()
    {
        $students = Student::all();
        return view('supervisor.studentAttendance', ['students' => $students]);
    }

    public function postAttendance(Request $request)
    {
        $request->validate([
            'status' => 'required',
            'student_id' => 'required',
            'attendance_date_report_id'=>'required'
        ]);
    //  dd($request->all()['status'][0]);
    //dd($request['attendance_date_report_id']);
    $report =  AttendanceDateReport::create([
        'attendance_date'=>$request['attendance_date_report_id']
    ]);
      foreach($request->all()['student_id'] as $index=>$student_id){
                 Attendance::create([
                     'attendance_date_report_id'=>$report->id,
                     'student_id'=>$student_id,
                     'status'=>$request->all()['status'][$index]
                 ]);
      }
        return back()
            ->with('message', 'Attendance created successfully');
    }

    public function getAttendanceDateReport()
    {
        return view('admin.attendanceDateReport',);
    }

    public function getAttendanceReport()
    {
        $reports = AttendanceDateReport::all();

        $report = AttendanceDateReport::get()->last();

        if($report){
            $report = $report->load(['attendance', 'attendance.student','attendance.student.user']);
        }
        else
        $report = null;

        return view('admin.attendanceReport', ['report' => $report,'reports'=>$reports]);
    }

    public function getReport($id)
    {
        $reports = AttendanceDateReport::all();
        $report = AttendanceDateReport::find($id)->load(['attendance', 'attendance.student','attendance.student.user']);
        return view('admin.attendanceReport', ['report' => $report,'reports'=>$reports]);
    }
     // Generate PDF
     public function createPDF() {
        // retreive all records from db
        set_time_limit(0);
        $data = Attendance::all();
        // share data to view
        view()->share('report',$data);

        $pdf = PDF::loadView('admin/attendancepdf_view', $data);
        // dd($pdf);

        // download PDF file with download method
        return $pdf->download('attendance_pdf_file.pdf');
      }
}
