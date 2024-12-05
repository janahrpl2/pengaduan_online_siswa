<!DOCTYPE html>
<html lang="en">
<head>
    @include('layoutsAdmin.head')
</head>

<body>

 
 <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->
    <div id="main-wrapper">

    {{--navbar--}}

    @include('layoutsAdmin.navbar')

    {{--end navbar--}}

    {{--sidebar--}}

    @include('layoutsAdmin.sidebar')

    {{--end sidebar--}}

    {{--content--}}
    <div class="content-body">
        @yield('content')
    </div>
    {{--endcontent--}}

    
    
</div>
@include('layoutsAdmin.footer')
</body>

</html>