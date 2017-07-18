@extends('canvas::frontend.layout')

@section('content')
    <div  class="row content-wrap tags">
        <div class="row title">目前总计{{ count($tags) }}个标签</div>
        <div class="row">
        @foreach ($tags as $key=>$tag)
        <a href="{{ route('canvas.blog.post.index', ['tag' => $tag->tags->tag]) }}"><span>{{ $tag->tags->title }}</span></a>
        @endforeach
        </div>
    </div>
@stop