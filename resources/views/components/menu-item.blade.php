<div {{ $attributes->merge([
        'class' => 'text-gray-500/50 py-4 px-2
            cursor-pointer hover:text-tred hover:border-b hover:border-b-gray
            transition duration-100'
    ]) }}
    {{ $attributes->whereStartsWith('wire:click') }}
    >
    {{ $slot }}
</div>
