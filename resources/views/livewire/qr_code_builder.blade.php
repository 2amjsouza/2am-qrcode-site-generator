<div class="mt-3 border-t-2 border-t-tred pt-5">
    <div class="grid grid-cols-5 gap-4">
        <div class="col-span-2">
            <div>
                <div class="space-y-8">
                    <h1 class="text-3xl text-center center font-bold mt-0">
                        Format
                    </h1>
                    <p class="text-center">
                        You can select a QR Code format to be created. Each format can interact directly with specific APPs.
                    </p>
                </div>

                <!--<div class="grid grid-cols-2 mt-5">-->
                    <select wire:model.lazy="activeFormat" class="px-3 placeholder-slate-300 text-slate-600
                        relative bg-white bg-white rounded text-sm border-0 shadow
                        outline-none focus:outline-none focus:ring w-full h-8 mt-2">
                        @foreach($this->formats as $format)
                            <option value="{{$format->value}}"> {{$format->name}} </option>
                        @endforeach
                    </select>
                <!--</div>-->
            </div>

            <!-- Options -->
            <div class="mt-5 spacing-y-8">
                <h1 class="text-xl text-center center font-bold mt-0">
                    Options
                </h1>

                <p class="text-center">
                    Besides the format, you can yet set up Colors, Margin, Label and upload a Logo to make your QR Code be unique!
                </p>

                <x-option-items :activeOption="$activeOption"/>

                <x-options />
            </div>
        </div>
        <x-box class="col-span-3 grid grid-cols-3 gap-4">
            <div class="col-span-2">
                <livewire:qr-code-form :formatType="$activeFormat" :key="$activeFormat"/>
            </div>
            <div class="p-2 pt-0">
                <livewire:qr-code-component />
            </div>
        </x-box>
    </div>
</div>
