@extends('layouts.main')
@section('content')
@section('title', 'Agents Index')
@foreach ($agents as $agent)
    {{ $agent->firstName }} <br>
@endforeach
@endsection
