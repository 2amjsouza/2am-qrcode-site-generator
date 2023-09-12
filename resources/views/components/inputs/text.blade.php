<div class="mb-2 mt-2 mb-3 pt-0">
    <input type="text" {!! $attributes->merge([
            'class' => 'px-3 py-3 placeholder-slate-300 text-slate-600
            relative bg-white bg-white rounded text-sm border-0 shadow
            outline-none focus:outline-none focus:ring w-full h-10
            focus:ring-1 focus:ring-red-500/75',
            'placeholder' => '',
        ])
        !!}
        {{$attributes->whereDoesntStartWith('wire:model')}}
    />
</div>
