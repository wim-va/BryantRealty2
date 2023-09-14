@extends('layouts.main')
@section('title', 'Agent Log In')

@section('content')


    <form action="{{ route('clients.verify') }}" method="POST">

        <div class="email">
            <label for="email">
                Email:
            </label>
            <input type="text" name="email" id="email">
        </div>

        <div class="password">
            <label for="password">
                Password:
            </label>
            <input type="text" name="password" id="password">
        </div>

        <button type="submit">Log In</button>
    </form>

@endsection
