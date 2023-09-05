<button {!! $attributes->merge([
                'class' => 'bg-tred rounded text-white active:bg-red-600
                font-bold text-sm px-6 py-3 hover:shadow-2xl
                hover:shadow-tred hover:shadow-inner mr-1
                mb-1 ease-linear transition-all duration-150
                h-8 w-full border-2 border-white'
            ]) !!}
        type="button"
>
    {{ $slot }}
</button>
