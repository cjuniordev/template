@props([
    'id' => '',
])

<section id="{{ $id }}" class="bg-white dark:bg-gray-900 min-h-screen flex items-center">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 min-h-full">
        {{ $slot }}
    </div>
</section>
