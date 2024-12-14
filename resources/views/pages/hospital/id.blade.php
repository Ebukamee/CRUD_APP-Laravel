<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$hospital->name}}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

</head>
<body>
    <x-layout>
        <h2 class="text-3xl font-semibold text-center mb-4 text-gray-800" data-aos="flip-left">
            {{ $hospital->name }}
        </h2>
        <div class="bg-[#e5f1fe] m-10 pt-10 pb-10 px-8 rounded-3xl text-center h-fit bg-cover bg-no-repeat shadow-lg flex gap-10 justify-between flex-col lg:flex-row" style="background-image: url('/wws.svg');">
            <!-- Profile Image -->
            <div class="w-[80%] lg:w-[50%] m-auto">
                <img src="{{asset('uploads/images/'. $hospital->image)}}" alt="Profile Image" class="w-[100%] rounded-md mb-5 shadow-md ">
            </div>
            <div class="shadow-lg lg:w-[50%] p-5 rounded-xl">
                {{-- <h2 class="text-3xl font-semibold text-center mb-4 text-gray-800" data-aos="flip-left">
                    {{ $hospital->name }}
                </h2> --}}

                <!-- Description -->
                <p class="text-lg text-gray-600 mb-6">
                    {{$hospital -> description}}
                </p>

                <!-- Location and Address -->
                <div class="flex justify-center items-center space-x-2 mb-4">
                    <i class="fas fa-map-marker-alt text-blue-500"></i>
                    <span class="text-gray-700"> {{$hospital -> city}}</span>
                </div>
                <div class="flex justify-center items-center space-x-2 mb-4">
                    <i class="fas fa-address-card text-blue-500"></i>
                    <span class="text-gray-700"> {{$hospital -> address}}</span>
                </div>

                <!-- MD/CEO -->
                <div class="flex justify-center items-center space-x-2 mb-4">
                    <i class="fas fa-user-tie text-blue-500"></i>
                    <span class="text-gray-700 font-medium">MD/CEO: DR {{$hospital -> director}}</span>
                </div>

                <!-- Type -->
                <div class="flex justify-center items-center space-x-2 mb-4">
                    <i class="fas fa-tags text-blue-500"></i>
                    <span class="text-gray-700 font-medium">Type: {{$hospital -> type}}</span>
                </div>

                <!-- Proprietor -->
                <div class="flex justify-center items-center space-x-2">
                    <i class="fas fa-user-circle text-blue-500"></i>
                    <span class="text-gray-700 font-medium">Proprietor: {{$hospital -> proprietor}}</span>
                </div>
                <div class="flex justify-between mt-10">
                    <button class="teal">Edit</button>
                    <button class="red">Delete</button>
                </div>
            </div>
        </div>

    </x-layout>
</body>
</html>
