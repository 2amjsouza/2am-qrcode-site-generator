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
            <select wire:model="align" class="px-3 py-3 placeholder-slate-300 text-slate-600 relative bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full my-3">
                <option value="{{\Da\QrCode\Contracts\LabelInterface::ALIGN_CENTER}}"> Center </option>
                <option value="{{\Da\QrCode\Contracts\LabelInterface::ALIGN_LEFT}}"> Left </option>
                <option value="{{\Da\QrCode\Contracts\LabelInterface::ALIGN_RIGHT}}"> Right </option>
            </select>
        </div>
    </div>
    <x-inputs.success-button type="button" wire:click.prevent="applyLabel">
        Apply
    </x-inputs.success-button>
</div>
