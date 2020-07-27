<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{

    protected $fillable = [
        'student_id','status','attendance_date_report_id'
    ];
    protected $casts = [
        'status' => 'boolean',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function report()
    {
        return $this->belongsTo(AttendanceDateReport::class);
    }
   

}
