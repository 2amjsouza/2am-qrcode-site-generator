<div>
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label for="name">
                Name <span class="text-tred">*</span>
            </label>
            <x-inputs.text wire:model.lazy="form.name" id="name"/>
            <x-error :for="'form.name'"/>
        </div>

        <div>
            <label for="fullName"> Full Name </label>
            <x-inputs.text wire:model.lazy="form.fullName" id="fullName"/>
            <x-error :for="'form.fullName'"/>
        </div>

        <div>
            <label for="email"> Email </label>
            <x-inputs.text wire:model.lazy="form.email" id="email"/>
            <x-error :for="'form.email'"/>
        </div>

        <div>
            <label for="address"> Address </label>
            <x-inputs.text wire:model.lazy="form.address" id="address"/>
            <x-error :for="'form.address'"/>
        </div>
    </div>
</div>
