<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Messagecomment extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'body','contactus_id','coordinator_id'
    ];

    protected $dates = [
        'deleted_at'
    ];
     //Relationships

     public function contactUs()
     {
         return $this->belongsTo(ContactUS::class);
     }
}
