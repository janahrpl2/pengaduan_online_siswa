<!DOCTYPE html>
<html lang="en">
<head>
    @include('layoutsUser.head')
</head>
<body>
    <div id="main-wrapper">
    {{--navbar--}}

        @include('layoutsUser.navbar')

    {{--end navbar--}}

    {{--content--}}
    <div class="content-body">
        @yield('content')
    </div>
    {{--endcontent--}}
    </div>
    @include('layoutsUser.footer')
</body>
</html>