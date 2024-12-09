<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
        @vite('resources/css/app.css')
    <title>Signup</title>
</head>
<body>
    <x-layout>
      <div class="bg-[#f7e8d1] m-auto my-10 w-[80%] max-w-[800px] p-10 rounded-3xl  grid lg:grid-cols-2 gap-10">
            <div class="col-span-1">
                <h2 class="text-4xl mb-10" data-aos="fade-down">Create account</h2>
                <p class="text-sm" data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta error reprehenderit, doloremque ducimus in iusto mollitia voluptates maiores qui ipsa libero! Voluptas ea necessitatibus delectus ratione rerum soluta, earum doloribus.</p>
            </div>
            <form action="" data-aos="zoom-in">
            <label for="name" class="text-[#888b95] text-sm m-2 ">
                First Name
            </label>
            <input type="text" class="input" name="firstname" id='firstname' value="{{ old('firstname') }}" required placeholder="First Name">
            <label for="name" class="text-[#888b95] text-sm m-2 ">
                Last Name
            </label>
            <input type="text" class="input" name="lastname" id='lastname' value="{{ old('lastname') }}" required placeholder="Last Name">
            <label for="name" class="text-[#888b95] text-sm m-2 ">
                Username
            </label>
            <input type="text" class="input" name="username" id='username' value="{{ old('username') }}" required placeholder="userame">
            <label for="name" class="text-[#888b95] text-sm m-2 ">
                Email Address
            </label>
            <input type="email" class="input" name="email" id='email' value="{{ old('email') }}" required placeholder="Enter Email address">
            <label for="name" class="text-[#888b95] text-sm m-2 ">
                Enter Password
            </label>
            <input type="password" class="input" name="password" id='password' value="{{ old('password') }}" required placeholder="Enter Password">
             <label for="name" class="text-[#888b95] text-sm m-2 ">
                Confirm Password
            </label>
            <input type="password" class="input" name="confirm" id='confirm' value="{{ old('confirm') }}" required placeholder="Confirm Password">
            <button class="teal">Create Account</button>
        </form>
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

