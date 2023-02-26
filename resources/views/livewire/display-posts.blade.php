{{-- postcard start --}}
<div>
    @foreach ( $posts as $p )
    <div class="items-center bg-gray-900 ">
        <div
            class="max-w-xl mx-auto scale-100 p-6 rounded-xl bg-gray-800/50 bg-gradient-to-bl from-gray-700/50 via-transparent shadow-xl shadow-red-500/20 hover:bg-gradient-to-tr motion-safe:hover:scale-[1.03] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500 hover:origin-bottom hover:-rotate-12">
            <div class="relative flex items-center space-x-3 rounded-xl">
                <img class="flex-shrink-0 ml-4 h-12 w-16 rounded-xl shadow-md shadow-red-500 object-cover ring-2 ring-red-500"
                    src="image/profile.jpg">
                <div class="flex-1">
                    <p class="text-lg font-bold text-red-500">{{ $p->user['name' ]}}</p>
                    {{-- <p class="truncate text-sm text-gray-600">JABATAN</p> --}}
                    <p class="truncate text-sm italic text-gray-600">{{ $p->created_at->diffForHumans() }}</p>

                </div>
                @if ($p->user->is(auth()->user()))
                <div class="flex-2">
                    <div class="">
                        <x-dropdown placement="bottom-end">
                            <x-slot name="trigger">
                                <button
                                    class="flex items-center text-red-500 hover:bg-red-500 hover:text-gray-200 hover:rounded-xl">
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
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Edit') }}
                                </x-dropdown-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link as="a" :href="route('logout')"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                        {{ __('Delete') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </div>
                @endif
            </div>
            <div class="pt-6 pb-2 text-gray-500 selection:bg-red-500 selection:text-white font-semibold">{{
                Str::ucfirst($p->title)}}
            </div>

            <div class="pb-2 text-gray-500 selection:bg-red-500 selection:text-white font-semibold">{{ Str::ucfirst($p->body)
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
