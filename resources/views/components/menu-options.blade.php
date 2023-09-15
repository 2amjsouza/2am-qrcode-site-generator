<div class="flex flex-wrap justify-between mt-5 options-menu">
    @foreach($this->formats as $format)
    <x-menu-item
        wire:click="selectFormat({{$format->value}})"
        class="{{$format->value === $activeFormat ? 'text-tred border-b hover:border-b-gray' : ''}}"
    >
        {{$format->name}}
    </x-menu-item>
    @endforeach
</div>
