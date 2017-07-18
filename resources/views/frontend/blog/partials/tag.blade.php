@if (isset($tag->title))
<div class="row tag">
    <span class="row tag-link">
        <i class="fa fa-fw fa-tag"></i> 标签&nbsp;<a href="#"><span>{{ $tag->title or '' }}</span></a> &nbsp;的相关文章
    </span>
</div>
@endif