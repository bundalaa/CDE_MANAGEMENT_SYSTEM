<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Challenge extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'description', 'company_id'
    ];

    protected $dates = [
        'deleted_at'
    ];


    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function segments()
    {
        return $this->hasMany(Segment::class);
    }

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }
}
