<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalhes do serviço') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                <a href="{{ route('services.index') }}"
                   class="inline-flex items-center px-4 py-2 mb-4 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-green-600 border border-transparent rounded-md hover:bg-green-500 active:bg-green-700 focus:outline-none focus:border-green-700 focus:shadow-outline-gray disabled:opacity-25">
                    <- Voltar
                </a>
                <table class="w-full table-fixed border">
                    <tbody>
                        <tr class="border">
                            <td class="px-4 py-2 font-bold" colspan="1">Nome</td>
                            <td colspan="2">{{ $service->name }}</td>
                        </tr>
                        <tr class="border">
                            <td class="px-4 py-2 font-bold" colspan="1">Descrição</td>
                            <td colspan="2">{{ $service->description }}</td>
                        </tr>
                        <tr class="border">
                            <td class="px-4 py-2 font-bold" colspan="1">Mensagem para whatsapp</td>
                            <td colspan="2">{{ $service->message_text }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
