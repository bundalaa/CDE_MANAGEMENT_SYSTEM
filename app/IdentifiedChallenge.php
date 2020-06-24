<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IdentifiedChallenge extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'description'
    ];

    protected $dates = [
        'deleted_at'
    ];


    public function suggestions()
    {
        return $this->hasMany(Suggestion::class);
    }
    public function Team()
    {
        return $this->belongsTo(Team::class);
    }
}
