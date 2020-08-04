<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Status extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name','task_id'
    ];

    protected $dates = [
        'deleted_at'
    ];

    //relationships
    public function task(){
        return $this->hasOne(Task::class);
    }
}
