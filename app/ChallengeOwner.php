<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChallengeOwner extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name','emailAddress','description',
    ];

    protected $dates = [
        'deleted_at'
    ];

//relationships
   public function suggestions()
    {
    return $this->hasMany(Suggestion::class);
    }
    public function challengeSegment()
    {
        return $this->hasMany(ChallengeSegment::class);
    }
    public function Identifiedchallenges()
    {
        return $this->hasOne(IdentifiedChallenge::class);
    }
    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}
