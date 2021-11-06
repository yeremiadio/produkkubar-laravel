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
                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            <x-slot name='trigger'>
                                <button
                                    class="px-4 py-2 font-semibold text-white transition-all delay-75 bg-green-400 rounded hover:bg-green-600"
                                    @click="openModal = true">
                                    Tambah User
                                </button>
                            </x-slot>
                            <x-slot name='title'>
                                Tambah User
                            </x-slot>
                            <x-slot name='content'>
                                <form method="POST" action="{{ route('create-user') }}">
                                    @csrf
                                    <div class="mt-4">
                                        <x-label for="name" :value="__('Username')" />
                                        <x-input id="name" class="block w-full mt-1" type="text" name="name" required />
                                        @if ($errors->has('name'))
                                            <span class='text-red-600'>{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                    <div class="mt-4">
                                        <x-label for="email" :value="__('Email')" />
                                        <x-input id="email" class="block w-full mt-1" type="email" name="email"
                                            required />
                                        @if ($errors->has('email'))
                                            <span class='text-red-600'>{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="mt-4">
                                        <x-label for="password" :value="__('Password')" />
                                        <x-input id="password" class="block w-full mt-1" type="password" name="password"
                                            required autocomplete="current-password" />
                                        @if ($errors->has('password'))
                                            <span class='text-red-600'>{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                    <div class="mt-4">
                                        <x-label for="password_confirmation" :value="__('Confirmation Password')" />
                                        <x-input id="password_confirmation" class="block w-full mt-1" type="password"
                                            name="password_confirmation" required autocomplete="current-password" />
                                        @if ($errors->has('password_confirmation'))
                                            <span
                                                class='text-red-600'>{{ $errors->first('password_confirmation') }}</span>
                                        @endif
                                    </div>
                                    <div class="mt-4"><button
                                            class="px-4 py-2 font-semibold text-white transition-all delay-75 bg-green-400 rounded hover:bg-green-600"
                                            type="submit">
                                            Tambah
                                        </button></div>
                                </form>

                            </x-slot>
                        </x-modal>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
