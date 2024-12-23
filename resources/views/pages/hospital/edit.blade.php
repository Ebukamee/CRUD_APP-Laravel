<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
</head>
@vite('resources/css/app.css')
<body>
    <x-layout>
        @if($errors->any())
        <div id="error-overlay" class="fixed top-5 left-1/2 transform -translate-x-1/2 bg-red-100 p-4 w-[80%] max-w-[800px] rounded-lg shadow-lg z-50">
            <ul>
                @foreach($errors->all() as $err)
                <li class="my-2 text-red-500">{{ $err }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="bg-[#f7e8d1] m-auto my-10 w-[80%] max-w-[800px] p-10 rounded-3xl  grid lg:grid-cols-2 gap-10">
            <div class="col-span-1">
                <h2 class="text-4xl mb-10" data-aos="fade-down">Edit Hospitals</h2>
                <p class="text-sm" data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta error reprehenderit, doloremque ducimus in iusto mollitia voluptates maiores qui ipsa libero! Voluptas ea necessitatibus delectus ratione rerum soluta, earum doloribus.</p>
                <img src="https://th.bing.com/th/id/OIP.r6l_zGBvXUqBYLbw55ruGwHaFj?rs=1&pid=ImgDetMain" alt="" class='rounded-xl mt-10' data-aos="zoom-in">

            </div>
            <form action="{{ route('hospital.edit', $hospital->id) }}" method="POST" enctype="multipart/form-data" data-aos="zoom-in">
                @csrf
                @method('put')
                <label for="name" class="text-[#888b95] text-sm m-2">
                    Name Of Hospital
                </label>
                <input type="text" class="input" name="name" id='name'  value="{{$hospital->name}}"  placeholder="Enter the name of the health institute">

                <label for="type" class="text-[#888b95] text-sm m-2">
                    Type
                </label>
                <select class="input" name="type" id="type" >
                    <option value="" disabled selected>Select Type</option>
                    @foreach($type as $type)
                    <option value="{{$type}}"{{$type == $hospital->type ? 'selected' : '' }}>{{ $type  }}</option>
                    @endforeach
                </select>

                <label for="state" class="text-[#888b95] text-sm m-2">
                    State
                </label>
                <select class="input" name="state" id="state"   value="{{$hospital->state}}">
                    <option value="" disabled selected>Select State</option>
                    @foreach($states as $state)
                    <option value="{{$state}}" {{$state == $hospital->state ? 'selected' : ''  }}>{{ $state  }}</option>
                    @endforeach
                </select>
                <label for="city" class="text-[#888b95] text-sm m-2">
                    City/Town
                </label>
                <input type="text" class="input" name="city" id="city"  value="{{$hospital->city}}"  placeholder="Enter City of health institute">

                <label for="address" class="text-[#888b95] text-sm m-2">
                    Location Address
                </label>
                <input type="text" class="input" name="address" id="address"  value="{{$hospital->address}}" placeholder="Enter Address">

                <label for="proprietor" class="text-[#888b95] text-sm m-2">
                    Proprietor
                </label>
                <select class="input" name="proprietor" id="proprietor"  value="{{$hospital->proprietor}}" >
                    <option value="" disabled selected>Select</option>
                    @foreach($prop as $prop)
                    <option value="{{$prop}}" {{$prop ==  $hospital->proprietor ? 'selected' : ''}}>{{ $prop  }}</option>
                    @endforeach
                </select>
                <label for="director" class="text-[#888b95] text-sm m-2">
                    MD/CEO
                </label>
                <input type="text" class="input" name="director" id="director" value="{{$hospital->director}}"  placeholder="Enter the name of the Hospital Leader">

                <label for="description" class="text-[#888b95] text-sm m-2">
                    Description
                </label>
                <textarea class="input h-40 p-5 rounded-lg" name="description" id="description"  placeholder="Description" >{{$hospital->description}}</textarea>
                <label for="image" class="text-[#888b95] text-sm m-2">
                    Google Map Link
                </label>
                <input type="url" class="input" name="url" id="url" placeholder="Add Google Map" value="{{$hospital->url}}" >
                <label for="image" class="cursor-pointer flex items-center gap-2 transition duration-300 m-2">
                    <img src="/img.png" class="w-[20px]" alt="Upload">
                    <p id="fileLabelText" class="text-[#888b95] text-sm m-2">Upload Image of Hospital</p>
                </label>
                <input type="file" class="hidden" name="image" id="image"  value="{{$hospital->image}}" >


                 {{-- User's Name --}}

                <input type="text" name="user-name" id="user-name" value='{{$user->name}}' hidden>

                {{-- User's Username --}}
                <input type="text" name="username" id="username" value='{{$hospital ->username}}' hidden>

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
                    setTimeout(() => errorOverlay.remove(), 500); 
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
