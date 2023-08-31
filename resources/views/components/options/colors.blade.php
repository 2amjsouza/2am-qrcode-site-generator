<div class="mt-5">
    Background
    <x-inputs.text wire:model="strBackground" />
    <x-error :for="'strBackground'"/>

    Foreground
    <x-inputs.text wire:model="strForeground" />
    <x-error :for="'strForeground'"/>

    <x-inputs.success-button type="button" wire:click.prevent="applyColors">
        Apply
    </x-inputs.success-button>
</div>
