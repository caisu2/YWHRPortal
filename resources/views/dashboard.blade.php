@extends('user.layouts.app')

@section('content')
    <div class="dashboard-wrapper">
        @if(Auth::user()->is_admin === 0)
            @include('user.index', ['datas' => $datas['userProfile']] )
        @else
            @include('admin.index', $datas)
        @endif
    </div>

@endsection

