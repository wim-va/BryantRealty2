@extends('layouts.main')
@section('title', 'Create Listing')
@section('content')
    <form action="{{ route('listings.store') }}" method="POST">
        <label for='name'>Name</label>
        <input type="text" name='name' id='name'>
        <br>
        <label for='address'>Address</label>
        <input type="text" name='address' id='address'>
        <br>
        <label for='postcode'>Postcode</label>
        <input type="text" name='postcode' id='postcode'>
        <br>
        <label for='city'>City</label>
        <input type="text" name='city' id='city'>
        <br>
        <label for='beds'>Beds</label>
        <input type="text" name='beds' id='beds'>
        <br>
        <label for='baths'>Baths</label>
        <input type="text" name='baths' id='baths'>
        <br>
        <label for='rooms'>Rooms</label>
        <input type="text" name='rooms' id='rooms'>
        <br>
        <label for='space'>Space</label>
        <input type="text" name='space' id='space'>
        <br>
        <label for='price'>Price</label>
        <input type="text" name='price' id='price'>
        <br>
        <label for='headline'>Headline</label>
        <input type="text" name='headline' id='headline'>
        <br>
        <label for='description'>Description</label>
        <input type="text" name='description' id='description'>
        <br>

        {{-- 
            <label for='agent_id'>agent_id</label>
            <input type="text" name='agent_id' id='agent_id'>
            <br>
        --}}

        {{-- <button class="btn button :btn" type="submit">Create Listing</button> --}}
        <x-secondary-button class="ml-3">
            {{ __('Create Listing') }}
            </x-primary-button>
    </form>
@endsection
