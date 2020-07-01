<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'name','emailAddress','description',
    ];

    protected $dates = [
        'deleted_at'
    ];

//relationships
    public function suggestions()
    {
        return $this->hasMany(Suggestion::class);
    }
    public function challenges()
    {
        return $this->hasMany(Challenge::class);
    }
}
