<div>
    <h1 class="text-black text-[18px] font-bold mb-3"> Logo </h1>
    <span class="text-gray-400">
        Set up a logo for your QR Code
    </span>

    <x-inputs.upload :model="'file'" />
    <x-error :for="'file'"/>
</div>
