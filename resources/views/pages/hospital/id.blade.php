<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$hospital->name}}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

</head>
<body>
@if(session()->has('success'))
    <div id="success-overlay" class="fixed top-5 left-1/2 transform -translate-x-1/2 bg-green-100 p-4 w-[80%] max-w-[800px] rounded-lg shadow-lg z-50">
        <p class="my-2 text-green-500">{{ session()->get('success') }}</p>
    </div>

    @endif
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

                <p class="mb-5  text-gray-600">Updated By {{$hospital['user-name'] }}</p>
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
                    <button class="teal"><a href="{{route('hospital.edit',$hospital->id)}}">Edit</a></button>
                    <button class="rounded-3xl p-2 border border-[2px] border-[#46e0d3] px-8 lg:mx-5 hover m-10 bg-white"><a href="{{$hospital -> url}}" class="p-0" target="_blank" >View Map</a></button>
                    
                </div>
                @if($user && $user->username == $hospital ->username)
                    <form action="{{route('hospital.destroy',$hospital ->id)}}" method="POST" class=" m-auto w-fit">
                    @csrf
                    @method('delete')
                       <button class="red">Delete</button>
                    </form>
                @endif
                
            </div>
        </div>
 <div class="flex m-10 justify-end gap-4">
            <a href="/hospital/{{$hospital->id -1}}" rel="prev" class="border border-[2px] p-2 rounded-lg border-black" aria-label="&amp;laquo; Previous">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
            </a>
            <a href="/hospital/{{$hospital->id +1}}" rel="next" class="border border-[2px] border-black p-2 rounded-lg" aria-label="Next &amp;raquo;">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
    </x-layout>
    <script>
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
