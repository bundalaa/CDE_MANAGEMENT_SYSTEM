<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use SoftDeletes;

    protected $fillable = [
         'identified_challenge_id','supervisor_id'
    ];

    protected $dates = [
        'deleted_at'
    ];

    ///relations

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function report()
    {
        return $this->hasMany(Report::class);
    }

    public function identifiedChallenge()
    {
        return $this->belongsTo(IdentifiedChallenge::class);
    }

    public function supervisor()
    {
        return $this->belongsTo(Supervisor::class);
    }


}
