@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="d-flex justify-content-around">

            <div class="card w-25">
                <a href="{{ route('userChart.index') }}"><img class="card-img-top" src="https://charts.erik.cat/logo.png" alt="Card image cap"></a>
                <div class="card-body">
                    <h4 class="card-title">Consoletv Chart</h4>
                    <p class="card-text"><a href="https://dev.to/arielmejiadev/use-laravel-charts-in-laravel-5bbm">Reference</a></p>
                </div>
            </div>

            <div class="card w-25">
                <a href="{{ route('geoChart.index') }}"><img class="card-img-top" src="https://madewithnetwork.ams3.cdn.digitaloceanspaces.com/spatie-space-production/3270/lavacharts-2.jpg" alt="Card image cap"></a>
                <div class="card-body">
                    <h4 class="card-title">LavaChart GeoChart</h4>
                    <p class="card-text"><a href="https://appdividend.com/2018/05/03/how-create-geochart-in-laravel/">Reference</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
