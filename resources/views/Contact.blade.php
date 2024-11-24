<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
@vite('resources/css/app.css')
<body>
    <h1 class='text-center text-5xl'>Contact</h1>
    @foreach($names as $name)
    <li>
        <x-card href="/contact/{{ $name['id'] }}">
        <h2>{{ $name['Position'] }}</h2>
            <h2>{{ $name['name'] }}</h2>
</x-card>
    </li>
    @endforeach
</body>
</html>