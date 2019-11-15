@extends('layouts.app')

@section('content')

    <div class="container">
            <div class="col-9 py-2 d-flex justify-content-between align-items-baseline">
                <div class="d-flex justify-content-between align-items-baseline">
                    <button class="btn btn-dark text-light"><a href="/profile/{{Auth::user()->id}}">Profile</a></button>
                </div>
            </div>
        @foreach($posts as $post)
            <div class="div row">
                <div class="row col-6 offset-3">
                <a href="/profile/{{ $post->user->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
                </div>
            </div>
            <div class="row pt-2 pb-5">
                <div class="row col-6 offset-3">
                    <div>
                        <p>
                            <span class="font-weight-bold">
                                <a href="/profile/{{ $post->user->id }}">
                                    <span class="text-dark">{{ $post->user->username }}</span>
                                </a>
                            </span>: {{ $post->caption }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>

        <div class="container">
            <h3><strong>People You May Know:</strong></h3><br>
            <div class="col-md-6">
                @foreach($users as $user)
                    <ul>
                    <li><a href="/profile/{{$user->id}}">{{$user->name}}</a></li>
                    {{-- <img src="/storage/{{ $post->image }}" class="w-100"> --}}
                    </ul>
                @endforeach
            </div>
        </div>

    </div>
@endsection
