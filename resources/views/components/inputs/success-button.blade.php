<button {!! $attributes->merge([
                'class' => 'rounded bg-tred py-3 px-5 text-white font-bold font-xs m-5 shadow
                hover:bg-red-500 transition duration-150'
            ]) !!}
        type="button"
>
    {{ $slot }}
</button>
