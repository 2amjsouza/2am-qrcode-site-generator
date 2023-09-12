<div>
    <label for="email">
        Email <span class="text-tred">*</span>
    </label>
    <x-inputs.text wire:model.lazy="form.email" id="email"/>
    <x-error :for="'form.email'"/>
</div>
