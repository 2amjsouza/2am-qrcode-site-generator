<div>
    <h1 class="text-black text-[18px] font-bold mb-3"> Colors </h1>
    <span class="text-gray-400">
        Define the colors for both QR Code lines and backgorund
    </span>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-10 mt-8">
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
