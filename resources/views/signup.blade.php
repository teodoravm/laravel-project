@extends('layouts.app')

@section('maincontent')

<form action="{{ route('users.store') }}" method="POST" style="border:1px solid #ccc">
    @csrf
    <div class="container">
        <h1>Регистрация</h1>
        <hr>

        <label for="name"><b>Име</b></label>
        <input type="text" value="{{ old('name') }}" placeholder="Въведете име" name="name" required>

        @error('email')
        <p class="alert-danger">{{ $errors->first('email') }} </p>
        @enderror
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Въведете имейл" name="email" required>

        @error('password')
        <p class="alert-danger">{{ $errors->first('password') }} </p>
        @enderror
        <label for="password"><b>Парола</b></label>
        <input type="password" placeholder="Въведете парола" name="password" required>

        <label for="psw-repeat"><b>Повторете паролата</b></label>
        <input type="password" placeholder="Повторете паролата" name="psw-repeat" required>

        <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Запомни ме
        </label>

        <p>Със създаването на акаунт се съгласявате с нашите <a href="#" style="color:dodgerblue">Политики за поверителност.</a>.</p>

        <div class="clearfix">
            <button type="submit" class="signupbtn">Регистрация</button>
        </div>
    </div>
</form>

@endsection