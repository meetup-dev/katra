<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-6 py-3 bg-gray-400 dark:bg-theme-800 border border-transparent rounded-full font-semibold text-xs text-white uppercase tracking-wide hover:bg-gray-200 dark:hover:bg-theme-600 active:bg-theme-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
