<?php

namespace App\Http\Controllers;

use App\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function getSchedules()
    {
        $schedules = Schedule::get();
       return view('admin.schedule',['schedules'=>$schedules]);
     }

    public function postSchedule(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'taskdate'=>'required',
        ]);
        // dd($request);
        $schedule = new Schedule();
        $schedule->title = $request['title'];
        $schedule->taskdate = $request['taskdate'];
        $schedule->save();

        return redirect('view-schedule')
    ->with('message','schedule added successfully');


        }
        public function deleteSchedule($scheduleId){
            $schedule = Schedule::find($scheduleId);
            if (!$schedule) {
                   return back()->withErrors('Schedule not found');
           }
            $schedule->delete();
                return redirect('view-schedule')->with('Schedule deleted successfuly');
        }


}
