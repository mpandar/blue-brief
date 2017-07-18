@extends('canvas::frontend.layout')

@section('content')
    <div  class="row content-wrap tags">
        <div class="row title">目前总计 {{ $posts->total() }} 篇文章，继续努力！</div>
        <div class="row">
            <div class="times">
                <ul>
                    @foreach ($posts as $key=>$post)
                    <li>
                        {!!CanvasHelper::postsTimeLine($post) !!}                   
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@stop