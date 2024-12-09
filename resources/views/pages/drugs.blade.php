<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <title>Medications</title>
    @vite('/resources/css/app.css')
</head>
<body>
    <x-layout>
        <div class="m-5 p-5">
        <h1 class="text-4xl font-semibold text-center">Browse Medications</h1>
            <div class="flex justify-center gap-4 my-10 flex-wrap ">
                @foreach($signages as $sign)
                <div class="card" data-aos='zoom-in'>
                  <img src="https://th.bing.com/th/id/OIP.r6l_zGBvXUqBYLbw55ruGwHaFj?rs=1&pid=ImgDetMain" alt="" class='rounded-sm'>
                  <h2 class=" text-md font-semibold mt-5">{{ $sign -> name }}</h2>
                  <div class="grid">
                    <button class="teal">View Details</button>
                  </div>
                </div>
                @endforeach
            </div>
                {{ $signages->links() }}
        </div>

        </div>
    </x-layout>
     <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 2000
            , once: true
        , });

    </script>
</body>
</html>
