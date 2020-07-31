<?php

namespace App\Http\Controllers;

use App\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as REQ;
use Illuminate\Support\Facades\Validator;

class ScheduleController extends Controller
{
    public function getSchedules()
    {
         $schedules = Schedule::get();
       return view('admin.schedule',['schedules'=> $schedules]);
     }

    public function postSchedule(Request $request)
    {
        Schedule::create($request->all());
        return redirect('view-schedule')
    ->with('message','schedule successfully updated');
    }

   /// student module
   public function stunschedule()
   {
       $schedules = Schedule::get();
     return view('student.StudenSchedule',['schedules'=>$schedules]);
   }
}
