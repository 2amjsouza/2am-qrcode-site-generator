<div>
    <label for="address">
        Address <span class="text-tred">*</span>
    </label>
    <x-inputs.text wire:model.lazy="form.address" id="address"/>
    <x-error :for="'form.address'"/>

    <label for="amount">
        Amount <span class="text-tred">*</span>
    </label>
    <x-inputs.text wire:model.lazy="form.amount" id="amount"/>
    <x-error :for="'form.amount'"/>

    <label for="name">
        Name <span class="text-tred">*</span>
    </label>
    <x-inputs.text wire:model.lazy="form.name" id="name"/>
    <x-error :for="'form.name'"/>
</div>
