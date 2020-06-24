<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supervisor extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'title', 'bio'
    ];

    protected $dates = [
        'deleted_at'
    ];

    //relations

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function team()
    {
        return $this->hasOne(Team::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function report()
    {
        return $this->hasMany(Report::class);
    }
}
