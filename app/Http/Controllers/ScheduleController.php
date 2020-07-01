<?php

namespace App\Http\Controllers;

use App\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request as REQ;
use Illuminate\Support\Facades\Validator;

class ScheduleController extends Controller
{
    public function viewSchedule()
    {
       return view('admin.schedule');
     }
    public function getSchedules()
    {

         $schedules = Schedule::get();
        //for web route
       return view('admin.schedule',['schedules'=> $schedules]);
     }

    public function postSchedule(Request $request)
    {
        //dd($request);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'taskdate' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }

        $schedule = new Schedule();

        $schedule->name = $request->input('name');
        $schedule->description = $request->input('description');
         $schedule->taskdate = $request->input('taskdate');

        $schedule->save();

        //for web route
        return view('admin/schedule');
    }

    public function putSchedule(Request $request, $scheduleId)
    {
        $schedule = Schedule::find($scheduleId);

        if (!$schedule) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Schedule not found']);
        }
        $validator = Validator::make($request->all(), [
            'description' => 'required',
            'timestamp' => 'required',

        ]);
        if ($validator->fails()) {
            if (REQ::is('api/*'))
                return response()->json(['errors' => $validator->errors(),], 400);
        }
        $schedule->update([
            'timestamp' => $request->input('timestamp'),
            'description' => $request->input('description'),

        ]);

        if (REQ::is('api/*'))
            return response()->json(['Schedule' => $schedule]);

        //for web route
        return view();
    }

    public function deleteSchedule($scheduleId)
    {
        $schedule = Schedule::find($scheduleId);

        if (!$schedule) {
            if (REQ::is('api/*'))
                return response()->json(['error' => 'Schedule not found']);
        }

        $schedule->delete();
        if (REQ::is('api/*'))
            return response()->json(['message' => 'Schedule deleted successfully']);

        ///web route
        return view();
    }

}
