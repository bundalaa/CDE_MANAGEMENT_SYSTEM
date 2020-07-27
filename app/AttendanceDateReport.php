<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AttendanceDateReport extends Model
{
    protected $fillable = [
        'attendance_date',
    ];

    public function attendance(){
        return $this->hasMany(Attendance::class);
    }
}
