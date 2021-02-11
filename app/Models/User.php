<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Console\DbCommand;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     
    public $timestamps = false;

    public function roles() 
    {
        return $this->hasOne(User::class, 'id');
    }

    public function isAdmin() 
    {
       return $this->roles()->where('role_id', 1)->first();
    }
    
    protected $fillable = [
        'email',
        'password',
        'department_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        // 'email_verified_at' => 'datetime',
    ];

    
}
