<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <title>Add Medications</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @if($errors->any())
    <div id="error-overlay" class="fixed top-5 left-1/2 transform -translate-x-1/2 bg-red-100 p-4 w-[80%] max-w-[800px] rounded-lg shadow-lg z-50">
        <ul>
            @foreach($errors->all() as $err)
            <li class="my-2 text-red-500">{{ $err }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <x-layout>
        <div class="bg-[#f7e8d1] m-auto my-10 w-[80%] max-w-[800px] p-10 rounded-3xl  grid lg:grid-cols-2 gap-10">
            <div class="col-span-1">
                <h2 class="text-4xl mb-10" data-aos="fade-down">Add Medications</h2>
                <p class="text-sm" data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta error reprehenderit, doloremque ducimus in iusto mollitia voluptates maiores qui ipsa libero! Voluptas ea necessitatibus delectus ratione rerum soluta, earum doloribus.</p>
                <img src="https://static.vecteezy.com/system/resources/previews/010/810/331/non_2x/medicine-pharmacy-hospital-set-of-medicines-with-labels-the-concept-of-medical-subjects-illustration-in-cartoon-style-vector.jpg" alt="" class='rounded-xl mt-10' data-aos="zoom-in">
            </div>
            <form action="{{route('medication.create')}}" method="POST" enctype="multipart/form-data" data-aos="zoom-in">
                @csrf
                <label for="name" class="text-[#888b95] text-sm m-2 ">
                    Name Of Drug
                </label>
                <input type="text" class="input" name="name" id='name' value="{{ old('name') }}" required placeholder="Enter the name of drug">
                <label for="name" class="text-[#888b95] text-sm m-2 ">
                    Type
                </label>
                <input type="Type" class="input" name="type" id='type' value="{{ old('type') }}" required placeholder="e.g AntiBiotics, anti-viral e.t.c">
                <label for="name" class="text-[#888b95] text-sm m-2 ">
                    Active Ingridients
                </label>
                <textarea class="input h-40 p-5" name="active" id='active' value="{{ old('active') }}" required></textarea>
                <label for="name" class="text-[#888b95] text-sm m-2 ">
                    Approved use of Medication
                </label>
                <textarea class="input h-40 p-5" name="indication" id='indication' value="{{ old('indication') }}" required placeholder="e.g Fever, malaria etc"></textarea>
                <label for="name" class="text-[#888b95] text-sm m-2 ">
                    Manufacturer
                </label>
                <input type="text" class="input" name="manufacturer" id='manufacturer' value="{{ old('manufacturer') }}" required placeholder="Enter Address">
                <label for="side" class="text-[#888b95] text-sm m-2 ">
                    Side Effects
                </label>
                <textarea class="input h-40 p-5 rounded-lg" name="side" id='side' value="{{ old('side') }}" required placeholder="e.g  Nausea, Dizziness etc"></textarea>
                <label for="image" class="cursor-pointer flex items-center gap-2 transition duration-300 m-2">
                    <img src="/img.png" class="w-[20px]" alt="Upload">
                    <p id="fileLabelText" class="text-[#888b95] text-sm m-2">Upload Image of Hospital</p>
                </label>
                <input type="file" class="hidden" name="image" id="image" value="{{ old('image') }}" required>

                 {{-- User's Name --}}

                <input type="text" name="user-name" id="user-name" value='{{$user->name}}' hidden>

                {{-- User's Username --}}
                <input type="text" name="username" id="username" value='{{$user->username}}' hidden>

                <button class="teal">Submit</button>
            </form>
        </div>

        <div class="bg-no-repeat bg-cover w-[100%] h-[500px]" style="background-image:url('/pink-bg.png');"></div>

    </x-layout>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 2000
            , once: true
        , });
        document.addEventListener('DOMContentLoaded', () => {
            const errorOverlay = document.getElementById('error-overlay');
            if (errorOverlay) {
                setTimeout(() => {
                    errorOverlay.classList.add('opacity-0', 'transition-opacity', 'duration-500');
                    setTimeout(() => errorOverlay.remove(), 500); // Ensure it's removed from the DOM
                }, 5000);
            }
        });

        document.addEventListener('DOMContentLoaded', () => {
            const fileInput = document.getElementById('image');
            const fileLabel = document.getElementById('fileLabelText');

            if (fileInput && fileLabel) {
                fileInput.addEventListener('change', (event) => {
                    const fileName = event.target.files[0] ?.name || 'Upload Image of Hospital';
                    fileLabel.textContent = fileName;
                });
            } else {
                console.error('File input or label element not found.');
            }
        });

    </script>
</body>
</html>
