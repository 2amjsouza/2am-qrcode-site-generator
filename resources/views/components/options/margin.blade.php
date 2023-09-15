<div>
    <h1 class="text-black text-[18px] font-bold mb-3"> Margin </h1>
    <span class="text-gray-400">
        Define the margins for your QR Code
    </span>

    <x-inputs.text type="int" wire:model.lazy="margins" class="mt-3" />
    <x-error :for="'margins'"/>
</div>
