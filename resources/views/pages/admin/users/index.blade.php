@section('title', 'List Users')
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="flex items-center">
                        <span class="mr-auto">Halaman User</span>
                        <x-modal>
                            <x-slot name='trigger'>
                                <button
                                    class="px-4 py-2 font-semibold text-white transition-all delay-75 bg-green-400 rounded hover:bg-green-600"
                                    @click="openModal = true">
                                    Tambah User
                                </button>
                            </x-slot>
                            <x-slot name='title'>
                                tess
                            </x-slot>
                            <x-slot name='desc'>
                                desc
                            </x-slot>
                        </x-modal>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
