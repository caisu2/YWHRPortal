@extends('user.layouts.app')

@section('content')

    <div class="dashboard-wrapper">
        @if(Auth::user()->is_admin === 0)
            @include('user.index')
        @else
            @include('admin.index', $datas)
        @endif
    </div>

@endsection

