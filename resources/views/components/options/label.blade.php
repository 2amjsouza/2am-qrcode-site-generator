<div class="mt-5">
    Label
    <x-inputs.text wire:model="label" />
    <x-error :for="'label'"/>

    <div class="grid grid-cols-2 gap-4">
        <div>
            Size
            <x-inputs.text type="int" wire:model="size" />
            <x-error :for="'size'"/>
        </div>
        <div>
            Alignment
            <x-inputs.select wire:model="align">
                <option value="{{\Da\QrCode\Contracts\LabelInterface::ALIGN_CENTER}}""> Center </option>
                <option value="{{\Da\QrCode\Contracts\LabelInterface::ALIGN_LEFT}}"> Left </option>
                <option value="{{\Da\QrCode\Contracts\LabelInterface::ALIGN_RIGHT}}"> Right </option>
            </x-inputs.select>
            <x-error :for="'align'"/>
        </div>
    </div>

    <x-inputs.success-button type="button" wire:click.prevent="applyLabel">
        Apply
    </x-inputs.success-button>
</div>
