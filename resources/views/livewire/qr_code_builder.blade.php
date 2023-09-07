<div class="border-t-2 border-t-tred">
    <div class="col-span-3 grid grid-cols-3 gap-4 mt-5">
        <div class="col-span-2">
            <div>
                <!--<div class="grid grid-cols-2 mt-5">-->
                <h1 class="text-3xl text-center center mt-0 text-black">
                    Format
                </h1>
                <p class="text-center">
                    You can select a QR Code format to be created. Each format can interact directly with specific APPs.
                </p>

                <x-inputs.select wire:model.lazy="activeFormat">
                    @foreach($this->formats as $format)
                        <option value="{{$format->value}}"> {{$format->name}} </option>
                    @endforeach
                </x-inputs.select>
            </div>

            <div class="mt-5">
                <h1 class="text-xl text-center center text-black mt-0">
                    Options
                </h1>

                <p class="text-center">
                    Besides the format, you can yet set up Colors, Margin, Label and upload a Logo to make your QR Code be unique!
                </p>

                <x-option-items :activeOption="$activeOption"/>

                <x-options />
            </div>

            <div class="mt-5">
                <livewire:qr-code-form :formatType="$activeFormat" :key="$activeFormat"/>
            </div>
        </div>
        <div class="p-5 pt-0">
            <livewire:qr-code-component />
        </div>
    </div>
</div>
