<div>
    <label for="title">
        Title <span class="text-tred">*</span>
    </label>
    <x-inputs.text wire:model.lazy="form.title" id="title"/>
    <x-error :for="'form.title'"/>

    <label for="url">
        URL <span class="text-tred">*</span>
    </label>
    <x-inputs.text wire:model.lazy="form.url" id="url"/>
    <x-error :for="'form.url'"/>
</div>
