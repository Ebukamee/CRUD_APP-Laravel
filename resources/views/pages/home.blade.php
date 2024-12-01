<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
@vite('resources/css/app.css')
<body>
    @foreach($signages as $sign)
        <h2>{{ $sign['id'] }}</h2>
        <h2>{{ $sign -> shape }}</h2>
        <p>{{ $sign->dojo->location }}</p>
    @endforeach

    {{ $signages->links() }}
</body>
</html>