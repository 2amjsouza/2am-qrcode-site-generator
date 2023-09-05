<div>
    <h6 class="text-xl mb-5 font-bold"> Wifi Format </h6>
    <div>
        <span> Authentication </span>
        <select wire:model="form.authentication" class="px-3 placeholder-slate-300 text-slate-600
            relative bg-white bg-white rounded text-sm border-0 shadow
            outline-none focus:outline-none focus:ring w-full h-8 mt-2">
            <option value="">Select</option>
            <option value="web">WEP</option>
            <option value="wpa2">WPA2</option>
        </select>
        <x-error :for="'form.authentication'"/>
    </div>

    <div>
        <span> Network </span>
        <x-inputs.text wire:model="form.ssid"/>
        <x-error :for="'form.ssid'"/>
    </div>

    <div>
        <span> Password </span>
        <x-inputs.text wire:model="form.password"/>
        <x-error :for="'form.password'"/>
    </div>

    <x-inputs.success-button wire:click="create" class="mt-2">
        Create QR Code
    </x-inputs.success-button>
</div>
