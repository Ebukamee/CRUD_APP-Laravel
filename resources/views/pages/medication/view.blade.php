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
                @foreach($drugs as $drug)
                <div class="card" data-aos='zoom-in'>
                  <img src="{{asset('uploads/images/'. $drug->image)}}" alt="" class='rounded-sm aspect-square'>
                  <h2 class=" text-md font-semibold mt-5">{{ $drug -> name }}</h2>
                  <div class="grid">
                    <button class="teal">View Details</button>
                  </div>
                </div>
                @endforeach
            </div>
                {{ $drugs->links() }}
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
