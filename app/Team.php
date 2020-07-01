<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'team_id', 'supervisor_id', 'schedule_id'
    ];

    protected $dates = [
        'deleted_at'
    ];

    ///relations

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function challengeSegments()
    {
        return $this->hasMany(ChallengeSegment::class);
    }

    public function report()
    {
        return $this->hasMany(Report::class);
    }

    public function IdentifiedChallenge()
    {
        return $this->hasOne(IdentifiedChallenge::class);
    }

    public function supervisor()
    {
        return $this->belongsTo(Supervisor::class);
    }
    public function challengeOwner()
    {
        return $this->belongsTo(ChallengeOwner::class);
    }

}
