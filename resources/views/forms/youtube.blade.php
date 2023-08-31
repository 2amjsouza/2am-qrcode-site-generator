<div>
    <h6 class="text-xl mb-5 font-bold"> Youtube Format </h6>

    <span> Video ID </span>
    <x-inputs.text wire:model="form.videoId"/>
    <x-error :for="'form.videoId'"/>

    <x-inputs.success-button wire:click="create" class="mt-2">
        Create QR Code
    </x-inputs.success-button>
</div>
