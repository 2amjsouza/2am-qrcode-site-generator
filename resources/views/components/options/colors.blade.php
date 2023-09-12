<div>
    <h1 class="text-black text-[18px] font-bold mb-3"> Colors </h1>
    <span>
        Loren ipsum dolor describe function
    </span>

    <div class="grid grid-cols-2 gap-10 mt-12">
        <div>
            <label for="foreground" class="label-option"> Line Color </label>
            <x-inputs.color-picker :model="'strForeground'" id="foreground"/>
            <x-error :for="'strForeground'"/>
        </div>
        <div>
            <label for="background" class="label-option"> Background Color </label>
            <x-inputs.color-picker :model="'strBackground'" id="background"/>
            <x-error :for="'strBackground'"/>
        </div>
    </div>
</div>
