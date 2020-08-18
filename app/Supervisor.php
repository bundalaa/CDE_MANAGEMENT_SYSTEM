<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Supervisor extends Model
{
    use Notifiable;
    use SoftDeletes;

    protected $fillable = [
        'user_id','bio'
    ];

    protected $dates = [
        'deleted_at'
    ];

    //relationships
    public function teams()
    {
        return $this->hasMany(Team::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function Reports()
    {
        return $this->hasMany(Report::class);
    }
}
