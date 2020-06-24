<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'name','description', 'taskdate',
    ];

    protected $dates = [
        'deleted_at'
    ];

    //relations

    public function supervisor()
    {
        return $this->belongsTo(Supervisor::class);
    }

    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}
