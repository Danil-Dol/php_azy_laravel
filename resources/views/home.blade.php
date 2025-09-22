<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Домашняя страница</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="header">
        <img class="logo" src="{{ Vite::asset('resources/img/Microsoft_logo.png') }}" alt="Microsoft logo">
        <ul class="ulh">
            <li class="li">Главная</li>
            <li class="li">Массивы</li>
        </ul>
    </header>
    <main class="main">
        @foreach ($array as $item)
            <p>{{$item}}</p>
        @endforeach
    </main>
    <footer class="footer">
        <ul class="ulf">
            <li class="li">©Microsoft</li>
            <li class="li">Долбусин Данил Владимирович</li>
            <li class="li"><?php echo date("Y")?></li>
        </ul>
    </footer>
</body>
</html>