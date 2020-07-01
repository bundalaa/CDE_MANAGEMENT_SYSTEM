<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChallengeSegment extends Model
{
    protected $fillable = [
        'team_id', 'identifiedChallenge_id','name', 'description',
    ];

    protected $dates = [
        'deleted_at'
    ];

    //relations

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function Identifiedchallenge()
    {
        return $this->belongsTo(IdentifiedChallenge::class);
    }

}
