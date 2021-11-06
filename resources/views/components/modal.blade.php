<!-- modal div -->
<div x-data="{ openModal: false }">

    <!-- Button (blue), duh! -->
    <div @click="openModal = true">
        {{ $trigger }}
    </div>

    <!-- Dialog (full screen) -->
    <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full"
        style="background-color: rgba(0,0,0,.5);" x-show.transition.duration.500ms="openModal"
        x-transition:enter="transition ease-out duration-200" x-transition:enter-start="transform opacity-0"
        x-transition:enter-end="transform opacity-100" x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100" x-transition:leave-end="transform opacity-0">

        <!-- A basic modal dialog with title, body and one button to close -->
        <div class="w-full h-auto p-4 mx-2 text-left bg-white rounded shadow-xl sm:max-w-xl md:p-6 lg:p-8 md:mx-0"
            @click.away="openModal = false">
            <div class="mt-3 sm:mt-0 sm:ml-4 sm:text-left">
                <h3 class="text-lg font-medium leading-6 text-center text-gray-900">
                    {{ $title }}
                </h3>

                <div class="mt-2">
                    {{ $content }}
                </div>
            </div>
        </div>

    </div>
</div>
</div>
