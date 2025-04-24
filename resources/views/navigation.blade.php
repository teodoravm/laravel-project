
<nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Лаптoпи</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{ Route::currentRouteName()== 'home' ? 'active' : '' }}">
                    <a href="{{ route('home') }}">Начало</a>
                </li>
                <li class="{{ Route::currentRouteName()== 'about' ? 'active' : '' }}">
                    <a href="{{ route('about') }}">За нас</a>
                </li>
                <li class="{{ Route::currentRouteName()== 'products.index' ? 'active' : '' }}">
                    <a href="{{ route('products.index') }}">Лаптопи</a>
                </li>
                <li class="{{ Route::currentRouteName()== 'products.create' ? 'active' : '' }}">
                    <a href="{{ route('products.create') }}">Добави продукт</a>
                </li>
                @auth
                <li class="pt-5" style="color: white;" >
                    <a>Здравей, {{ Auth::user()->name }}</a>
                </li>
                <li>
                    <form method="POST" action="{{ route('user.logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0" style="color: white; text-decoration: underline;">Изход</button>
                    </form>
                </li>
                @else
                <li class="{{ Route::currentRouteName()== 'register' ? 'active' : '' }}">
                    <a href="{{ route('register') }}">Регистрация</a>
                </li>
                <li class="{{ Route::currentRouteName()== 'login' ? 'active' : '' }}">
                    <a href="{{ route('login') }}">Вход</a>
                </li>
                @endauth
                
            </ul>
        </div>
    </div>
</nav>