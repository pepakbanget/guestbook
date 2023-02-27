<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Edit Report') }}
        </h2>
    </x-slot>

    <div class="pt-6 pb-12">
        <div class="max-w-3xl mx-4 sm:mx-auto sm:px-6 lg:px-8">

            <div
                class="max-w-xl mx-auto scale-100 p-6 mb-10 rounded-2xl bg-gray-800/50 bg-gradient-to-bl from-gray-700/50 via-transparent shadow-xl shadow-red-500/20 hover:bg-gradient-to-tr motion-safe:hover:scale-[1.03] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">

                <form method="POST" action="/update/{{$post->id}}" class="mt-2 space-y-4">
                    @csrf
                    @method('PUT')
                    <div>
                        <x-text-input type="text" value="{{$post->title}}" name="title"
                            class="mt-1 block w-full bg-gray-700 font-semibold text-gray-200" required autofocus
                            placeholder="Input Identitas" />
                        <x-input-error class="mt-2" :messages="$errors->get('title')" />
                    </div>

                    <div>
                        <x-text-input type="text" value="{{$post->body}}" name="body"
                            class="mt-1 block w-full bg-gray-700 font-semibold text-gray-200" required
                            placeholder="Input Kepentingan" />
                        <x-input-error class="mt-2" :messages="$errors->get('body')" />
                    </div>

                    <div class="text-end">
                        <x-primary-button>{{ __('Update') }}</x-primary-button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>
