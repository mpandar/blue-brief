<ul class="pager row">
    {{-- Reverse direction --}}
    @if ($reverse_direction)
        @if ($posts->currentPage() > 1)
            <li class="previous">
                <a href="{!! $posts->url($posts->currentPage() - 1) !!}">
                    <i class="fa fa-angle-left fa-lg"></i>
                    上 {{ $tag->tag }}
                </a>
            </li>
        @endif
        @if ($posts->hasMorePages())
            <li class="next">
                <a href="{!! $posts->nextPageUrl() !!}">
                    下 {{ $tag->tag }}
                    <i class="fa fa-angle-right"></i>
                </a>
            </li>
        @endif
    @else
        @if ($posts->currentPage() > 1)
            <li class="previous">
                <a href="{!! $posts->url($posts->currentPage() - 1) !!}">
                    <i class="fa fa-angle-left fa-lg"></i>
                    上一页 {{ $tag ? $tag->tag : '' }}
                </a>
            </li>
        @endif
        @if ($posts->lastPage() > 1)
        <?php 
            $start = $posts->currentPage() < 3 ? 1 : ($posts->currentPage()-1);
            $end = ($start + 3) > $posts->lastPage()?$posts->lastPage():($start + 3);
        ?>
        @for ($i = $start; $i <= $end; $i++)
            <li class="{!! $posts->currentPage()==$i?'current-page disabled':'' !!}">
                <a href="{!! $posts->url($i) !!}">
                    &nbsp;{{ $i }}&nbsp;
                </a>
            </li>
        @endfor
        @endif
        @if ($posts->hasMorePages())
            <li class="next">
                <a href="{!! $posts->nextPageUrl() !!}">
                    下一页 {{ $tag ? $tag->tag : '' }}
                    <i class="fa fa-angle-right"></i>
                </a>
            </li>
        @endif
    @endif
</ul>