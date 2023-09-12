<div>
    <label for="email">
        Email <span class="text-tred">*</span>
    </label>
    <x-inputs.text wire:model.lazy="form.email" id="email"/>
    <x-error :for="'form.email'"/>

    <label for="subject">
        Subject
    </label>
    <x-inputs.text wire:model.lazy="form.subject" id="subject"/>
    <x-error :for="'form.subject'"/>

    <label for="body">
        Body <span class="text-tred">*</span>
    </label>
    <x-inputs.text wire:model.lazy="form.body" id="body"/>
    <x-error :for="'form.body'"/>
</div>
