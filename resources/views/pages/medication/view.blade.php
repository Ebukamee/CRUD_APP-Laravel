<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <title>Medications</title>
    @vite('/resources/css/app.css')
</head>
<body>
@if(session()->has('success'))
    <div id="success-overlay" class="fixed top-5 left-1/2 transform -translate-x-1/2 bg-green-100 p-4 w-[80%] max-w-[800px] rounded-lg shadow-lg z-50">
        <p class="my-2 text-green-500">{{ session()->get('success') }}</p>
    </div>

    @endif
    <x-layout>
        <div class="m-5 p-5">
        <h1 class="text-4xl font-semibold text-center">Browse Medications</h1>
            <div class="flex justify-center gap-4 my-10 flex-wrap ">
                @foreach($drugs as $drug)
                <div class="card" data-aos='zoom-in'>
                  <img src="{{asset('uploads/images/'. $drug->image)}}" alt="{{$drug->name}}" class='rounded-sm aspect-square'>
                  <h2 class=" text-md font-semibold mt-5">{{ $drug -> name }}</h2>
                  <div class="grid">
                    <button class="teal"><a href="/medication/{{$drug->id}}">View Details</a></button>
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
  document.addEventListener('DOMContentLoaded', () => {
            const errorOverlay = document.getElementById('success-overlay');
            if (errorOverlay) {
                setTimeout(() => {
                    errorOverlay.classList.add('opacity-0', 'transition-opacity', 'duration-500');
                    setTimeout(() => errorOverlay.remove(), 500); 
                }, 5000);
            }
        });
    </script>
</body>
</html>
