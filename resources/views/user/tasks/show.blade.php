@extends('layouts.master')

@section('content')
    <div class="nk-gap-4"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="nk-box-3 bg-dark-1">
                    <h2 class="nk-title h3 text-center">
                        <span class="{{ $task->icon }}"></span>
                        {{ $task->title }}
                    </h2>
                    <div class="nk-gap-2"></div>
                    {!! $task->description !!}
                </div>
            </div>
        </div>
        <div class="row">

        </div>
    </div>
    <div class="nk-gap-4"></div>
@endsection