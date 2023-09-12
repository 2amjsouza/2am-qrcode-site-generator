<div>
    <div class="w-full flex justify-center">
        <div class="flex w-64 bg-gray-50 py-8 px-12 rounded-lg shadow">
            <div class="border-4 border-tred rounded-md">
                <img src="{{$this->getUri()}}"/>
            </div>
        </div>
    </div>
    <div class="p-5 pt-3">
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
