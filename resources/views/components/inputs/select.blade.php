<div>
    <select {{$attributes->merge(['class' => 'px-3 placeholder-slate-300 text-slate-600
                        relative bg-white bg-white rounded text-sm border-0 shadow
                        outline-none focus:outline-none focus:ring w-full h-10 mt-2
                        focus:ring-1 focus:ring-red-500/75'
                        ])}}>
        {{$slot}}
    </select>
</div>
