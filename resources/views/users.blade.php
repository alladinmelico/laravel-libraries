@extends('layouts.app')

@section('content')
    <h2 class="text-center">Users Graph</h2>

    <div>
        {!! $usersChart->container() !!}
    </div>

    <p class="text-center"><a href="https://dev.to/arielmejiadev/use-laravel-charts-in-laravel-5bbm">https://dev.to/arielmejiadev/use-laravel-charts-in-laravel-5bbm</a></p>
@endsection

@section('script')
    @if ($usersChart)
        {!! $usersChart->script() !!}
    @endif
@endsection
