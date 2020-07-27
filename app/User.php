<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','team_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

// Only accept a valid password and
// hash a password before saving
public function setPasswordAttribute($password)
{
    if ( $password !== null & $password !== "" )
    {
        $this->attributes['password'] = bcrypt($password);
    }
}

    public function roles(){
    return $this->belongsToMany(Role::class);
}

    public function hasAnyRoles($roles){
    if($this->roles()->whereIn('name' , $roles)->first())
    return true;

      return false;
  }

  public function hasRole($role){
      if($this->roles()->where('name' , $role)->first())
      return true;

      return false;
  }

  public function coordinator()
  {
      return $this->hasOne(Coordinator::class,'user_id');
  }

  public function supervisor()
  {
      return $this->hasOne(Supervisor::class,'user_id');
  }

  public function student()
  {
      return $this->hasOne(Student::class,'user_id');
  }

}
