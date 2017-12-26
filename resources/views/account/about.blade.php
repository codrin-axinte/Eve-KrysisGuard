@extends('layouts.social')

@section('social-tabs')
    <ul>
        <li class=""><a href="#">News</a></li>
        <li class="active"><a href="">About</a></li>
        <li class=""><a href="#">Stats</a></li>
    </ul>
@endsection

@section('social-content')
    <h2>{{ $character->name }}</h2>
    <ul>
        <li>Gender: {{ ucfirst($character->gender) }}</li>
        <li>Birthday: {{ $character->birthday()->toFormattedDateString() }}</li>
    </ul>

    <p class="lead">
        @if($character->description)
            {{ $character->description }}
            @else
            No Description
        @endif
    </p>
@endsection

