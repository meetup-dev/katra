<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-200 dark:bg-theme-800">
    <div class="w-full sm:max-w-md mb-8 text-center text-2xl">
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 p-12 bg-white dark:bg-theme-700 overflow-hidden sm:rounded-3xl">
        {{ $slot }}
    </div>
</div>
