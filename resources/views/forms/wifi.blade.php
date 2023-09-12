<div>
    <div>
        <label for="auth">
            Authentication <span class="text-tred">*</span>
        </label>
        <x-inputs.select wire:model.lazy="form.authentication" id="auth">
            <option value="">Select</option>
            <option value="web">WEP</option>
            <option value="wpa2">WPA2</option>
        </x-inputs.select>
        <x-error :for="'form.authentication'"/>
    </div>

    <div class="mt-3">
        <label for="network">
            Network <span class="text-tred">*</span>
        </label>
        <x-inputs.text wire:model.lazy="form.ssid" id="network"/>
        <x-error :for="'form.ssid'"/>
    </div>

    <div>
        <label for="password">
            Password <span class="text-tred">*</span>
        </label>
        <x-inputs.text wire:model.lazy="form.password" id="password"/>
        <x-error :for="'form.password'"/>
    </div>
</div>
