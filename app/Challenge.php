<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Challenge extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'company_id','name', 'description',
    ];

    protected $dates = [
        'deleted_at'
    ];

//relationships

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }
}
