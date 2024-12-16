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
        <div class="bg-[#e5f1fe] m-10 pt-10 pb-10 px-8 rounded-3xl  h-fit bg-cover bg-no-repeat shadow-lg flex gap-10 justify-between flex-col lg:flex-row" style="background-image: url('/wws.svg');">
            <!-- Profile Image -->
            <div class="w-full lg:w-1/2">
                <img src="{{ asset('uploads/images/' . $hospital->image) }}" 
                     alt="{{ $hospital->name }}" 
                     class="rounded-md shadow-md object-cover w-full h-full">
            </div>
            <div class="shadow-lg lg:w-[50%] p-5 rounded-xl">
                <h2 class="text-3xl font-semibold  mb-4 text-gray-800" data-aos="flip-left">
                    {{ $hospital->name }}
                </h2>

                <!-- Description -->

                <p class="mb-5  text-gray-600">Added by Chukwuebuka Nwokike</p>
                <p class="text-lg text-gray-600 mb-6">
                    {{$hospital -> description}}
                </p>

                <!-- Location and Address -->
                <div class="flex  items-center space-x-2 mb-4">
                    <i class="fas fa-map-marker-alt text-blue-500"></i>
                    <span class="text-gray-700"> {{$hospital -> city}}</span>
                </div>
                <div class="flex  items-center space-x-2 mb-4">
                    <i class="fas fa-address-card text-blue-500"></i>
                    <span class="text-gray-700"> {{$hospital -> address}}</span>
                </div>

                <!-- MD/CEO -->
                <div class="flex  items-center space-x-2 mb-4">
                    <i class="fas fa-user-tie text-blue-500"></i>
                    <span class="text-gray-700 font-medium">MD/CEO: DR {{$hospital -> director}}</span>
                </div>

                <!-- Type -->
                <div class="flex  items-center space-x-2 mb-4">
                    <i class="fas fa-tags text-blue-500"></i>
                    <span class="text-gray-700 font-medium">Type: {{$hospital -> type}}</span>
                </div>

                <!-- Proprietor -->
                <div class="flex  items-center space-x-2">
                    <i class="fas fa-user-circle text-blue-500"></i>
                    <span class="text-gray-700 font-medium">Proprietor: {{$hospital -> proprietor}}</span>
                </div>
                <div class="flex justify-between mt-10">
                    <button class="teal">Edit</button>
                    <button class="rounded-3xl p-2 border border-[2px] border-[#46e0d3] px-8 lg:mx-5 hover m-10 bg-white"><a href="{{$hospital -> url}}" class="p-0" target="_blank" >View Map</a></button>
                    
                </div>
                <div class="m-auto w-fit"><button class="red">Delete</button></div>
                
            </div>
        </div>

    </x-layout>
</body>
</html>
