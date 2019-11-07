@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container"> 
        <div class="row">
            <div class="col-3 pt-5">
                <img src="../images/logo2.png">
            </div>
            <div class="col-9 pt-5">
                {{-- @foreach ($user as $user) --}}
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{ $user->username }}</h1>
                    <a href="/p/create">Add New Post</a>
                </div>

                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>

                <div class="d-flex">
                <div class="pr-3"><strong>{{ $user->posts->count() }}</strong>Posts</div>
                    <div class="pr-3"><strong>4k</strong>Followers</div>
                    <div class="pr-3"><strong>96</strong>Following</div>
                </div>
                <div class="pt-4 font-weith-bold"><strong>{{ $user->profile->title }}</strong></div>
                <div>{{ $user->profile->description }}</div>
                <div><a href="">{{ $user->profile->url }}</a></div>
                {{-- @endforeach --}}
            </div>
        </div>
        <div class="row pt-5">
            @foreach ($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/p/{{$post->id}}">
                        <img src="/storage/{{ $post->image }}" class="w-100">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
