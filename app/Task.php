<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name','identified_challenge_id','status'
    ];

    protected $dates = [
        'deleted_at'
    ];

    //relationships
    public function IdentifiedChallenges(){
        return $this->hasMany(IdentifiedChallenge::class);
    }
    public function status(){
        $this->hasMany(Status::class);
    }
}
