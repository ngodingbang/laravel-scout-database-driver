<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ url('/') }}">{{ config('app.shortname') }}</a>
        </div>

        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('/') }}">{{ config('app.shortname') }}</a>
        </div>

        <ul class="sidebar-menu">
            <li class="nav-item dropdown @if (Route::is('user.*')) active @endif">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas @lang('icon.user')"></i> <span>@lang('menu.user')</span>
                </a>

                <ul class="dropdown-menu">
                    <li class="@if (Route::is('user.index-query')) active @endif">
                        <a class="nav-link" href="{{ route('user.index-query') }}">
                            <i class="fas @lang('icon.query')"></i> @lang('menu.query')
                        </a>
                    </li>

                    <li class="@if (Route::is('user.index-scout')) active @endif">
                        <a class="nav-link" href="{{ route('user.index-scout') }}">
                            <i class="fas @lang('icon.scout')"></i> @lang('menu.scout')
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
