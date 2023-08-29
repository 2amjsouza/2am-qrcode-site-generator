<button {!! $attributes->merge(['class' => 'bg-red-500 text-white active:bg-red-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg hover:bg-red-700 outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150']) !!} type="button">
    {{ $slot }}
</button>
