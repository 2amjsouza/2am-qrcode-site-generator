<div>
    @if($this->activeOption == \App\Enum\OptionsEnum::Colors->value)
        <x-options.colors/>
    @elseif($this->activeOption == \App\Enum\OptionsEnum::Margin->value)
        <x-options.margin/>
    @elseif($this->activeOption == \App\Enum\OptionsEnum::Label->value)
        <x-options.Label/>
    @elseif($this->activeOption == \App\Enum\OptionsEnum::Logo->value)
        <x-options.logo/>
    @endif
</div>
