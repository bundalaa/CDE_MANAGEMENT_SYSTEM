<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coordinator extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id','bio'
    ];

    protected $dates = [
        'deleted_at'
    ];


    //relations

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }
    
    public function Reports()
    {
        return $this->hasMany(File::class);
    }

}
