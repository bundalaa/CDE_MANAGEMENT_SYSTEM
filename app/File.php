<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'file',
        'challengeOwner_id',
        'name'
    ];



// ///relationships
public function challengeOwner()
{
    return $this->belongsTo(ChallengeOwner::class);
}
public function coordinator()
    {
    return $this->belongsTo(Coordinator::class);
    }
    public function challengecomments()
    {
        return $this->hasMany(Challengecomment::class);
    }
}




