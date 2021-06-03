@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm pb-3 text-gray-700 dark:text-white']) }}>
    {{ $value ?? $slot }}
</label>
