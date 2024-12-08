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
        <div class="col-span-2 text-black  ">
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

        </div>
    {{$slot}}
<footer>
  lol
</footer>
     <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const hamburgerIcon = document.getElementById('hamburger-icon');
        const closeIcon = document.getElementById('close-icon');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            hamburgerIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });
    </script>
</body>
</html>
