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
   public function comments()
    {
    return $this->hasMany(Suggestion::class);
    }
    public function uploadedChallengeFiles()
    {
        return $this->hasMany(File::class);
    }
    public function Identifiedchallenges()
    {
        return $this->hasMany(IdentifiedChallenge::class);
    }
    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}
