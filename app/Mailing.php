<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mailing extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'email','subject','body'
    ];

    protected $dates = [
        'deleted_at'
    ];
}
