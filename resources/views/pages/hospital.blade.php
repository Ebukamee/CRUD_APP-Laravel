<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospitals</title>
    @vite('/resources/css/app.css')
</head>
<body>
    <x-layout>
        <div class="m-5 p-5">
            <div class="flex justify-between gap-4 my-10 flex-wrap ">
                @foreach($signages as $sign)
                <div class="cardsection">
                  <img src="https://th.bing.com/th/id/OIP.r6l_zGBvXUqBYLbw55ruGwHaFj?rs=1&pid=ImgDetMain" alt="" class='rounded-sm'>
                  <h2 class=" text-md font-semibold my-5">University of Nigeria Teaching Hospital</h2>
                  <div class="grid">
                    <p class="text-[#888b95] text-sm ">Ituku Ozalla, Nigeria</p>
                    <button class="teal">View Details</button>
                  </div>
                </div>
                @endforeach
            </div>
                {{ $signages->links() }}
        </div>

        </div>
    </x-layout>
</body>
</html>
