<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    
</head>
<body>

    <nav class="lg:grid lg:grid-cols-6 gap-4 m-10 p-10 py-5 my-5 justify-between flex">
        <div>
          <img src="/logo.png" alt="" class="w-20 col-span-1">
          <h2 class="text-xl font-semibold logo mt-2">HealthRadar</h2>
        </div>
      
        <div class='lg:flex  text-xl col-span-3 font-medium justify-between hidden'>
            <p class='m-2'>Home</p>
            <p class='m-2'>Hospitals</p>
            <p class='m-2'>Medications</p>
            <p class='m-2'>Create +</p>

        </div>
        <div class="col-span-2 text-black hidden lg:block">
            <button class="rounded-3xl p-2 border border-[2px] border-[#46e0d3] px-10 lg:mx-5 hover">Log In</button>
            <button class="bg-[#46e0d3]  rounded-3xl p-2 px-10 border border-[#46e0d3] lg:mx-5 hover">Sign Up</button>
        </div>

        <button id="menu-toggle" class="text-gray-600 focus:outline-none lg:hidden">
                <svg id="hamburger-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
                <svg id="close-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 hidden">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        
    </nav>
<div id="mobile-menu" class="hidden bg-[#888b95]  lg:hidden p-10 text-white">
            <p class='m-2'>Home</p>
            <p class='m-2'>Hospitals</p>
            <p class='m-2'>Medications</p>
            <p class='m-2'>Create +</p>
        <div>
           <button class="rounded-3xl p-2 border border-[2px] border-[#46e0d3] px-10 lg:mx-5 hover">Log In</button>
            <button class="bg-[#46e0d3]  rounded-3xl p-2 px-10 border border-[#46e0d3] lg:mx-5 hover">Sign Up</button>
        </div>
        </div>
    {{$slot}}
<footer class="grid lg:grid-cols-7 p-10  bg-[#002265] gap-20">
  <div class="col-span-3">
      <div class="mb-20">
          <img src="/logo.png" alt="" class="w-20 col-span-1">
          <h2 class="text-xl font-semibold logo mt-2 text-white">HealthRadar</h2>
        </div>
        <div>
          <p class="text-lg text-white" id='copyright'></p>
        </div>
        <div class="flex justify-between">
          <p class="text-lg text-white" >Policy</p>
          <p class="text-lg text-white" >Privacy</p>
          <p class="text-lg text-white" >Notice of Privacy</p>
          <p class="text-lg text-white" >Terms of Service</p>
        </div>
  </div>
  <div class="col-span-2">
   <p class="text-lg text-white" >For Business</p>
   <hr class="mt-5">
   <p class="text-md text-white mb-2" >Lorem</p>
   <p class="text-md text-white mb-2" >Ipsum</p>
   <p class="text-md text-white mb-2" >Dolor sit amet</p>
   <p class="text-md text-white mb-2" >Dolor</p>

  </div>

  <div class="col-span-2">
   <p class="text-lg text-white" >About HealthRadar</p>
   <hr class="mt-5">
   <p class="text-md text-white mb-2" >Lorem</p>
   <p class="text-md text-white mb-2" >Ipsum</p>
   <p class="text-md text-white mb-2" >Dolor sit amet</p>
   <p class="text-md text-white mb-2" >Dolor</p>

  </div>
</footer>
     <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const hamburgerIcon = document.getElementById('hamburger-icon');
        const closeIcon = document.getElementById('close-icon');
        const currentYear = document.getElementById('copyright');
        currentYear.textContent = `©${new Date().getFullYear()} Codedev. All Rights Reserved.`;


        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            hamburgerIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });
    </script>
</body>
</html>
