<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
@vite('resources/css/app.css')
<body>
    {{-- <form action="{{ route('store') }}" method='POST'>
    @csrf
        <input type="text" id='name' name='name' value="{{ old('name') }}" required>
        <input type="text" id='name' name='shape' value="{{ old('shape') }}" required>
        <input type="text" id='name' name='imagePath' value="{{ old('imagePath') }}" required>
        <input type="text" id='name' name='size' value="{{ old('size') }}" required>
        <input type="text" id='name' name='dojo_id' value="{{ old('dojo_id') }}" required>
        <button>Submit</button>

        @if($errors->any())
            <ul class="px-4 py-2 bg-red-100">
              @foreach($errors->all() as $error)
                <li class="my-2 text-red-500">
                  {{ $error }}
                </li>
              @endforeach
            </ul>
        @endif
    </form> --}}
<x-layout>
    <form action="" class="bg-[#efbbbb] m-auto my-10 w-[80%] max-w-[500px] p-5 rounded-3xl text-center">
      <input type="text" class="input">
    </form>
    </x-layout>
</body>
</html>
