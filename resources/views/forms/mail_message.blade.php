<div>
    <h6 class="text-xl mb-5 font-bold"> Mail Message Format </h6>

    <span> Email </span>
    <x-inputs.text wire:model="form.email"/>
    <x-error :for="'form.email'"/>

    <span> Subject </span>
    <x-inputs.text wire:model="form.subject"/>
    <x-error :for="'form.subject'"/>

    <span> Body </span>
    <x-inputs.text wire:model="form.body"/>
    <x-error :for="'form.body'"/>

    <x-inputs.success-button wire:click="create" class="mt-2">
        Create QR Code
    </x-inputs.success-button>
</div>
