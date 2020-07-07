@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <form action="{{ route('report') }}" method="POST">
        @csrf
        <input type="date" name="from_date" id="" class="form-control">
        <input type="date" name="to_date" id="" class="form-control">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
