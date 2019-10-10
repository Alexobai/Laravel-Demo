<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $user = User::findOrFail($user);

        return view('profiles/index',[
            'user' => $user,
        ]);
    }
    public function edit(User $user)
    {
        return view('profiles/edit',compact('user'));
    }
    public function update()
    {
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => '',
            'image' => '',
        ]);
        dd($data);
    }
}
