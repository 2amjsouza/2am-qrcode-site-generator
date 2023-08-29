<div>
    <h6 class="text-xl mb-5 font-bold"> Book Mark Format </h6>

    <span> Title </span>
    <x-inputs.text wire:model="form.title"/>
    <x-error :for="'form.title'"/>

    <span> URL </span>
    <x-inputs.text wire:model="form.url"/>
    <x-error :for="'form.url'"/>

    <x-inputs.success-button wire:click="create" class="mt-2">
        Create QR Code
    </x-inputs.success-button>
</div>
