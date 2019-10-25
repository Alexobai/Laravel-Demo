<?php

namespace App;

use App\Mail\NewUserWelcomeMail;
use Illuminate\Notifications\Notifiable;
use Jenssegers\Mongodb\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Mail;

class User extends Authenticatable
{
    use Notifiable;
    protected $connection = 'mongodb'; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'username', 'password',
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


    protected static function boot()
    {
        parent::boot();

        static::created(function ($user) {
            Profile::create([
                'user_id' => $user->_id
            ]);

        });
    }
 
    public function posts()
    {
        return $this->hasMany(Post::class)->orderBy('created_at', 'DESC');
    }
    public function following()
    {
        return $this->belongsToMany(User::class, null, 'followers','following');
    }
    public function followers()
    {
        return $this->belongsToMany(User::class, null, 'following','followers');
    }
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
}
