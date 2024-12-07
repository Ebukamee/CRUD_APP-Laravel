<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>

    <nav class="grid grid-cols-6 gap-4 m-10 p-10 py-5 my-5 justify-between">
         <img src="/logo.png" alt="" class="w-20 col-span-1">
         <div class='flex  text-xl col-span-3 font-medium justify-between'>
            <p class='m-2'>Home</p>
            <p class='m-2'>Hospitals</p>
            <p class='m-2'>Medications</p>
            <p class='m-2'>Create</p>

</div>
<div class="col-span-2 text-black ">
<button class="rounded-3xl p-2 border border-[2px] border-[#46e0d3] px-10 mx-5">Log In</button>
   <button class="bg-[#46e0d3]  rounded-3xl p-2 px-10 border border-[#46e0d3] mx-5">Sign Up</button>
</div>
    </nav>

    {{$slot}}
</body>
</html>
