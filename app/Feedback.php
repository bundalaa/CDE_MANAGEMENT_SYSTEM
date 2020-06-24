<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feedback extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'description', 'coordinator_id', 'challenge_id'
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function coordinator()
    {
        return $this->belongsTo(Coordinator::class);
    }

    public function challenge()
    {
        return $this->belongsTo(Challenge::class);
    }
}
