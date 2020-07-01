<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Visitor extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'name', 'company_name', 'email',
    ];

    protected $dates = [
        'deleted_at'
    ];
}
