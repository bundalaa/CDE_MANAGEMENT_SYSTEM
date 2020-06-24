<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'user_id', 'team_id', 'degree_programme', 'year_of_study'
    ];

    protected $dates = [
        'deleted_at'
    ];
    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
    public function student()
    {
        return $this->belongsTo(Team::class);
    }
}
