<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$drug->name}}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

</head>
<body>
    @if(session()->has('success'))
    <div id="success-overlay" class="fixed top-5 left-1/2 transform -translate-x-1/2 bg-green-100 p-4 w-[80%] max-w-[800px] rounded-lg shadow-lg z-50">
        <p class="my-2 text-green-500">{{ session()->get('success') }}</p>
    </div>

    @endif
    <x-layout>
        <h2 class="text-3xl font-semibold text-center mb-4 text-gray-800">
            {{ $drug->name }}
        </h2>

        <div class="bg-[#e5f1fe] m-10 pt-10 pb-10 px-8 rounded-3xl h-fit bg-cover bg-no-repeat shadow-lg flex gap-10 justify-between flex-col lg:flex-row" style="background-image: url('/wws.svg');">
            <div class="w-full lg:w-1/2">
                <img src="{{ asset('uploads/images/' . $drug->image) }}" alt="{{ $drug->name }}" class="rounded-md shadow-md object-cover w-full h-full">
            </div>
            <div class="shadow-lg lg:w-[50%] p-5 rounded-xl">
                <h3 class="text-xl font-semibold text-gray-700 mb-4">Medication Details</h3>
                <p class="mb-5  text-gray-600">Updated By {{$drug['user-name']}} </p>
                <table class="w-full border-collapse border font-semibold border-gray-200 mx-auto mt-5 max-w-[800px]">
                    <thead>
                    </thead>
                    <tbody>
                        <tr class="odd:bg-gray-100">
                            <th class="border 002265 p-4 text-left  text-gray-700">Name</th>
                            <td class="border border-gray-200 p-4 text-gray-600">{{ $drug->name }}</td>
                        </tr>
                        <tr class="odd:bg-gray-100 ">
                            <th class="border border-gray-200 p-4 text-left  text-gray-700">Type</th>
                            <td class="border border-gray-200 p-4 text-gray-600">{{ $drug->type }}</td>
                        </tr>
                        <tr class="odd:bg-gray-100">
                            <th class="border border-gray-200 p-4 text-left  text-gray-700">Active Ingredients</th>
                            <td class="border border-gray-200 p-4 text-gray-600">{{ $drug->active }}</td>
                        </tr>
                        <tr class="odd:bg-gray-100 ">
                            <th class="border border-gray-200 p-4 text-left  text-gray-700">Approved Use of Medication</th>
                            <td class="border border-gray-200 p-4 text-gray-600">{{ $drug->indication }}</td>
                        </tr>
                        <tr class="odd:bg-gray-100 ">
                            <th class="border border-gray-200 p-4 text-left font-medium text-gray-700">Manufacturer</th>
                            <td class="border border-gray-200 p-4 text-gray-600">{{ $drug->manufacturer }}</td>
                        </tr>
                        <tr class="odd:bg-gray-100">
                            <th class="border border-gray-200 p-4 text-left  text-gray-700">Side Effects</th>
                            <td class="border border-gray-200 p-4 text-gray-600">{{ $drug->side }}</td>
                        </tr>
                    </tbody>
                </table>
                <div class="flex justify-between mt-10">
                    <div><button class="teal"><a href="{{route('medication.edit',$drug->id)}}">Edit</a></button></div>
                    @if($user && $user->username==$drug->username)
                        
                    
                    <form action="{{route('medication.destroy',$drug ->id)}}" method="POST" class="w-fit">
                        @csrf
                        @method('delete')
                        <button class="red">Delete</button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
        <div class="flex m-10 justify-end gap-4">
            <a href="/medication/{{$drug->id -1}}" rel="prev" class="border border-[2px] p-2 rounded-lg border-black" aria-label="&amp;laquo; Previous">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
            </a>
            <a href="/medication/{{$drug->id +1}}" rel="next" class="border border-[2px] border-black p-2 rounded-lg" aria-label="Next &amp;raquo;">
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
