<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'segment_id', 'coordinator_id', 'supervisor_id', 'schedule_id'
    ];

    protected $dates = [
        'deleted_at'
    ];

    ///relations

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function segment()
    {
        return $this->belongsTo(Segment::class);
    }

    public function report()
    {
        return $this->hasMany(Report::class);
    }
    public function category()
    {
        return $this->hasOne(Category::class);
    }

    public function supervisor()
    {
        return $this->belongsTo(Supervisor::class);
    }

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }
}
