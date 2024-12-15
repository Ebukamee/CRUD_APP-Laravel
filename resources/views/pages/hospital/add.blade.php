<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
</head>
@vite('resources/css/app.css')
<body>
    <x-layout>
     @if($errors->any())
                <ul class="p-4 bg-red-100 m-auto w-[80%] max-w-[800px] rounded">
                @foreach($errors->all() as $err)
                <p class="my-2 text-red-500">{{ $err }}</p>
                @endforeach
                </ul>
                @endif
        <div class="bg-[#f7e8d1] m-auto my-10 w-[80%] max-w-[800px] p-10 rounded-3xl  grid lg:grid-cols-2 gap-10">
            <div class="col-span-1">
                <h2 class="text-4xl mb-10" data-aos="fade-down">Add Hospitals</h2>
                <p class="text-sm" data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta error reprehenderit, doloremque ducimus in iusto mollitia voluptates maiores qui ipsa libero! Voluptas ea necessitatibus delectus ratione rerum soluta, earum doloribus.</p>
                <img src="https://th.bing.com/th/id/OIP.r6l_zGBvXUqBYLbw55ruGwHaFj?rs=1&pid=ImgDetMain" alt="" class='rounded-xl mt-10' data-aos="zoom-in">

            </div>
            <form action="{{ route('hospital.create') }}" method="POST" enctype="multipart/form-data" data-aos="zoom-in">
                @csrf

                <label for="name" class="text-[#888b95] text-sm m-2">
                    Name Of Hospital
                </label>
                <input type="text" class="input" name="name" id='name' value="{{ old('name') }}" required placeholder="Enter the name of the health institute">

                <label for="type" class="text-[#888b95] text-sm m-2">
                    Type
                </label>
                <select class="input" name="type" id="type" value="{{ old('type') }}" required>
                  <option value="" disabled selected>Select Type</option>
                  @foreach($type as $type)
                    <option value="{{$type}}">{{ $type  }}</option>
                  @endforeach
                </select>

                <label for="state" class="text-[#888b95] text-sm m-2">
                    State
                </label>
                <input type="text" class="input" name="state" id="state" value="{{ old('state') }}" required>

                <label for="city" class="text-[#888b95] text-sm m-2">
                    City/Town
                </label>
                <input type="text" class="input" name="city" id="city" value="{{ old('city') }}" required placeholder="Enter City of health institute">

                <label for="address" class="text-[#888b95] text-sm m-2">
                    Location Address
                </label>
                <input type="text" class="input" name="address" id="address" value="{{ old('address') }}" required placeholder="Enter Address">

                <label for="proprietor" class="text-[#888b95] text-sm m-2">
                    Proprietor
                </label>
                <select  class="input" name="proprietor" id="proprietor" value="{{ old('proprietor') }}" required>
                <option value="" disabled selected>Select</option>
                  @foreach($states as $state)
                    <option value="{{$state}}">{{ $state  }}</option>
                  @endforeach
                <label for="director" class="text-[#888b95] text-sm m-2">
                    MD/CEO
                </label>
                <input type="text" class="input" name="director" id="director" value="{{ old('director') }}" required placeholder="Enter the name of the Hospital Leader">

                <label for="description" class="text-[#888b95] text-sm m-2">
                    Description
                </label>
                <textarea class="input h-40 p-5 rounded-lg" name="description" id="description" required placeholder="Description">{{ old('description') }}</textarea>
                <label for="image" class="text-[#888b95] text-sm m-2">
                    Google Map Link
                </label>
                <input type="url" class="input" name="url" id="url" placeholder="Add Google Map" required>
                <label for="image" class="text-[#888b95] text-sm m-2">
                    Image of Hospital
                </label>
                <input type="file" class="input" name="image" id="image" required>

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

    </script>
</body>
</html>
