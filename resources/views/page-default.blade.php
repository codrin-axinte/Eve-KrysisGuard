@extends('layouts.master')

@section('title', $page->title)

@section('content')
    <h1>{{ $page->title }}</h1>

    <div class="panel panel-default">
        <div class="panel-body">
            {!! $page->body !!}
        </div>
    </div>

@endsection