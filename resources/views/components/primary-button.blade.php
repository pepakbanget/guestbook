<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gray-800 border-red-500 ring-2 ring-red-500 rounded-md font-bold text-xs text-gray-300 uppercase tracking-widest hover:bg-gray-700 hover:text-red-500 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
