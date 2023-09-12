<div class="border-t-2 border-t-tred">
    <div class="flex flex-wrap justify-between mt-5">
        @foreach($this->formats as $format)
            <x-menu-item
                wire:click="selectFormat({{$format->value}})"
                class="{{$format->value === $activeFormat ? 'text-tred border-b hover:border-b-gray' : ''}}"
            >
                {{$format->name}}
            </x-menu-item>
        @endforeach
    </div>

    <div class="grid grid-cols-6 gap-4 mt-10">
        <div class="col-span-4">
            <div class="w-full">
                <p class="text-xl text-center center text-black mb-5">
                    Set your QR <b>Content</b>
                </p>

                <livewire:qr-code-form :formatType="$activeFormat" :key="$activeFormat"/>
            </div>
        </div>
        <div class="col-span-2">
            <div class="">
                <livewire:qr-code-component />
            </div>
        </div>
    </div>

    <div class="grid grid-cols-2 gap-4">
        <div class="p-10">
            <label for="format">
                Format <span class="text-tred">*</span>
            </label>
            <x-inputs.select wire:model.lazy="activeFormat" id="format">
                @foreach($this->formats as $format)
                    <option value="{{$format->value}}"> {{$format->name}} </option>
                @endforeach
            </x-inputs.select>
        </div>
        <div class="p-10">

        </div>
    </div>

    <div class="mt-5">
        <p class="text-xl text-center center text-black mt-0">
            <b>Customize</b> your QR
        </p>

        <x-options />
    </div>
</div>
