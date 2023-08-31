<div>
    <h6 class="text-xl mb-5 font-bold"> Mail To Format </h6>

    <span> Email </span>
    <x-inputs.text wire:model="form.email"/>
    <x-error :for="'form.email'"/>

    <x-inputs.success-button wire:click="create" class="mt-2">
        Create QR Code
    </x-inputs.success-button>
</div>
