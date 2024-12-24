{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
@vite('resources/css/app.css')
<body>
    <x-hero>
        <div class="mt-10">
            <h1 class="text-bold text-3xl text-center">Designed For the Future</h1>
            <div class="flex m-5 p-5 justify-between">
                <div class="m-10 p-2 p">
                    <div class="m-2 p-2">
                        <h2 class="text-xl text-700">Introducing The Best Editor</h2>
                        <p class="lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto repellendus quibusdam tenetur molestiae maxime autem et reprehenderit, illum facere quas sapiente placeat eligendi nostrum ea amet recusandae unde ut earum.</p>
                    </div>
                    <div class="m-2 p-2">
                        <h2 class="text-xl text-bold">Robust Content Management</h2>
                        <p class="lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto repellendus quibusdam tenetur molestiae maxime autem et reprehenderit, illum facere quas sapiente placeat eligendi nostrum ea amet recusandae unde ut earum.</p>
                    </div>
                </div>
                <img src="illustration-editor-desktop.svg" class="w-1/2" alt="">

            </div>
            <div class="b rounded-tr-3xl rounded-bl-3xl p-5 flex justify-between max-h-[400px]">
                <img src="illustration-phones.svg" alt="" class="h-full relative bottom-20">
                <div class="m-2 p-2">
                    <h2 class="text-2xl text-white my-5">
                        State of the Art Infratructure
                    </h2>
                    <p class="lg text-[hsl(240,2%,79%)]">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga nulla, aliquid tempore incidunt facere culpa maxime suscipit! Ipsum cum, quae iusto perspiciatis nostrum quidem est fugit autem unde corporis voluptatum.
                    </p>
                </div>
            </div>
            <div class="m mt-48  flex justify-between">
                <img src="illustration-laptop-desktop.svg" alt="" class="w-1/2 relative right-48 bottom-5">
                <div class="m-5 p-2 relative right-20 top-10">
                    <div class="m-2 p-2">
                        <h2 class="text-xl text-700 my-5">Free, open, simple</h2>
                        <p class="lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto repellendus quibusdam tenetur molestiae maxime autem et reprehenderit, illum facere quas sapiente placeat eligendi nostrum ea amet recusandae unde ut earum.</p>
                    </div>
                    <div class="m-2 p-2">
                        <h2 class="text-xl text-bold my-5">Powerful tooling</h2>
                        <p class="lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto repellendus quibusdam tenetur molestiae maxime autem et reprehenderit, illum facere quas sapiente placeat eligendi nostrum ea amet recusandae unde ut earum.</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="footer rounded-tr-[100px] p-10 px-20 flex justify-between">
            <div>
                <img src="logo.svg" alt="">
            </div>
            <div>
                <p class="text-600 mb-10 text-white">Product</p>
                <p class="text-[hsl(240,2%,79%)]">Overview</p>
                <p class="text-[hsl(240,2%,79%)]">Pricing</p>
                <p class="text-[hsl(240,2%,79%)]">Marketplace</p>
                <p class="text-[hsl(240,2%,79%)]">Features</p>
                <p class="text-[hsl(240,2%,79%)]">Integrations</p>
            </div>
            <div>
                <p class="text-bold mb-10 text-white">Company</p>
                <p class="text-[hsl(240,2%,79%)]">About</p>
                <p class="text-[hsl(240,2%,79%)]">Team</p>
                <p class="text-[hsl(240,2%,79%)]">Blog</p>
                <p class="text-[hsl(240,2%,79%)]">Careers</p>
            </div>
            <div>
                <p class="text-bold mb-10 text-white">Connect</p>
                <p class="text-[hsl(240,2%,79%)]">Contact</p>
                <p class="text-[hsl(240,2%,79%)]">Newsletter</p>
                <p class="text-[hsl(240,2%,79%)]">LinkedIn</p>
            </div>
        </div>
    </x-hero>
</body>
</html> --}}

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HealthRadar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
</head>

<body>

    <x-layout>
        <div class="bg-[#e5f1fe] m-5 mx-10 pt-10 rounded-3xl text-center h-fit bg-cover bg-no-repeat" style="background-image: url('background.png');">
            <h2 class="text-6xl font-semibold text-center" data-aos="flip-left">Everyone deserves quality healthcare.</h2>
            <p class="text-center text-xl m-5" data-aos="fade-up">With HealthRadar, View Healthcare centers around you and browse through various medications. You can also Join us to create a comprehensive list and bring quality healthcare closer to home</p>
            <button class="teal">Join Us</button>
            <div class="w-full h-fit grid lg:justify-items-end">
                <img src="man.png" alt="" class="max-w-[600px] w-[100%] mb-1" data-aos="zoom-in">
            </div>
        </div>
        <div class="m-10 p-10">
            <h2 class="text-6xl font-medium mb-10" data-aos="fade-up">Who we serve?</h2>
            <div class="lg:grid gap-4 lg:grid-cols-3">
                <p class="text-lg  col-span-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem, cum modi tempore vitae maxime expedita voluptate alias animi! Distinctio unde ipsam ut delectus dolorum. Velit incidunt repellendus dignissimos tenetur natus.</p>
                <button class="teal">See all our Services</button>
            </div>
            <div class="lg:grid lg:grid-cols-6 gap-4 ">
                <div class="bg-no-repeat bg-cover p-10 bg-[#e5f1fe] rounded-2xl lg:col-span-4 " style="background-image:url('wws.svg');"  data-aos="flip-right">
                    <div>
                        <img src="doctor.svg" alt="">
                    </div>
                    <h2 class="my-5 text-4xl font-semibold">Our Providers</h2>
                    <p class="text-xl w-[70%] mb-[100px]">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, sint ab. Temporibus nemo aspernatur officia odit fuga nihil explicabo sapiente voluptas, placeat molestiae dolores animi voluptatem impedit dignissimos quod quos?</p>
                    <button class="teal">Solutions</button>
                </div>
                <div class="lg:grid lg:grid-cols-3 gap-4 lg:col-span-2 hidden">
                    <div class="rounded-2xl border py-10 col-span-1" data-aos="zoom-out">
                        <img src="people.svg" alt="" class="m-auto block w-20 h-20">
                        <h2 class="text-2xl transform rotate-90 font-semibold mt-24">People</h2>
                    </div>
                    <div class="rounded-2xl border py-10 col-span-1"  data-aos="zoom-in">
                        <img src="s.svg" alt="" class="m-auto block w-20 h-20">
                        <h2 class="text-2xl transform rotate-90 font-semibold mt-24">Society</h2>
                    </div>
                    <div class="rounded-2xl border py-10 col-span-1"  data-aos="fade-down">
                        <img src="bs.svg" alt="" class="m-auto block w-20 h-20">
                        <h2 class="text-2xl transform rotate-90 font-semibold mt-24">Consultants</h2>
                    </div>
                </div>
                <div class="lg:hidden lg:mt-10">
                  <div class="rounded-2xl border p-5 flex align-center gap-10 mt-5" data-aos="zoom-out">
                        <img src="people.svg" alt="" class="">
                        <h2 class="text-2xl  font-semibold">People</h2>
                    </div>
                    <div class="rounded-2xl border  p-5 flex align-center gap-10 mt-5"  data-aos="zoom-in">
                        <img src="s.svg" alt="">
                        <h2 class="text-2xl  font-semibold">Society</h2>
                    </div>
                    <div class="rounded-2xl border p-5 flex align-center gap-10 mt-5"  data-aos="fade-down">
                        <img src="bs.svg" alt="" >
                        <h2 class="text-2xl  font-semibold">Consultants</h2>
                    </div>
                </div>
            </div>
        </div>
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
