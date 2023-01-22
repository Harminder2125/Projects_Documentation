<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2  border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest  active:bg-fuchsia-900 focus:outline-none focus:border-pink-900 focus:ring focus:ring-pink-300 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
