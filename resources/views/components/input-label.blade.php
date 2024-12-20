@props(['value'])

<label {{ $attributes->merge(['class' => ' font-medium text-sm text-left pl-[5%] text-gray-700 mx-auto dark:text-gray-300']) }}>
    {{ $value ?? $slot }}
</label>
