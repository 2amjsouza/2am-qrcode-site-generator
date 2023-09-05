<div>
    <h6 class="text-xl pb-5 mt-0 pt-0 font-bold"> Text Format </h6>

    <span> Text </span>
    <x-inputs.text wire:model="form.text"/>
    <x-error :for="'form.text'"/>

    <x-inputs.success-button wire:click="create" class="mt-3">
        Create QR Code
    </x-inputs.success-button>
</div>
