<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{   
    protected $guarded = [];
    public function profileImage()
    {
        return ($this->image)? $this->image : 'Laravel-Demo\storage\app\public\profile\vRYPW8CYdIM8UtXsggZV03gQW3a9IIKn68uS33jG.png';
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
}
