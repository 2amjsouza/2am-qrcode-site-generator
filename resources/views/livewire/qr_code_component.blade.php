<div>
    <img src="{{$this->getUri()}}" />

    <x-inputs.secondary-button wire:click="download('png')">
        Download .png
    </x-inputs.secondary-button>

    <x-inputs.secondary-button wire:click="download('jpg')">
        Download .jpg
    </x-inputs.secondary-button>
</div>
