<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
{{-- @vite('resources/css/app.css') --}}
<body>
    <form action="{{ route('store') }}" method='POST'>
    @csrf
        <input type="text" id='name' name='name' required>
        <input type="text" id='name' name='shape' required>
        <input type="text" id='name' name='imagePath' required>
        <input type="text" id='name' name='size' required>
        <input type="text" id='name' name='dojo_id' required>
        <button>Submit</button>
    </form>
</body>
</html>
