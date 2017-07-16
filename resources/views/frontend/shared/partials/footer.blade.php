<div class="row footer">
    <p>© 2017 - 2017  MaStone<br>
    本网站由
        <a href="https://canvas.toddaustin.io" target="_blank"><span>Canvas</span></a> 强力驱动 · 
        主题 <a href="https://github.com/mpandar/blue-brief" target="_blank"><span>Blue Brief</span></a> · 
        <a href="{!! route('canvas.admin') !!}"><i class="fa fa-lock">&nbsp;&nbsp;</i><span>登录</span></a>
    </p>
</div>


<!-- scroll to top button -->
<span id="top-link-block" class="hidden hover-button">
    <a id="scroll-to-top" href="#top">↑</a>
</span>

@if (!empty(\Canvas\Models\Settings::gaId()))
    @include('canvas::frontend.blog.partials.analytics')
@endif