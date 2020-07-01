<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Suggestion extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'company_id', 'challengeOwner_id','description',
    ];

    protected $dates = [
        'deleted_at'
    ];

    //relationships
    public function challengeOwner()
    {
        return $this->belongsTo(ChallengeOwner::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
