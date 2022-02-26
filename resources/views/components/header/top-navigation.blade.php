<nav class="navbar navbar-expand-lg main-navbar">
    <a href="{{ url('/') }}" class="navbar-brand sidebar-gone-hide">{{ config('app.name') }}</a>

    <div class="navbar-nav">
        <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar">
            <i class="fas fa-bars"></i>
        </a>
    </div>

    <div class="nav-collapse">
        <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
            <i class="fas fa-ellipsis-v"></i>
        </a>

        <ul class="navbar-nav">
            <li class="nav-item @if (Route::is('user.*')) active @endif">
                <a href="{{ route('user.index') }}" class="nav-link">
                    <span>@lang('menu.user')</span>
                </a>
            </li>
        </ul>
    </div>

    <ul class="navbar-nav navbar-right ml-auto">
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="{{ gravatar_image() }}" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Name</div>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">
                    <span>🇮🇩 Username</span>
                </div>

                <a href="#" class="dropdown-item has-icon">
                    <i class="fas @lang('icon.user')"></i> @lang('menu.user')
                </a>

                <div class="dropdown-divider"></div>

                @if (Auth::check() && Route::has('logout'))
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger" onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class="fas fa-sign-out-alt"></i> @lang('Log Out')
                        </a>
                    </form>
                @endif
            </div>
        </li>
    </ul>
</nav>
