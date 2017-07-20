@extends('canvas::frontend.layout')

@section('og-title', $post->title)
@section('twitter-title', $post->title)
@section('og-description', $post->meta_description)
@section('twitter-description', $post->meta_description)
@section('title',$post->title .' - '. \Canvas\Models\Settings::blogTitle())
@if ($post->page_image)
    @section('og-image', url( $post->page_image ))
    @section('twitter-image', url( $post->page_image ))
@endif

@section('content')
    <article>
        <div class="container" id="post">
            <div class="row">
                <div class="post-preview">
                    @if ($post->page_image)
                        <div class="text-center">
                            <img src="{{ asset($post->page_image) }}" class="post-hero">
                        </div>
                    @endif
                    <h2 class="post-title">
                        <a href="{{ $post->url($tag) }}">{{ $post->title }}</a>
                    </h2>
                    <p class="post-meta">
                        {{ $post->published_at->diffForHumans() }} &#183; {{ $post->readingTime() }}分钟 
                        @unless( $post->tags->isEmpty())
                            &nbsp;&nbsp;&nbsp;{!! implode(' ', $post->tagLinks()) !!}
                        @endunless
                    </p>
                    <p class="postSubtitle">
                        {!! $post->content_html !!}
                    </p>
                </div>

                    {{--  @include('canvas::frontend.blog.partials.author')  --}}

            </div>
        </div>
    </article>

    @include('canvas::frontend.blog.partials.paginate-post')
    <div class="container">
        @if(!empty(\Canvas\Models\Settings::disqus()))
            @include('canvas::frontend.blog.partials.changyan')
        @endif
    </div>
        
@stop

@section('unique-js')
    <script src="{{ elixir('vendor/canvas/assets/js/frontend.js') }}" charset="utf-8"></script>
@endsection