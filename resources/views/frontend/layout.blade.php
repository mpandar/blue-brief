<!DOCTYPE html>
<html lang="en">
    <head>
        @include('canvas::frontend.shared.partials.meta')
        @include('canvas::frontend.shared.partials.css')
        @include('canvas::frontend.shared.partials.user-generated-css')
    </head>
    <body>
        <div class="container">
            <div class="row content">
                @include('canvas::frontend.shared.partials.left')
                <div  class="col-sm-12 col-md-8 col-lg-9">
                    @yield('content')
                    @yield('unique-js')
                    @include('canvas::frontend.shared.partials.user-generated-js')
                    @include('canvas::frontend.shared.partials.footer')
                </div>
            </div>
        </div>
            
    </body>
</html>
