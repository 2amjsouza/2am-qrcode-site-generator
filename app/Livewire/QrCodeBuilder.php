<?php

namespace App\Livewire;

use App\Factories\QrCodeFactory;
use App\Enum\FormatEnum;
use App\Livewire\Traits\OptionsTrait;
use Da\QrCode\QrCode;
use Da\QrCode\Writer\JpgWriter;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class QrCodeBuilder extends Component
{
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
