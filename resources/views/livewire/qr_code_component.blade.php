<div>
    <img src="{{$this->getUri()}}" />

    <x-inputs.secondary-button wire:click="download('png')" class="w-full mt-3">
        Download .png
    </x-inputs.secondary-button>

    <x-inputs.secondary-button wire:click="download('jpg')" class="w-full mt-3">
        Download .jpg
    </x-inputs.secondary-button>
</div>
