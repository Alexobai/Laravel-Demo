<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Profile extends Model
{   
    protected $guarded = [];
    public function profileImage()
    {
        $imagePath = ($this->image)? $this->image : 'profile/FCeWrmwCvv5zZtn4DC8jQytgIsszaG7vtaIYS3YM.png';
        return '/storage/'.$imagePath;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
