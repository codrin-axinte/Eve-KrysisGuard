@extends('layouts.master')

@section('title', $post->title)

@section('content')
    <!--
    Additional Classes:
        .nk-header-title-sm
        .nk-header-title-md
        .nk-header-title-lg
        .nk-header-title-xl
        .nk-header-title-full
        .nk-header-title-parallax
        .nk-header-title-parallax-opacity
        .nk-header-title-boxed
-->
    <div class="nk-header-title nk-header-title-md nk-header-title-parallax nk-header-title-parallax-opacity nk-header-title-boxed">
        <div class="bg-image">
            <div style="background-image: url({{ $post->image }})" class="op-5"></div>
        </div>
        <div class="nk-header-table">
            <div class="nk-header-table-cell">
                <div class="container">
                    <div class="nk-header-text">
                        <div class="row text-left">
                            <div class="col-lg-8">
                                <div class="nk-gap-5 hidden-md-down"></div>
                                <h1 class="nk-title">{{ $post->title }}</h1>
                                <div class="nk-gap-3 hidden-md-down"></div>
                                <div class="nk-gap-5 hidden-md-down"></div>
                            </div>
                            <div class="col-lg-4">
                                <aside class="nk-sidebar nk-sidebar-right">
                                    <div class="nk-gap-5 hidden-md-down"></div>
                                    <div class="nk-gap hidden-lg-up"></div>
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td><strong>Published:</strong></td>
                                            <td>{{ $post->date }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Category:</strong> &nbsp;&nbsp;&nbsp;</td>
                                            <td><a href="{{ $post->category->path }}">{{ $post->category->name }}</a></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Written by:</strong> &nbsp;&nbsp;&nbsp;</td>
                                            <td><a href="#">{{ $post->author }}</a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="nk-gap-5 hidden-lg-up"></div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- END: Header Title -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="nk-blog-container nk-blog-container-offset">
                    <!-- START: Post -->
                    <div class="nk-blog-post nk-blog-post-single">
                        <!-- START: Post Text -->
                        <div class="nk-post-text mt-0" style="text-align: justify;">
                            {!! $post->body !!}
                            {{--<!-- START: Post Meta -->
                            <div class="nk-post-tags">Tags: &nbsp;<a href="#">Image</a> <a href="#">Demonstrate</a>
                                <a href="#">Tags</a></div>
                                <!-- END: Post Meta -->--}}
                        </div>
                        <!-- END: Post Text -->
                        <!-- START: Post Author -->
                        <div class="nk-post-author">
                            <div class="nk-post-author-photo"><a href="#">
                                    <img src="{{ Voyager::image($post->authorId->avatar) }}" alt="{{ $post->author }}"></a>
                            </div>
                            <h4 class="nk-post-author-name h5"><a href="#">{{ $post->author }}</a></h4>
                            <div class="nk-post-author-info">{{ $post->authorId->role->name }} role</div>
                        </div>
                        <!-- END: Post Author -->
                        {{--TODO:: ADD Comments--}}
                    </div>
                    <!-- END: Post -->
                    <div class="nk-gap-4"></div>
                </div>
            </div>
            <div class="col-lg-4">
                @include('posts.sidebar')
            </div>
        </div>
        <div class="nk-gap-4"></div>
        <div class="nk-gap-3"></div>
    </div>
@endsection