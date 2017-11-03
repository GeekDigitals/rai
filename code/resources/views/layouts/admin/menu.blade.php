<ul class="list">
    <li class="header">MAIN MENU</li>
    <li class="{{ Request::is('admin') ? 'active' : ''}}"><a href="{{ url('/admin') }}"><i class="fa fa-home"></i><span>Home</span></a></li>

    <li class="{{ Request::is('admin/homepage*') ? 'active' : ''}}"><a href="{{ url('/admin/homepage') }}"><i class="fa fa-image"></i><span>Homepage</span></a></li>

    <li class="{{ Request::is('admin/about-us*') ? 'active' : ''}}"><a href="{{ url('/admin/about-us') }}"><i class="fa fa-bookmark"></i><span>About Us</span></a></li>

    <li class="{{ Request::is('admin/social-media*') ? 'active' : ''}}"><a href="{{ url('/admin/social-media') }}"><i class="fa fa-optin-monster"></i><span>Social Media</span></a></li>

    @if(Auth::user()->role ==  \App\User::ROLE_SUPERADMIN)
        <li class="{{ (Request::is('admin/users*') || Request::is('admin/profile*'))? 'active' : ''}}"><a href="{{ url('/admin/users') }}"><i class="fa fa-group"></i><span>Users</span></a></li>
    @endif

    {{--<li>--}}
        {{--<a href="javascript:void(0);" class="menu-toggle">--}}
            {{--<i class="material-icons">widgets</i>--}}
            {{--<span>Widgets</span>--}}
        {{--</a>--}}
        {{--<ul class="ml-menu">--}}
            {{--<li>--}}
                {{--<a href="javascript:void(0);" class="menu-toggle">--}}
                    {{--<span>Cards</span>--}}
                {{--</a>--}}
                {{--<ul class="ml-menu">--}}
                    {{--<li>--}}
                        {{--<a href="pages/widgets/cards/basic.html">Basic</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="pages/widgets/cards/colored.html">Colored</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="pages/widgets/cards/no-header.html">No Header</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</li>--}}
</ul>
