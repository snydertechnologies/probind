@extends('layouts.admin')

{{-- Web site Title --}}
@section('title')
    {{ trans('user/title.user_show') }} :: @parent
@endsection

{{-- Content Header --}}
@section('header')
    {{ trans('user/title.user_show') }}
    <small>{{ trans('user/title.user_show_subtitle', ['user' => $user->username]) }}</small>
@endsection

{{-- Breadcrumbs --}}
@section('breadcrumbs')
    <li>
        <a href="{{ route('home') }}">
            <i class="fa fa-dashboard"></i> {{ trans('site.dashboard') }}
        </a>
    </li>
    <li>
        <a href="{{ route('users.index') }}">
            {{ trans('site.users') }}
        </a>
    </li>
    <li class="active">
        {{ trans('user/title.user_show') }}
    </li>
@endsection

{{-- Content --}}
@section('content')

    <!-- Notifications -->
    @include('partials.notifications')
    <!-- ./ notifications -->

    @include('user/_details', ['action' => 'show'])

@endsection
