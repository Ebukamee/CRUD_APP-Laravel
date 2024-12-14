<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <title>Hospitals</title>
    @vite('/resources/css/app.css')
</head>
<body>
    <x-layout>
        <div class="m-5 p-5">
        <h1 class="text-4xl font-semibold text-center">Browse Health Institutions</h1>
            <div class="flex justify-center gap-4 my-10 flex-wrap ">
                @foreach($hospital as $h)
                <div class="cardsection" data-aos='zoom-in'>
                  <img src="{{asset('uploads/images/'. $h->image)}}" alt="" class='rounded-sm'>
                  <h2 class=" text-md font-semibold my-5">{{ $h -> name }}</h2>
                  <div class="grid">
                    <p class="text-[#888b95] text-sm ">{{  $h->city}}, Nigeria</p>
                    <button class="teal"><a href="/hospital/{{$h->id}}">View Details</a></button>
                  </div>
                </div>
                @endforeach
            </div>
                {{ $hospital->links() }}
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
