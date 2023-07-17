<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Dados') }}
        </h2>
    </x-slot>

    <div class="pb-12 py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if ($message = Session::get('success'))
                <div class="bg-green-100 border-t-4 border-green-500 rounded-b text-green-900 px-4 py-3 shadow-md mb-3" role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ $message }}</p>
                        </div>
                    </div>
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                <form action="{{ route('about.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="number" class="block mb-2 text-sm font-bold text-gray-700">Número do whatsapp</label>
                        <input type="text"
                               class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                               name="number"
                               value="{{ $about->number }}"
                               placeholder="Insira um número de whatsapp válido"
                        >
                        @error('number') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block mb-2 text-sm font-bold text-gray-700">Email</label>
                        <input type="email"
                               class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                               name="email"
                               value="{{ $about->email }}"
                               placeholder="Insira um email válido"
                        >
                        @error('email') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block mb-2 text-sm font-bold text-gray-700">Sobre nós</label>
                        <textarea
                               class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                               name="description"
                               placeholder="Insira um texto"
                        >{{ $about->description }}</textarea>
                        @error('description') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-4">
                        <label for="image" class="block mb-2 text-sm font-bold text-gray-700">
                            Imagem
                            @isset($about->image)<a target="_blank" href="/storage/{{ $about->image }}" class="text-blue-500 text-sm font-normal underline">Ver imagem atual</a>@endisset
                        </label>

                        <input type="file"
                               accept="image/*"
                               class="w-full leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                               name="image"
                               id="image"
                        >
                        @error('image') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div>
                        <button
                            type="submit"
                            class="inline-flex items-center px-4 py-2 my-3 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25"
                        >
                            Salvar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            $('input[name="number"]').mask('(00) 00000-0000');
        </script>
    @endpush
</x-app-layout>
