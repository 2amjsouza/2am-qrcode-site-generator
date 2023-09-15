<div>
    <div class="flex flex-row items-center bg-gray-50 py-2 px-4 gap-4 rounded border border-gray cursor-pointer" x-on:click="setShowing('{{$option}}')">
        <x-dynamic-component :component="$icon"/>
        <span class="font-bold basis-11/12">
                {!! $title !!}
            </span>
        <div class="justify-end" x-show="showing !== '{{$option}}'">
            <x-icons.chev-down />
        </div>
        <div class="justify-end" x-show="showing === '{{$option}}'">
            <x-icons.chev-up />
        </div>
    </div>
    <div x-show="showing === '{{$option}}'" class="bg-white"  x-transition.duration.100ms>
        <div class="p-5">
            {{ $slot }}
        </div>
    </div>
</div>
