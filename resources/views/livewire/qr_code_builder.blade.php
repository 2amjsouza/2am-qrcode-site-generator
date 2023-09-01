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
                    <div class="mt-3">
                        <div class="grid grid-cols-4">
                            <x-menu-item wire:click="toggleOption({{\App\Enum\OptionsEnum::Colors->value}})" class="flex flex-row {{$activeOption == \App\Enum\OptionsEnum::Colors->value ? 'text-yellow-300 bg-gray-800' : ''}}">
                                <div class="basis-1/4">
                                    <x-icons.colors />
                                </div>
                                <div class="flex">
                                    Colors
                                </div>
                            </x-menu-item>
                            <x-menu-item wire:click="toggleOption({{\App\Enum\OptionsEnum::Margin->value}})" class="flex flex-row {{$activeOption == \App\Enum\OptionsEnum::Margin->value ? 'text-yellow-300 bg-gray-800' : ''}}">
                                <div class="basis-1/4">
                                    <x-icons.screen />
                                </div>
                                <div class="flex">
                                    Margin
                                </div>
                            </x-menu-item>
                            <x-menu-item wire:click="toggleOption({{\App\Enum\OptionsEnum::Label->value}})" class="flex flex-row {{$activeOption == \App\Enum\OptionsEnum::Label->value ? 'text-yellow-300 bg-gray-800' : ''}}">
                                <div class="basis-1/4">
                                    <x-icons.label />
                                </div>
                                <div class="flex">
                                    Label
                                </div>
                            </x-menu-item>
                            <x-menu-item wire:click="toggleOption({{\App\Enum\OptionsEnum::Logo->value}})" class="flex flex-row {{$activeOption == \App\Enum\OptionsEnum::Logo->value ? 'text-yellow-300 bg-gray-800' : ''}}">
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

        <script>
            function app() {
                return {
                    isOpen: false,
                    colors: ['#2196F3', '#009688', '#9C27B0', '#FFEB3B', '#afbbc9', '#4CAF50', '#2d3748', '#f56565', '#ed64a6'],
                    colorSelected: '#2196F3',
                }
            }

            const pickr = Pickr.create({
                el: '.color-picker',
                theme: 'nano', // or 'monolith', or 'nano'

                swatches: [
                    'rgba(244, 67, 54, 1)',
                    'rgba(233, 30, 99, 0.95)',
                    'rgba(156, 39, 176, 0.9)',
                    'rgba(103, 58, 183, 0.85)',
                    'rgba(63, 81, 181, 0.8)',
                    'rgba(33, 150, 243, 0.75)',
                    'rgba(3, 169, 244, 0.7)',
                    'rgba(0, 188, 212, 0.7)',
                    'rgba(0, 150, 136, 0.75)',
                    'rgba(76, 175, 80, 0.8)',
                    'rgba(139, 195, 74, 0.85)',
                    'rgba(205, 220, 57, 0.9)',
                    'rgba(255, 235, 59, 0.95)',
                    'rgba(255, 193, 7, 1)'
                ],

                components: {

                    // Main components
                    preview: true,
                    opacity: true,
                    hue: true,

                    // Input / output Options
                    interaction: {
                        hex: true,
                        rgba: true,
                        hsla: true,
                        hsva: true,
                        cmyk: true,
                        input: true,
                        clear: true,
                        save: true
                    }
                }
            });
        </script>
    </div>
</div>
