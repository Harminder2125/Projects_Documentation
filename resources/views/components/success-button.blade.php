<button {{ $attributes->merge(['class' => 'inline-flex items-center justify-center px-4 py-4 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 active:bg-green-900 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
