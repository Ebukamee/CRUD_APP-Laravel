<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$signboard->name}}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

</head>
<body>
    <x-layout>
        <div class="bg-[#e5f1fe] m-10 pt-10 pb-10 px-8 rounded-3xl text-center h-fit bg-cover bg-no-repeat shadow-lg flex gap-10 justify-between flex-col lg:flex-row" style="background-image: url('/wws.svg');">
            <!-- Profile Image -->
            <img src="https://th.bing.com/th/id/OIP.r6l_zGBvXUqBYLbw55ruGwHaFj?rs=1&pid=ImgDetMain" alt="Profile Image" class="w-[80%] lg:w-[50%] m-auto rounded-md mb-5 shadow-md">

            <div class="shadow-lg lg:w-[50%] p-5 rounded-xl">
                <h2 class="text-3xl font-semibold text-center mb-4 text-gray-800" data-aos="flip-left">
                    {{ $signboard->name }}
                </h2>

                <!-- Description -->
                <p class="text-lg text-gray-600 mb-6">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore placeat odit voluptates nostrum minus velit eligendi ullam? Quo, ipsum itaque quasi doloribus aperiam aliquam perferendis iusto, earum repellendus mollitia unde.
                </p>

                <!-- Location and Address -->
                    <div class="flex justify-center items-center space-x-2 mb-4">
                        <i class="fas fa-map-marker-alt text-blue-500"></i>
                        <span class="text-gray-700">Enugu,Nigeria</span>
                    </div>
                    <div class="flex justify-center items-center space-x-2 mb-4">
                        <i class="fas fa-address-card text-blue-500"></i>
                        <span class="text-gray-700">9/15 Adelabu Street Uwani, Enugu</span>
                    </div>

                <!-- MD/CEO -->
                <div class="flex justify-center items-center space-x-2 mb-4">
                    <i class="fas fa-user-tie text-blue-500"></i>
                    <span class="text-gray-700 font-medium">MD/CEO: DR Ajah Solomon</span>
                </div>

                <!-- Type -->
                <div class="flex justify-center items-center space-x-2 mb-4">
                    <i class="fas fa-tags text-blue-500"></i>
                    <span class="text-gray-700 font-medium">Type: Teaching Hospital</span>
                </div>

                <!-- Proprietor -->
                <div class="flex justify-center items-center space-x-2">
                    <i class="fas fa-user-circle text-blue-500"></i>
                    <span class="text-gray-700 font-medium">Proprietor: State Government</span>
                </div>
            </div>
        </div>

    </x-layout>
</body>
</html>
