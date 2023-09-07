<div>
    <h1 class="text-xl text-center center text-black mt-0"> Text Format </h1>

    <span> Text </span>
    <x-inputs.text wire:model="form.text"/>
    <x-error :for="'form.text'"/>

    <x-inputs.success-button wire:click="create" class="mt-3">
        Create QR Code
    </x-inputs.success-button>
</div>
