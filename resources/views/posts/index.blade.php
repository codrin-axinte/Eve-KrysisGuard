@extends('layouts.master')

@section('title', 'Blog')

@section('content')
    <div class="container">
        <div class="nk-gap-4"></div>
        <div class="nk-blog-list">
            @foreach($posts as $post)
                <post-card
                        title="{{ $post->title }}"
                        url="{{ $post->path }}"
                        image="{{ $post->image  }}"
                        icon="{{ $post->icon }}"
                        date="{{ $post->date }}"
                        category="{{ $post->category->name }}"
                ></post-card>
            @endforeach
            {!! $posts->links() !!}
        </div>
        <div class="nk-gap-4"></div>
        <div class="nk-gap-3"></div>
    </div>
@endsection