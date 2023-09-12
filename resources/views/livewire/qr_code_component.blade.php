<div class="mt-10">
    <h1 class="text-center text--weight-bold text-black text-2xl font-bold">
        General Look on your QR
    </h1>

    <div class="w-full flex justify-center mt-5">
        <div class="flex w-64 bg-gray-50 py-8 px-12 rounded-lg mt-8 shadow">
            <div class="border-4 border-tred rounded-md">
                <img src="{{$this->getUri()}}"/>
            </div>
        </div>
    </div>
    <div class="flex flex-row justify-center mt-5">
        <x-inputs.success-button wire:click="download('png')">
                Download PNG <x-icons.arrow-down/>
        </x-inputs.success-button>

        <x-inputs.success-button wire:click="download('jpg')">
            Download JPEG <x-icons.arrow-down/>
        </x-inputs.success-button>
    </div>
</div>
