<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Challenge extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'description',
    ];

    protected $dates = [
        'deleted_at'
    ];

//relationships

public function Identifiedchallenge()
{
    return $this->hasMany(IdentifiedChallenge::class);
}
}
