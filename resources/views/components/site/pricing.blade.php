@props([
    'id' => '',
])

<section id="{{ $id }}" class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                Preços dos nossos serviços
            </h2>
            <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">
                Escolha o plano que melhor se adapta a sua necessidade e ao seu bolso.
            </p>
        </div>
        <div class="space-y-8 lg:grid lg:grid-cols-2 sm:gap-6 xl:gap-10 lg:space-y-0">

            <x-site.pricing-card
                title="Web Sites"
                description="Tenha alcance, visibilidade e credibilidade para o seu negócio fora das redes sociais."
                price="R$ 2000"
                price-per="em media"
            >
                <x-site.pricing-card-feature>
                    <span>Totalmente configurável</span>
                </x-site.pricing-card-feature>
                <x-site.pricing-card-feature>
                    <span>De acordo com a sua necessidade</span>
                </x-site.pricing-card-feature>
                <x-site.pricing-card-feature>
                    <span>Design personalizável</span>
                </x-site.pricing-card-feature>
                <x-site.pricing-card-feature>
                    <span>Tecnologia de ponta do mercado</span>
                </x-site.pricing-card-feature>
                <x-site.pricing-card-feature>
                    <span>Suporte: <span class="font-semibold">30 dias úteis</span></span>
                </x-site.pricing-card-feature>
            </x-site.pricing-card>

            <x-site.pricing-card
                title="Sistemas"
                description="Tenha um sistema para gerenciar ou automatizar o seu negócio."
                price="R$ 5000"
                price-per="básico"
            >
                <x-site.pricing-card-feature>
                    <span>Totalmente configurável</span>
                </x-site.pricing-card-feature>
                <x-site.pricing-card-feature>
                    <span>De acordo com a sua necessidade</span>
                </x-site.pricing-card-feature>
                <x-site.pricing-card-feature>
                    <span>Tecnologia de ponta do mercado</span>
                </x-site.pricing-card-feature>
                <x-site.pricing-card-feature>
                    <span>Gerenciamento de usuários</span>
                </x-site.pricing-card-feature>
                <x-site.pricing-card-feature>
                    <span>Geração de relatórios</span>
                </x-site.pricing-card-feature>
                <x-site.pricing-card-feature>
                    <span>Suporte: <span class="font-semibold">30 dias úteis</span></span>
                </x-site.pricing-card-feature>
            </x-site.pricing-card>

    </div>
</section>
