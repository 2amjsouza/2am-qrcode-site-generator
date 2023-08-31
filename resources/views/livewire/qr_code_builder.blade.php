<div class="mt-3 bg-gray-900 p-8">
    <div class="grid grid-cols-5 gap-4">
        <div class="col-span-4">
            <div>
                <h1 class="text-3xl font-bold mt-0 mb-5 text-black-500">
                    Format
                </h1>
                <div class="grid grid-cols-7">
                    @foreach($this->formats as $format)
                        <x-menu-item class="{{$format->value == $activeFormat ? 'text-yellow-300 bg-gray-800' : ''}}" wire:click="selectFormat({{$format}})">
                            <div class="basis-1/4">
                                <x-icons.set icon="{{$format->value}}"/>
                            </div>
                            <div class="flex items-center ml-2">
                                {{ $format->name }}
                            </div>
                        </x-menu-item>
                    @endforeach
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="mt-1">
                    <h6 class="text-xl font-bold mt-3 mb-5 text-black-500">
                        Options
                    </h6>
                    <div class="mt-3">
                        <div class="grid grid-cols-4">
                            <x-menu-item wire:click="toggleOption({{\App\Enum\OptionsEnum::Colors->value}})" class="flex flex-row">
                                <div class="basis-1/4">
                                    <x-icons.colors />
                                </div>
                                <div class="flex">
                                    Colors
                                </div>
                            </x-menu-item>
                            <x-menu-item wire:click="toggleOption({{\App\Enum\OptionsEnum::Margin->value}})" class="flex flex-row">
                                <div class="basis-1/4">
                                    <x-icons.screen />
                                </div>
                                <div class="flex">
                                    Margin
                                </div>
                            </x-menu-item>
                            <x-menu-item wire:click="toggleOption({{\App\Enum\OptionsEnum::Label->value}})" class="flex flex-row">
                                <div class="basis-1/4">
                                    <x-icons.label />
                                </div>
                                <div class="flex">
                                    Label
                                </div>
                            </x-menu-item>
                            <x-menu-item wire:click="toggleOption({{\App\Enum\OptionsEnum::Logo->value}})" class="flex flex-row">
                                <div class="basis-1/4">
                                    <x-icons.image />
                                </div>
                                <div class="flex">
                                    Logo
                                </div>
                            </x-menu-item>
                        </div>

                        <x-options />
                    </div>
                </div>
                <x-box>
                    <livewire:qr-code-form :formatType="$activeFormat" :key="$activeFormat"/>
                </x-box>
            </div>
        </div>

        <div class="p-5">
            <livewire:qr-code-component />
        </div>
    </div>
</div>
