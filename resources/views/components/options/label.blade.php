<div>
    <h1 class="text-black text-[18px] font-bold mb-3"> Label </h1>
    <span>
        Loren ipsum dolor describe function
    </span>
    <x-inputs.text wire:model.lazy="label" :placeholder="'Label'" class="mt-3"/>
    <x-error :for="'label'"/>

    <div class="grid grid-cols-2 gap-4">
        <div>
            <label for="size" class="label-option"> Size </label>
            <x-inputs.text type="int" wire:model.lazy="size" />
            <x-error :for="'size'"/>
        </div>
        <div>
            <label for="align" class="label-option"> Alignment </label>
            <x-inputs.select wire:model.lazy="align">
                <option value="{{\Da\QrCode\Contracts\LabelInterface::ALIGN_CENTER}}"> Center </option>
                <option value="{{\Da\QrCode\Contracts\LabelInterface::ALIGN_LEFT}}"> Left </option>
                <option value="{{\Da\QrCode\Contracts\LabelInterface::ALIGN_RIGHT}}"> Right </option>
            </x-inputs.select>
            <x-error :for="'align'"/>
        </div>
    </div>
</div>
