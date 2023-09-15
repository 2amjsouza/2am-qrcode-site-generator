<button {!! $attributes->merge([
                'class' => 'rounded-md bg-tred py-2 px-2 text-white font-bold text-xs shadow
                hover:bg-red-500 transition duration-150 focus:outline-none outline-none'
            ]) !!}
        type="button"
>
    {{ $slot }}
</button>
