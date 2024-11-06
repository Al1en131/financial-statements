<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-10 text-center flex max-lg:bg-black max-lg:bg-opacity-30 justify-center w-full py-4 border border-white rounded-md font-semibold text-lg text-white uppercase tracking-widest hover:bg-white hover:bg-opacity-20 focus:bg-white focus:bg-opacity-20 active:bg-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
