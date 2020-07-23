<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IdentifiedChallenge extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'challenge_id','name','description','status'
    ];

    protected $dates = [
        'deleted_at'
    ];

    //relationships
    public function Team()
    {
        return $this->hasOne(Team::class);
    }
    public function ChallengeOwner()
    {
        return $this->belongsTo(ChallengeOwner::class);
    }
    public function challenge()
    {
        return $this->belongsTo(Challenge::class);
    }
    // public function comments()
    // {
    //     return $this->morphMany('App\Comment', 'commentable');
    // }
    public function task(){
        $this->belongsTo(Task::class);
    }

}
