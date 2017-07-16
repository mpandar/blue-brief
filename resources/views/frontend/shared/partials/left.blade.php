
        <div class="col-sm-12 col-md-2 col-lg-2 brand">
            <div class="brand-wrapper">
            <h1><a href="{!! route('canvas.blog.post.index') !!}">{{ \Canvas\Models\Settings::blogTitle() }}</a></h1>
            <h3>{!! \Canvas\Models\Settings::blogSubTitle() !!}</h3>
            </div>
            @include('canvas::frontend.shared.partials.nav')
            <div class="brand-footer-wrapper">
            @if (!empty($socialHeaderIconsUser->twitter))
                <a href="http://twitter.com/{{ $socialHeaderIconsUser->twitter }}" target="_blank" id="social"><i class="fa fa-fw fa-weibo text-muted" style="font-size: 14px"></i></a>
            @endif
            @if (!empty($socialHeaderIconsUser->facebook))
                <a href="http://facebook.com/{{ $socialHeaderIconsUser->facebook }}" target="_blank" id="social"><i class="fa fa-fw fa-facebook text-muted" style="font-size: 14px"></i></a>
            @endif
            @if (!empty($socialHeaderIconsUser->github))
                <a href="http://github.com/{{ $socialHeaderIconsUser->github }}" target="_blank" id="social"><i class="fa fa-fw fa-github text-muted" style="font-size: 14px"></i></a>
            @endif
            @if(!empty($socialHeaderIconsUser->linkedin))
                <a href="http://linkedin.com/in/{{ $socialHeaderIconsUser->linkedin }}" target="_blank" id="social"><i class="fa fa-fw fa-linkedin text-muted" style="font-size: 14px"></i></a>
            @endif
            </div>
        </div>
