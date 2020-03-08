<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BitChest</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">

    @yield('css')
  </head>
  <body>
    <nav>
        <a href="{{ URL::to('/') }}">
            <img src="{{ asset('assets/img/bitchest_logo.png') }}" alt="Logo de BitChest" width="300px">
        </a>
        <ul class="menu_horiz">
            <li><a href="{{ URL::to('/') }}">Accueil</a></li>
        </ul>

    </nav>
    <div class="date_du_jour">Date : {{ \Carbon\Carbon::now()->isoFormat('LL') }}</div>

    <main class="section">
        <div class="container">
            @yield('content')
        </div>
    </main>
  </body>
</html>
