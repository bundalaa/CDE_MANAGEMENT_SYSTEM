<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as REQ;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Report extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'content', 'team_id', 'supervisor_id', 'status'
    ];

    protected $dates = [
        'deleted_at'
    ];



    //Relationships

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
    public function supervisor()
    {
        return $this->belongsTo(Supervisor::class);
    }
    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
    
}
