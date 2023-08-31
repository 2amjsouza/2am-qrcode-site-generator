<div>
    <h6 class="text-xl mb-5 font-bold"> VCard Format </h6>
    <div class="grid grid-cols-2 gap-4">
        <div>
            <span> Name </span>
            <x-inputs.text wire:model="form.name"/>
            <x-error :for="'form.name'"/>
        </div>

        <div>
            <span> Full Name </span>
            <x-inputs.text wire:model="form.fullName"/>
            <x-error :for="'form.fullName'"/>
        </div>

        <div>
            <span> Email </span>
            <x-inputs.text wire:model="form.email"/>
            <x-error :for="'form.email'"/>
        </div>

        <div>
            <span> Address </span>
            <x-inputs.text wire:model="form.address"/>
            <x-error :for="'form.address'"/>
        </div>
    </div>
    <x-inputs.success-button wire:click="create" class="mt-2">
        Create QR Code
    </x-inputs.success-button>
</div>
