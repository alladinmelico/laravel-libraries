@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Spatie Image Manipulation</h2>
        <p><i>Original to Sepia</i></p>
        <img src="{{ asset('images/rubik.jpg') }}" alt="">
        <img src="{{ asset('images/rubik2.jpg') }}" alt="">
    </div>
@endsection
