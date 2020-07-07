@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="d-flex flex-column flex-md-row  justify-content-around flex-wrap">

            <div class="card w-25 m-2">
                <a href="{{ route('userChart.index') }}"><img class="card-img-top" src="https://charts.erik.cat/logo.png" alt="Card image cap"></a>
                <div class="card-body">
                    <h4 class="card-title">Consoletv Chart</h4>
                    <p class="card-text"><a href="https://dev.to/arielmejiadev/use-laravel-charts-in-laravel-5bbm">Reference</a></p>
                </div>
            </div>

            <div class="card w-25 m-2">
                <a href="{{ route('geoChart.index') }}"><img class="card-img-top" src="https://madewithnetwork.ams3.cdn.digitaloceanspaces.com/spatie-space-production/3270/lavacharts-2.jpg" alt="Card image cap"></a>
                <div class="card-body">
                    <h4 class="card-title">LavaChart GeoChart</h4>
                    <p class="card-text"><a href="https://appdividend.com/2018/05/03/how-create-geochart-in-laravel/">Reference</a></p>
                </div>
            </div>

            <div class="card w-25 m-2">
                <a href="{{ route('geoChart.index') }}"><img class="card-img-top" src="https://i.imgur.com/xMAskmD.jpg" alt="Card image cap"></a>
                <div class="card-body">
                    <h4 class="card-title">Googlmapper</h4>
                    <p>Googlmapper as an easy way to integrate Google Maps with Laravel, providing a variety of helpers to speed up the utilisation of mapping</p>
                    <p class="card-text"><a href="https://github.com/codepio/Googlmapper#rectangle">Reference</a></p>
                </div>
            </div>

            <div class="card w-25 m-2">
                <a href="{{ route('report') }}"><img class="card-img-top" src="https://placid.app/u/2wagk?hl=Laravel%20Report%20Generator&subline=Rapidly%20generate%20a%20simple%20PDF%2C%20CSV%2C%20%26%20Excel%20Report%20Package&img=%24PIC%24https%3A%2F%2Fmadewithnetwork.ams3.cdn.digitaloceanspaces.com%2F%2Fspatie-space-production%2F3443%2Flaravel-report-generator.jpg" alt="Card image cap"></a>
                <div class="card-body">
                    <h4 class="card-title">jimmyjs/laravel-report-generator</h4>
                    <p>Rapidly Generate Simple Pdf Report on Laravel </p>
                    <p class="card-text"><a href="https://github.com/Jimmy-JS/laravel-report-generator/blob/master/readme.md">Reference</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
