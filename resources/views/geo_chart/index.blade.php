@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h2>LarChart GeoChart</h2>
        <div id='geo' style="width:800px;border:1px solid black"></div>
        {!!  $lava->render('GeoChart','User', 'geo') !!}
    </div>
@endsection
