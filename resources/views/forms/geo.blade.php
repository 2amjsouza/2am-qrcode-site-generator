<div>
    <label for="lat">
        Latitude <span class="text-tred">*</span>
    </label>
    <x-inputs.text wire:model.lazy="form.lat" id="lat"/>
    <x-error :for="'form.lat'"/>

    <label for="lng">
        Longitude <span class="text-tred">*</span>
    </label>
    <x-inputs.text wire:model.lazy="form.lng" id="lng"/>
    <x-error :for="'form.lng'"/>

    <label for="altitude">
        Altitude <span class="text-tred">*</span>
    </label>
    <x-inputs.text wire:model.lazy="form.altitude" id="altitude"/>
    <x-error :for="'form.altitude'"/>
</div>
