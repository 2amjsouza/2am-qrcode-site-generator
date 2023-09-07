<button {!! $attributes->merge([
                'class' => 'btn btn--default btn--red'
            ]) !!}
        type="button"
>
    {{ $slot }}
</button>
