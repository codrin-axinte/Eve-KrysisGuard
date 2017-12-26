@extends('layouts.error')
@section('title', '404 - Page Not Found')
@section('page-content')
    <app-page-error title="Page Not Found" button="Go Home, You're lost!">
        @lang('Oh, wreck! You are lost in the deep space. Luckily for you, we can take you back home.')
    </app-page-error>
@endsection