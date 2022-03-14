@extends('layouts.app')
@section('content')
    @auth
        @if (!isset($error))
   
            <h2 class="my-4">{{ $rss->channel->title }} </h2>
            @foreach ($rss->channel->item as $item)
                <div class="row p-2 my-3">
                    <div class="col shadow">
                        <p class="title"><a href="{{ $item->link }}">{{ $item->title }}</a></p>
                        <p class='desc'>{!! $item->description !!}<br>
                            <small>{{ $item->pubDate }}</small>
                        </p>
                    </div>
                </div>
            @endforeach
        @else
            Váratlan hiba történt
        @endif
    @else
        <div class="row h-100">
            <div class="col-12 text-center my-4">
                <h2 class="my-4 text-center">Az RSS csatorna olvasásához lépj be!</h2>
            </div>
            <div class="col-12 text-center my-4">
                <a href="{{ route('login') }}"><i class="fa fa-user fa-5x"></i> <i class="fa fa-sign-in fa-5x"></i></a>
            </div>
        </div>
    @endauth
@endsection