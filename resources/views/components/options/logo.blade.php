<div class="mt-5">
    <form wire:submit.prevent="applyLogo">
        Logo
        <x-inputs.upload type="input" type="file" wire:model="file" />
        <x-error :for="'file'"/>

        <x-inputs.success-button type="submit">
            Apply
        </x-inputs.success-button>
    </form>
</div>
