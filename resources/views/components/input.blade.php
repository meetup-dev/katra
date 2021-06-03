@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-gray-100 rounded-full dark:text-white py-3 px-6 dark:bg-theme-600 border-theme-600 focus:outline-none focus:none']) !!}>
