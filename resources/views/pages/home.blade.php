<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($signages as $sign)
        <h2>{{ $sign['size'] }}</h2>
    @endforeach
</body>
</html>