@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIILCkuVo8bJX63VAGibSxzsIvvhrJLcmaHwEtYT2VGqfkVyJR" class = "rounded-circle">
        
        </div>
        <div class="col-9 pt-5 pl-5">
            <div><h1>{{$user->username}}</h1></div>
            <div class = "d-flex">
                <div class = "pr-5"><strong>153k</strong> posts</div>
                <div class = "pr-5"><strong>1k</strong> followers</div>
                <div class = "pr-5"><strong>10</strong> following</div>
            </div>
            <div class = "pt-4 font-weight-bold">Helloworld.org</div>
            <div>Hi, This is another test</div>
            <div><a href="#">www.Helloworld.org</a></div>
        </div>
    </div>

    <div class = "row pt-5">
        <div class="col-4">
            <img src="https://cdn.gamer-network.net/2017/usgamer/monster-hunter-world.jpg/EG11/thumbnail/1920x1080/format/jpg/quality/75/monster-hunter-world-kind-of-short-at-40-to-50-hours.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://cdn.gamer-network.net/2017/usgamer/monster-hunter-world.jpg/EG11/thumbnail/1920x1080/format/jpg/quality/75/monster-hunter-world-kind-of-short-at-40-to-50-hours.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://cdn.gamer-network.net/2017/usgamer/monster-hunter-world.jpg/EG11/thumbnail/1920x1080/format/jpg/quality/75/monster-hunter-world-kind-of-short-at-40-to-50-hours.jpg" class="w-100">
        </div>
    </div>
</div>
@endsection
