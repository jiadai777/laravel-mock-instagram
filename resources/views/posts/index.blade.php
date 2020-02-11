@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" alt="" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img src="{{ $post->user->profile->profileImage() }}" class="w-100 rounded-circle" style="max-width: 50px;">
                    </div>
                    <div>
                        <a href="/profile/{{$post->user->id}}" class="font-weight-bold">{{$post->user->username}}</a>
                        <span class="px-1">&#8226;</span>
                        <a href="#">Follow</a>
                    </div>
                </div>

                <hr>

                <p>
                    <span class="font-weight-bold">
                        <a href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                    </span> {{ $post->caption }}
                </p>

                
            </div>
        </div>
    </div>
    
</div>
@endsection
