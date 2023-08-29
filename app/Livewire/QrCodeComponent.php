<?php

namespace App\Livewire;

use App\Enum\FormatEnum;
use App\Factories\QrCodeFactory;
use Da\QrCode\QrCode;
use Da\QrCode\Writer\JpgWriter;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Modelable;
use Livewire\Attributes\On;
use Livewire\Component;

class QrCodeComponent extends Component
{
    protected QrCode $qrCode;
    public int $format;
    public array $options;
    public ?array $colors = null;
    public ?array $margins = null;
    public ?string $label = null;
    public ?string $logoPath = null;

    public function mount()
    {
        $this->format= FormatEnum::Text->value;
        $this->options = [
            'text' => 'https://2am.tech',
        ];

        $this->build();
    }

    #[On('create-qr-code')]
    public function create(int $format, array $options, ?array $colors = null)
    {
        $this->format = $format;
        $this->options = $options;

        $this->build();
    }

    public function build()
    {
        $this->qrCode = QrCodeFactory::build($this->format, $this->options);
    }

    public function getUri()
    {
        return $this->qrCode->writeDataUri();
    }

    public function download(string $extension)
    {
        $this->build();

        if ($extension === 'jpg') {
            $this->qrCode->setWriter(new JpgWriter());
        }

        $pathName = 'qrcode/' . uniqid() . ".$extension";
        Storage::put($pathName, $this->qrCode->writeString());

        //TODO command to delete files
        return Storage::download($pathName, 'qrcode');
    }

    public function render()
    {
        return view('livewire.qr_code_component');
    }
}
