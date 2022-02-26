<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ url('/') }}">{{ config('app.shortname') }}</a>
        </div>

        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('/') }}">{{ config('app.shortname') }}</a>
        </div>

        <ul class="sidebar-menu">
            <li @if (Route::is('user.*')) class="active" @endif>
                <a href="{{ route('user.index') }}" class="nav-link">
                    <i class="fas @lang('icon.user')"></i> <span>@lang('menu.user')</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
