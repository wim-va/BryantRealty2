@extends('layouts.main')@section('content')
Show Listing {{ $listing->id }}:
{{ $listing->id }} - {{ $listing->price }}
@include('partials.listing')
@endsection
