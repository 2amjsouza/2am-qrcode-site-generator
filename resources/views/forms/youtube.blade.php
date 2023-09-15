<div>
    <label for="videoId">
        Video URL <span class="text-tred">*</span>
    </label>
    <x-inputs.text wire:model.lazy="form.videoId" id="videoId" placeholder="https://www.youtube.com/watch?v=..."/>
    <x-error :for="'form.videoId'"/>
</div>
