<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>
    <x-layout class="lightred text-white p-5 rounded-bl-3xl">
    <header class="lightred  text-white p-5 rounded-bl-3xl">
    <nav class="flex justify-between">
        <img src="logo.svg" alt="">
<div class='flex'>
            <p class='mx-2'>Home</p>
            <p class='mx-2'>View Created</p>
            <p class='mx-2'>Create</p>

</div>
<div></div>
    </nav>
   
        <div class="text-white m-5 p-10 text-center">
            <h1 class='text-bold text-3xl'>A Modern Publishing Platform</h1>
            <p>Grow and build your Design With us</p>
        </div>
    </header>
    {{$slot}}
</x-layout>
</body>
</html>