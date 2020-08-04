<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name','identified_challenge_id','status_id'
    ];

    protected $dates = [
        'deleted_at'
    ];

    //relationships
    public function identifiedChallenge(){
        return $this->belongsTo(IdentifiedChallenge::class);
    }
    public function status(){
        return $this->belongsTo(Status::class);
    }
}
