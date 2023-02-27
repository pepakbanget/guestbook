{{-- postcard start --}}
<div>
    @foreach ( $posts as $p )
    <div class="items-center bg-gray-900">
        <div
            class="max-w-xl mx-auto scale-100 p-6 rounded-xl bg-gray-800/50 bg-gradient-to-bl from-gray-700/50 via-transparent shadow-xl shadow-red-500/20 hover:bg-gradient-to-tr motion-safe:hover:scale-[1.03] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
            <div class="relative flex items-center space-x-4 rounded-xl">
                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        class="w-7 h-7 stroke-red-500">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                    </svg>
                </div>
                <div class="flex-1">
                    <p class="text-lg font-bold text-red-500">{{ $p->user['name' ]}}</p>
                    {{-- <p class="truncate text-sm text-gray-600">JABATAN</p> --}}
                    <div class="flex items-center">
                        <p class="text-sm font-semibold mr-1 text-gray-500">{{ $p->created_at->diffForHumans() }}
                        </p>
                        @unless($p->created_at->eq($p->updated_at))
                        <p class="text-sm font-semibold italic text-gray-500">&middot; {{ __('edited') }}</p>
                        @endunless
                    </div>
                </div>
                @if ($p->user->is(auth()->user()))
                <div class="flex-2">
                    <div class="">
                        <x-dropdown placement="bottom-end">
                            <x-slot name="trigger">
                                <button
                                    class="flex items-center rounded-xl text-red-500 hover:bg-red-500 hover:text-gray-200">
                                    <div class="ml-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link class="cursor-pointer" href="edit/{{$p->id}}">
                                    {{ __('Edit') }}
                                </x-dropdown-link>


                                <x-dropdown-link class="cursor-pointer" wire:click="destroy({{ $p->id }})">
                                    {{ __('Delete') }}
                                </x-dropdown-link>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </div>
                @endif
            </div>
            <div class="pt-6 pb-2 text-gray-500 selection:bg-red-500 selection:text-white font-semibold">{{
                Str::ucfirst($p->title)}}
            </div>

            <div class="pb-2 text-gray-500 selection:bg-red-500 selection:text-white font-semibold">{{
                Str::ucfirst($p->body)
                }}</div>

            {{-- <div class="columns-1 gap-2 space-y-2">
                <img class="aspect-video object-cover rounded-xl ring-2 ring-red-400 cursor-pointer"
                    src="image/8c625a066898d791d3243cb7cddb3b02.png" onclick="window.open(this.src)">
            </div> --}}
        </div>
        <div class="max-w-xl h-12 mx-auto" />
    </div>
    @endforeach
    {{-- postcard start --}}
    @if ($posts->hasMorePages())
    <div class="max-w-xl h-16 mx-auto text-center">
        <button wire:click="loadMore"
            class="mb-5 p-4 font-bold text-red-500 ring-red-500 bg-gray-800/50 bg-gradient-to-bl from-gray-700/50 via-transparent shadow-xl shadow-red-500/20 rounded-2xl hover:bg-gradient-to-tr hover:origin-bottom hover:-rotate-12 hover:scale-[1.17] focus:origin-bottom focus:-rotate-12 transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">Load
            More ...</button>
    </div>

    @endif
</div>