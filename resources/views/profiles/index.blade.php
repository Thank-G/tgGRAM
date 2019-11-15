@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 pt-5">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h-4">{{ $user->username }}</div class="h-4">

                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                </div>

            @can ('update', $user->profile)
                <button class="btn btn-dark text-light"><a href="/p/create">Add New Post</a></button>
            @endcan

            </div>

            @can ('update', $user->profile)
                <button class="btn btn-dark text-light"><a href="/profile/{{ $user->id }}/edit">Edit Profile</a></button>
            @endcan

            <div class="d-flex">
                <div class="pr-3"><strong>{{ $user->posts->count() }}</strong>Posts</div>
                <div class="pr-3"><strong>{{ $user->profile->followers->count() }}</strong>Followers</div>
                <div class="pr-3"><strong>{{ $user->following->count() }}</strong>Following</div>
            </div>
            <div class="pt-4 font-weith-bold"><strong>{{ $user->profile->title }}</strong></div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="">{{ $user->profile->url }}</a></div>
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
