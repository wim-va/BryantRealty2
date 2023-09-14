@extends('layouts.main')
@section('title', 'Agent Log In')

<h1>Agent Log In Form</h1>

<form action="{{ route('agents.verify') }}" method="POST">
    @csrf

    <div class="email">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
    </div>

    <div class="password">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
    </div>

    <button type="submit">Log In</button>
</form>
