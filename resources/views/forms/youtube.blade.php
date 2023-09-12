<div>
    <label for="videoId">
        Video ID <span class="text-tred">*</span>
    </label>
    <x-inputs.text wire:model.lazy="form.videoId" id="videoId"/>
    <x-error :for="'form.videoId'"/>
</div>
