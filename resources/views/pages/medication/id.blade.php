<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$drug->name}}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    
</head>
<body>
    <x-layout>
        <h2 class="text-3xl font-semibold text-center mb-4 text-gray-800">
            {{ $drug->name }}
        </h2>

        <div class="bg-[#e5f1fe] m-10 pt-10 pb-10 px-8 rounded-3xl h-fit bg-cover bg-no-repeat shadow-lg flex gap-10 justify-between flex-col lg:flex-row" style="background-image: url('/wws.svg');">
            <div class="w-full lg:w-1/2">
                <img src="{{ asset('uploads/images/' . $drug->image) }}" 
                     alt="{{ $drug->name }}" 
                     class="rounded-md shadow-md object-cover w-full h-full">
            </div>
            <div class="shadow-lg lg:w-[50%] p-5 rounded-xl">
                <h3 class="text-xl font-semibold text-gray-700 mb-4">Medication Details</h3>
                <p class="mb-5  text-gray-600">Added by Chukwuebuka Nwokike</p>
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
                    <button class="teal">Edit</button>
                    <button class="red">Delete</button>
                </div>
            </div>
        </div>
    </x-layout>
</body>
</html>
