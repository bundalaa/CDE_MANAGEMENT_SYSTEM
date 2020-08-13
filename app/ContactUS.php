<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class ContactUS extends Model

{


	public $table = 'contactus';


	public $fillable = ['name','email','message','status'];

    public function messagecomments()
    {
        return $this->hasMany(Messagecomment::class);
    }
}
