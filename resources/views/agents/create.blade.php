{{-- 
    Laravel isn't all too pleased with the 
    value="{{ old('{{$data}}') }}"
    line. Double var pasting? Any changes?

    Seems to work fine but gives error & refuses to auto format with line embedded.
    --}}

@extends('layouts.main')
@section('title', 'Create Agent')
@section('content')


    <form action='{{ route('agents.store') }}' method='POST'>
        @csrf

        @php
            $details = ['firstName' => 'First Name', 'lastName' => 'Last Name', 'address' => 'Address', 'postcode' => 'Postcode', 'city' => 'City', 'telephone' => 'Telephone', 'email' => 'Email', 'website' => 'Website', 'company' => 'Company', 'vat_number' => 'VAT Number', 'password' => 'Password', 'password_confirmation' => 'Password Confirmation'];
        @endphp

        @foreach ($details as $data => $label)
            <div class="{{ $data }}">
                <label for="{{ $data }}">
                    {{ $label }}:
                </label>
                <input type="text" name="{{ $data }}" id="{{ $data }}" value="{{ old($data) }}">
                @error('{{ $data }}')
                    {{ $message }}
                @enderror
            </div>
        @endforeach


        <input type="text" hidden name="is_agent" value="true">

        <button style='outline: 1px solid green; padding: 5px 10px; margin: 5px 0;' type='submit'>Create Agent</button>
    </form>
@endsection
