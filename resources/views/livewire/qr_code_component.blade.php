<div>
    <div class="w-full flex justify-center">
        <div class="flex w-72 bg-gray-50 rounded-lg shadow">
            <div class="border-4 border-tred rounded-md">
                <img src="{{$uri}}"/>
            </div>
        </div>
    </div>
    <div class="pt-3">
        <x-inputs.success-button wire:click.debounce.400ms="build()" class="w-full flex flex-row mt-3">
            <div class="basis-10/12">
                Create QR Code
            </div>
            <x-icons.tools/>
        </x-inputs.success-button>

        <x-inputs.success-button wire:click="download('png')" class="w-full flex flex-row mt-3">
            <div class="basis-10/12">
                Download PNG
            </div>
            <x-icons.arrow-down/>
        </x-inputs.success-button>

        <x-inputs.success-button wire:click="download('jpg')" class="w-full flex flex-row mt-3">
            <div class="basis-10/12">
            Download JPEG
            </div>
            <x-icons.arrow-down/>
        </x-inputs.success-button>
    </div>
</div>
