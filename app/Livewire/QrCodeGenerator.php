<?php

namespace App\Livewire;

use App\Factories\QrCodeFactory;
use App\Enum\FormatEnum;
use App\Livewire\Traits\ColorsTrait;
use App\Livewire\Traits\FormatTrait;
use App\Livewire\Traits\OptionsTrait;
use Da\QrCode\QrCode;
use Da\QrCode\Writer\JpgWriter;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class QrCodeGenerator extends Component
{
    use FormatTrait;
    use ColorsTrait;
    use OptionsTrait;

    protected QrCode $qrCode;
    public string $qrCodeData;

    public function mount()
    {
        $this->qrCode = (new QrCode('https://2am.tech'));

        $this->formats = collect(FormatEnum::cases());
        $this->form = collect();
        $this->selectFormat(0);

        $this->reRenderQrCode();
    }

    /**
     * Generates QR Code
     *
     * @return void
     */
    public function generate()
    {
        $this->validate($this->buildRules());

        $this->qrCode = QrCodeFactory::build($this->activeFormat, $this->form->get($this->activeFormat));
        $this->qrCode->setBackgroundColor($this->background['r'], $this->background['g'], $this->background['b']);
        $this->qrCode->setForegroundColor($this->foreground['r'], $this->foreground['g'], $this->foreground['b']);

        $this->reRenderQrCode();
    }

    /**
     * Re-renders the qrcode on UI
     *
     * @return void
     */
    protected function reRenderQrCode()
    {
        $this->qrCodeData = $this->qrCode->writeDataUri();
    }



    public function download(string $extension)
    {
        $this->generate();

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
        return view('livewire.qr-code-generator');
    }
}
