<div>
    <label for="phone">
        Phone <span class="text-tred">*</span>
    </label>
    <x-inputs.text wire:model.lazy="form.phone" id="phone"/>
    <x-error :for="'form.phone'"/>

    <label fpr="message">
        Message <span class="text-tred">*</span>
    </label>
    <x-inputs.text wire:model.lazy="form.msg" id="message"/>
    <x-error :for="'form.msg'"/>
</div>
