@extends('layouts.app')

@section('maincontent')
<div class="container">
    <h1>Вход</h1>
    <form method="POST" action="{{ route( 'user.login') }}">
        @csrf
        <label for="email">Имейл:</label><br>
        <input type="email" name="email" required><br><br>

        <label for="password">Парола:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Вход</button>
    </form>
</div>
@endsection
