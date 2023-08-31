<div>
    <h6 class="text-xl mb-5 font-bold"> Geo Format </h6>

    <span> Lat </span>
    <x-inputs.text wire:model="form.lat"/>
    <x-error :for="'form.lat'"/>

    <span> Lng </span>
    <x-inputs.text wire:model="form.lng"/>
    <x-error :for="'form.lng'"/>

    <span> Altitude </span>
    <x-inputs.text wire:model="form.altitude"/>
    <x-error :for="'form.altitude'"/>

    <x-inputs.success-button wire:click="create" class="mt-2">
        Create QR Code
    </x-inputs.success-button>
</div>
