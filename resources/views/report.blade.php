<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white bg-gray-900 leading-tight">
            {{ __('Report') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-900">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">

            <livewire:post-table />

        </div>
    </div>
</x-app-layout>
