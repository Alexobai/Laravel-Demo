<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Cache;

class ProfilesController extends Controller
{
    public function index(User $user)
    {   
        //dd(auth()->user()->followers->contains($user->_id));
        $follows = (auth()->user()) ? auth()->user()->following->contains($user->_id) :false;
        
        $postCount = $user->posts->count();
        
        $followersCount = $user->followers->count();
        
        $followingCount =  $user->following->count();
        
        $users = User::all();
        

        return view('profiles/index', compact('users','user','follows','postCount','followersCount','followingCount'));
    }
    public function edit(User $user)
    {
        $this->authorize('update',$user->profile);
        return view('profiles/edit',compact('user'));
    }
    public function update(User $user)
    {
        $this->authorize('update',$user->profile);  
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);
        if (request('image')) {
            $imagePath = request('image')->store('profile', 'public');

            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
            $image->save();

            $imageArray = ['image' => $imagePath];
        }

        auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? []
        ));
        return redirect("/profile/{$user->_id}");
    }

}
