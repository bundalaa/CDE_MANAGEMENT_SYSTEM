<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Report extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title','subtitle','description','file',
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
