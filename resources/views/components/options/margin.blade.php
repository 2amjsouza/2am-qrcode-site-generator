<div class="mt-5">
    Margins
    <x-inputs.text type="int" wire:model="margins" />
    <x-error :for="'margins'"/>

    <x-inputs.success-button type="button" wire:click.prevent="applyMargin">
        Apply
    </x-inputs.success-button>
</div>
