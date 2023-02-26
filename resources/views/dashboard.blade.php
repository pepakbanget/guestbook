<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <a href="#">
        <div class="fixed bottom-5 right-5">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                stroke="currentColor" class="p-2 w-14 h-14 text-red-500 rounded-2xl bg-gray-800/50 bg-gradient-to-t from-gray-700/50 via-transparent shadow-xl shadow-red-500/20 hover:bg-gradient-to-b animate-bounce duration-1000">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
            </svg>
        </div>
    </a>

    <div class="pt-12 pb-12">
        <div class="max-w-3xl mx-4 sm:mx-auto sm:px-6 lg:px-8">
            <livewire:display-posts />
        </div>
    </div>
</x-app-layout>
