<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2  border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest bg-fuchsia-900 active:bg-fuchsia-900 focus:outline-none focus:border-fuchsia-900 focus:ring focus:ring-fuchsia-300 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>


