<button {!! $attributes->merge(['class' => 'border border-white border-4 text-white active:bg-gray-200 hover:bg-white hover:text-black font-bold uppercase text-sm px-6 py-3 rounded-sm shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150']) !!} type="button">
    {{ $slot }}
</button>
