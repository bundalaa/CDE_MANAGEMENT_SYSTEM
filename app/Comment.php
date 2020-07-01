<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'commentable_id','commentable_type','description',
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function commentable()
    {
        return $this->morphTo();
    }
}
