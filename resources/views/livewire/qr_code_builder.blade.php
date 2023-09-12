<div class="border-t-2 border-t-tred">
    <h1 class="text-center text--weight-bold text-black text-xl mt-8">
        Select the <b>Format</b> of your QR
    </h1>

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
            <livewire:qr-code-form :formatType="$activeFormat" :key="$activeFormat"/>
        </div>
    </div>

    <div class="mt-5">
        <p class="text-xl text-center center text-black mt-0">
            <b>Customize</b> your QR
        </p>

        <x-options />
    </div>

    <div class="p-5 pt-0">
        <livewire:qr-code-component />
    </div>
</div>
