<div>
    <h6 class="text-xl mb-5 font-bold"> SMS Format </h6>

    <span> Phone </span>
    <x-inputs.text wire:model="form.phone"/>
    <x-error :for="'form.phone'"/>

    <x-inputs.success-button wire:click="create" class="mt-2">
        Create QR Code
    </x-inputs.success-button>
</div>
