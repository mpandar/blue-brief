@foreach ($posts as $key=>$post)
    <div class="post-preview">
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
            {!! CanvasHelper::closeAllHtmlTags(str_limit($post->content_html, config('blog.frontend_trim_width'))) !!}
        </p>
        <p class="post-readmore"><a href="{{ $post->url($tag) }}">阅读全文 »</a></p>
    </div>
    @if ($key != count($posts)-1)
    <hr>
    @endif
@endforeach