<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
        @vite('resources/css/app.css')
    <title>Login</title>
</head>
<body>
    <x-layout>
        <div class="bg-[#f7e8d1] m-auto my-10 w-[80%] max-w-[800px] p-10 rounded-3xl  grid lg:grid-cols-2 gap-10">
            <div class="col-span-1">
                <h2 class="text-4xl mb-10" data-aos="fade-down">Login to your account</h2>
                <p class="text-sm" data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta error reprehenderit, doloremque ducimus in iusto mollitia voluptates maiores qui ipsa libero! Voluptas ea necessitatibus delectus ratione rerum soluta, earum doloribus.</p>
            </div>
            <form action="" data-aos="zoom-in">
                <label for="name" class="text-[#888b95] text-sm m-2 ">
                    Email Address
                </label>
                <input type="email" class="input" name="email" id='email' value="{{ old('email') }}" required placeholder="Enter Email address">
                <label for="name" class="text-[#888b95] text-sm m-2 ">
                    Password
                </label>
                <input type="password" class="input" name="password" id='password' value="{{ old('password') }}" required placeholder="Enter Password">

                <div class="flex justify-between">
                    <div class="flex justify-between">
                        <input type="checkbox" name="Remember_me" id="Remember_me" class="mr-2">
                        <p class="text-sm text-[#888b95]">Remember Me</p>
                    </div>
                <a href="" class="text-sm text-[#888b95]"> Forgot Password?</a>
                </div>
                <button class="teal">Log In</button>
            </form>
        </div>

        <div class="bg-no-repeat bg-cover w-[100%] h-[500px]" style="background-image:url('/pink-bg.png');"></div>

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
