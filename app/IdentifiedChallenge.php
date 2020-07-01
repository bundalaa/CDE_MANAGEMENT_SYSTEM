<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IdentifiedChallenge extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'team_id','challengeOwner_id','name','description',
    ];

    protected $dates = [
        'deleted_at'
    ];

    //relationships
    public function suggestions()
    {
        return $this->hasMany(Suggestion::class);
    }
    public function Team()
    {
        return $this->belongsTo(Team::class);
    }
    public function ChallengeOwner()
    {
        return $this->belongsTo(ChallengeOwner::class);
    }
    public function challengeSegments()
    {
        return $this->hasMany(ChallengeSegment::class);
    }
    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
}
