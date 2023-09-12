<div>
    <lable for="summary">
        Summary <span class="text-tred">*</span>
    </lable>
    <x-inputs.text wire:model.lazy="form.summary" id="summary"/>
    <x-error :for="'form.summary'"/>

    <label for="start">
        Start <span class="text-tred">*</span>
    </label>
    <x-inputs.date-time :model="'form.startTimestamp'" id="start"/>
    <x-error :for="'form.startTimestamp'"/>

    <label for="end">
        End <span class="text-tred">*</span>
    </label>
    <x-inputs.date-time :model="'form.endTimestamp'" id="end"/>
    <x-error :for="'form.endTimestamp'"/>
</div>
