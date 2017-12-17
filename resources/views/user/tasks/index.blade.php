@extends('layouts.master')

@section('title', 'Proposals')

@section('content')
    <div class="nk-gap-4"></div>
    <div class="container"><!-- START: Forums List -->
        <ul class="nk-forum">
            @foreach($tasks as $task)
            <task
                icon="{{ $task->icon }}"
                url="{{ $task->path }}"
                title="{{ $task->title }}"
                author-name="{{ $task->user->display() }}"
                author-image="{{ $task->user->image() }}"
                completed="{{ $task->completed }}"
                votes="{{ $task->votes }}"
                date="{{ $task->date }}">{{ $task->excerpt }}</task>
            @endforeach
        </ul><!-- END: Forums List -->
        {!! $tasks->links() !!}
    </div>
    <div class="nk-gap-4"></div>
    <div class="nk-gap-4"></div>
@endsection