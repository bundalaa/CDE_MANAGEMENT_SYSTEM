<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'name',
        'file_path'
    ];
}


// 'challengeOwner_id',

// ];

// ///relationships
// public function challengeOwner()
// {
//     return $this->belongsTo(File::class);
// }
// }
