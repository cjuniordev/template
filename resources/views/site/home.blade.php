<x-site-layout>

    <x-site.section id="home">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
            {{ $banner->title }}
        </h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">
            {{ $banner->description }}
        </p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
            <a target="_blank" href="{{ $banner->whatsapp_link }}" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                {{ $banner->button_text }}
                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    </x-site.section>

    <x-site.section id="servicos">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
            Serviços
        </h2>
        <div class="space-y-8 lg:grid lg:grid-cols-2 sm:gap-6 xl:gap-10 lg:space-y-0">

            @foreach($services as $i => $service)
                <x-site.service
                    :title="$service->name"
                    img="{{ ($i == 0) ? 'https://adapti.info/assets/imagens/servicos/Servico_1.png' : 'https://adapti.info/assets/imagens/servicos/Servico_3.png' }}"
                    :description="$service->description"
                    :action="$service->whatsapp_link"
                />
            @endforeach

        </div>
    </x-site.section>

    <x-site.pricing id="precos" />

    <x-site.section id="sobre-nos">
        <div class="space-y-8 lg:grid lg:grid-cols-2 sm:gap-6 xl:gap-10 lg:space-y-0">
            <div class="">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                    Sobre nós
                </h2>
                <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-8 dark:text-gray-400">
                   {{ $about->description }}
                </p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                    <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                        Saiba mais
                    </a>
                </div>
            </div>
            <div class="flex items-start justify-center">
                <img class="pb-50" style="clip-path: circle(50% at 50% 60%);" src="/storage/{{ $about->image }}" alt="Foto time adapti">
            </div>
        </div>
    </x-site.section>

</x-site-layout>
