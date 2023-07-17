@props([
    'title',
    'description',
    'price',
    'pricePer',
])

<div class="flex flex-col px-6 pt-6 pb-3 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
    <h3 class="mb-4 text-2xl font-semibold">{{ $title }}</h3>
    <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">{{ $description }}</p>
    <div class="flex justify-center items-baseline my-8">
        <span class="mr-2 text-5xl font-extrabold">{{ $price }}</span>
        <span class="text-gray-500 dark:text-gray-400">/{{ $pricePer }}</span>
    </div>

    <ul role="list" class="mb-8 space-y-2 text-left">
       {{ $slot }}
    </ul>

</div>
