<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IdentifiedChallenge extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'challenge_id','name','description','status','comment_id'
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
    public function comments()
    {
        return $this->belongsTo(Comment::class);
    }
    public function tasks(){
      return  $this->hasMany(Task::class, 'identified_challenge_id');
    }

}
