<div>
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label for="firstName">
                First Name <span class="text-tred">*</span>
            </label>
            <x-inputs.text wire:model.lazy="form.firstName" id="firstName"/>
            <x-error :for="'form.firstName'"/>
        </div>

        <div>
            <label for="lastName">
                Last Name <span class="text-tred">*</span>
            </label>
            <x-inputs.text wire:model.lazy="form.lastName" id="lastName"/>
            <x-error :for="'form.lastName'"/>
        </div>

        <div>
            <label for="sound"> Sound </label>
            <x-inputs.text wire:model.lazy="form.sound" id="sound"/>
            <x-error :for="'form.sound'"/>
        </div>

        <div>
            <label for="phone"> Phone </label>
            <x-inputs.text wire:model.lazy="form.phone" id="phone"/>
            <x-error :for="'form.phone'"/>
        </div>

        <div>
            <label for="video"> Video Phone </label>
            <x-inputs.text wire:model.lazy="form.videoPhone" id="video"/>
            <x-error :for="'form.videoPhone'"/>
        </div>

        <div>
            <label for="email"> Email </label>
            <x-inputs.text wire:model.lazy="form.email" id="email"/>
            <x-error :for="'form.email'"/>
        </div>

        <div>
            <label for="note"> Note </label>
            <x-inputs.text wire:model.lazy="form.note" id="note"/>
            <x-error :for="'form.note'"/>
        </div>

        <div>
            <label for="address"> Address </label>
            <x-inputs.text wire:model.lazy="form.address" id="address"/>
            <x-error :for="'form.address'"/>
        </div>

        <div>
            <label for="url"> URL </label>
            <x-inputs.text wire:model.lazy="form.url" id="url"/>
            <x-error :for="'form.url'"/>
        </div>

        <div>
            <label for="nick"> Nick Name </label>
            <x-inputs.text wire:model.lazy="form.nickName" id="nick"/>
            <x-error :for="'form.nickName'"/>
        </div>
    </div>
</div>
