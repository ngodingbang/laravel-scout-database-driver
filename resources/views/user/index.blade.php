@extends('layouts.admin')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>
                @if (Route::is('user.index-query'))
                    @lang('Search using Eloquent Query')
                @endif

                @if (Route::is('user.index-scout'))
                    @lang('Search using Laravel Scout')
                @endif
            </h1>

            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item">
                    <i class="fas @lang('icon.user')"></i> <span>@lang('menu.user')</span>
                </div>

                <div class="breadcrumb-item">
                    @if (Route::is('user.index-query'))
                        <a href="{{ route('user.index-query') }}">
                            <i class="fas @lang('icon.query')"></i> <span>@lang('menu.query')</span>
                        </a>
                    @endif

                    @if (Route::is('user.index-scout'))
                        <a href="{{ route('user.index-scout') }}">
                            <i class="fas @lang('icon.scout')"></i> <span>@lang('menu.scout')</span>
                        </a>
                    @endif
                </div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>@lang('User List')</h4>

                            <div class="card-header-form">
                                <form>
                                    <div class="input-group">
                                        <input type="text"
                                            name="search"
                                            id="search"
                                            class="form-control"
                                            placeholder="@lang('Search')"
                                            value="{{ request()->query('search') }}">

                                        <div class="input-group-btn">
                                            <button class="btn btn-primary">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tr>
                                        <th>#</th>
                                        <th>@lang('Username')</th>
                                        <th>@lang('Name')</th>
                                        <th>@lang('Email')</th>
                                        <th>@lang('Created At')</th>
                                    </tr>

                                    @forelse ($users as $user)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->created_at->toDateTimeLocalString() }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">@lang('Not Found')</td>
                                        </tr>
                                    @endforelse
                                </table>
                            </div>
                        </div>

                        <div class="card-footer text-right">
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
