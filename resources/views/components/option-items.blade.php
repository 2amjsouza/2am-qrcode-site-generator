<div>
<!--<div class="grid grid-cols-2 mt-5">-->
    <!--<x-menu-item wire:click="toggleOption({{\App\Enum\OptionsEnum::Colors->value}})" class="flex flex-row {{$activeOption == \App\Enum\OptionsEnum::Colors->value ? 'text-yellow-300 bg-gray-800' : ''}}">
        <x-icons.colors />
        <div class="ml-1">
            Colors
        </div>
    </x-menu-item>
    <x-menu-item wire:click="toggleOption({{\App\Enum\OptionsEnum::Margin->value}})" class="{{$activeOption == \App\Enum\OptionsEnum::Margin->value ? 'text-yellow-300 bg-gray-800' : ''}}">
        <x-icons.screen />
        <div class="ml-1">
            Margin
        </div>
    </x-menu-item>
    <x-menu-item wire:click="toggleOption({{\App\Enum\OptionsEnum::Label->value}})" class="flex flex-row {{$activeOption == \App\Enum\OptionsEnum::Label->value ? 'text-yellow-300 bg-gray-800' : ''}}">
        <x-icons.label />
        <div class="ml-1">
            Label
        </div>
    </x-menu-item>
    <x-menu-item wire:click="toggleOption({{\App\Enum\OptionsEnum::Logo->value}})" class="flex flex-row {{$activeOption == \App\Enum\OptionsEnum::Logo->value ? 'text-yellow-300 bg-gray-800' : ''}}">
        <x-icons.image />
        <div class="ml-1">
            Logo
        </div>
    </x-menu-item>-->
        <select wire:model.lazy="activeOption" class="px-3 placeholder-slate-300 text-slate-600
                        relative bg-white bg-white rounded text-sm border-0 shadow
                        outline-none focus:outline-none focus:ring w-full h-8 mt-2">
            <option value="{{null}}"> Select </option>
            @foreach(\App\Enum\OptionsEnum::cases() as $option)
                <option value="{{$option->value}}"> {{$option->name}} </option>
            @endforeach
        </select>
</div>
