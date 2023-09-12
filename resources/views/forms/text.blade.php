<div>
    <lable for="text">
        Text <span class="text-tred">*</span>
    </lable>
    <x-inputs.text wire:model.lazy="form.text" id="text"/>
    <x-error :for="'form.text'"/>
</div>
