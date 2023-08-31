<?php

namespace App\Livewire;

use App\Enum\FormatEnum;
use App\Livewire\Traits\ColorsTrait;
use App\Livewire\Traits\LabelTrait;
use App\Livewire\Traits\LogoTrait;
use App\Livewire\Traits\MarginTrait;
use App\Livewire\Traits\OptionsTrait;
use Illuminate\Support\Collection;
use Livewire\Component;

class QrCodeBuilder extends Component
{
    use ColorsTrait;
    use LabelTrait;
    use MarginTrait;
    use LogoTrait;
    use OptionsTrait;

    public Collection $formats;
    public int $activeFormat;

    public function mount()
    {
        $this->formats = collect(FormatEnum::cases());
        $this->selectFormat(0);
    }

    public function selectFormat(int $format)
    {
        $this->activeFormat = $format;
    }

    public function render()
    {
        return view('livewire.qr_code_builder');
    }
}
