<button {!! $attributes->merge(['class' => 'text-white text-center p-2 w-full my-3 border-2 border-rose-600 rounded hover:text-black hover:bg-white transition-1.5'
            ]) !!} type="button">
    {{ $slot }}
</button>
