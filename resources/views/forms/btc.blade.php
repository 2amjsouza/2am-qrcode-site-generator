<div>
    <h6 class="text-xl mb-5 font-bold"> Bitcoin Format </h6>

    <span> Address </span>
    <x-inputs.text wire:model="form.address"/>
    <x-error :for="'form.address'"/>

    <span> Amount </span>
    <x-inputs.text wire:model="form.amount"/>
    <x-error :for="'form.amount'"/>

    <span> Name </span>
    <x-inputs.text wire:model="form.name"/>
    <x-error :for="'form.name'"/>

    <x-inputs.success-button wire:click="create" class="mt-2">
        Create QR Code
    </x-inputs.success-button>
</div>
