<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(User $user)
    {
        if(auth()->user()->following->contains($user->_id) == false && $user->followers->contains(auth()->user()->_id) == false){
            auth()->user()->following()->attach($user->_id);
            return $user->followers()->attach(auth()->user()->_id);
        }
        else if(auth()->user()->following->contains($user->_id) == true && $user->followers->contains(auth()->user()->_id) == true){
            auth()->user()->following()->detach($user->_id);
            return $user->followers()->detach(auth()->user()->_id);
        }
        
    }
}
