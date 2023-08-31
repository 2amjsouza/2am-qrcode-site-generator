<div>
    <h6 class="text-xl mb-5 font-bold"> Me Card Format </h6>
    <div class="grid grid-cols-2 gap-4">
        <div>
            <span> First Name </span>
            <x-inputs.text wire:model="form.firstName"/>
            <x-error :for="'form.firstName'"/>
        </div>

        <div>
            <span> Last Name </span>
            <x-inputs.text wire:model="form.lastName"/>
            <x-error :for="'form.lastName'"/>
        </div>

        <div>
            <span> Sound </span>
            <x-inputs.text wire:model="form.sound"/>
            <x-error :for="'form.sound'"/>
        </div>

        <div>
            <span> Phone </span>
            <x-inputs.text wire:model="form.phone"/>
            <x-error :for="'form.phone'"/>
        </div>

        <div>
            <span> Video Phone </span>
            <x-inputs.text wire:model="form.videoPhone"/>
            <x-error :for="'form.videoPhone'"/>
        </div>

        <div>
            <span> Email </span>
            <x-inputs.text wire:model="form.email"/>
            <x-error :for="'form.email'"/>
        </div>

        <div>
            <span> Note </span>
            <x-inputs.text wire:model="form.note"/>
            <x-error :for="'form.note'"/>
        </div>

        <div>
            <span> Address </span>
            <x-inputs.text wire:model="form.address"/>
            <x-error :for="'form.address'"/>
        </div>

        <div>
            <span> URL </span>
            <x-inputs.text wire:model="form.url"/>
            <x-error :for="'form.url'"/>
        </div>

        <div>
            <span> Nick Name </span>
            <x-inputs.text wire:model="form.nickName"/>
            <x-error :for="'form.nickName'"/>
        </div>
    </div>
    <x-inputs.success-button wire:click="create" class="mt-2">
        Create QR Code
    </x-inputs.success-button>
</div>
