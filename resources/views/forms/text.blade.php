<div>
    <h6 class="text-xl mb-5 font-bold"> Text Format </h6>

    <span> Text </span>
    <x-inputs.text wire:model="form.text"/>
    <x-error :for="'form.text'"/>

    <x-inputs.success-button wire:click="create" class="mt-2">
        Create QR Code
    </x-inputs.success-button>
</div>
