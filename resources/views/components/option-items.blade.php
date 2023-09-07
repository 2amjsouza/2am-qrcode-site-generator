<div>
    <x-inputs.select wire:model.lazy="activeOption">
        <option value="{{null}}"> Select </option>
        @foreach(\App\Enum\OptionsEnum::cases() as $option)
            <option value="{{$option->value}}"> {{$option->name}} </option>
        @endforeach
    </x-inputs.select>
</div>
