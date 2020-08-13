<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Challengecomment extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'body','file_id','coordinator_id'
    ];

    protected $dates = [
        'deleted_at'
    ];
     //Relationships

     public function file()
     {
         return $this->belongsTo(File::class);
     }
}
