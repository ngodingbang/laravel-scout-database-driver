@extends('layouts.admin')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@lang('menu.user')</h1>

            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item">
                    <a href="{{ route('user.index') }}">
                        <i class="fas @lang('icon.user')"></i> <span>@lang('menu.user')</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">

                </div>
            </div>
        </div>
    </section>
@endsection
