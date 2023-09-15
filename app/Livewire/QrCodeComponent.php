<?php

namespace App\Livewire;

use App\Enum\FormatEnum;
use App\Factories\QrCodeFactory;
use Carbon\Carbon;
use Da\QrCode\Label;
use Da\QrCode\QrCode;
use Da\QrCode\Writer\JpgWriter;
use Illuminate\Support\Facades\Storage;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;
use Livewire\Component;
use Exception;
class QrCodeComponent extends Component
{
    use LivewireAlert;

    protected QrCode $qrCode;
    public int $format;
    public array $options;
    public array $colors = [
        'background' => null,
        'foreground' => null,
    ];
    public ?int $margins = null;
    public ?array $label = null;
    public ?string $logoPath = null;

    public function mount()
    {
        $this->init();
    }

    protected function init($notify = false)
    {
        $this->format = FormatEnum::Text->value;
        $this->options = [
            'text' => 'https://2am.tech',
        ];

        $this->build(notify: $notify);
    }

    #[On('create-qr-code')]
    public function create(int $format, array $options)
    {
        $this->format = $format;
        $this->options = $options;

        $this->build();
    }

    #[On('apply-colors')]
    public function applyColors(array $foreground, array $background)
    {
        $this->colors = [
            'background' => $background,
            'foreground' => $foreground,
        ];

        $this->build();
    }

    #[On('apply-label')]
    public function applyLabel(string $label, int $size, string $alignment)
    {
        $this->label = ! empty($label)
        ? [
            'label' => $label,
            'size' => $size,
            'align' => $alignment,
        ]
        : null;

        $this->build();
    }

    #[On('apply-margin')]
    public function applyMargin(int $margins)
    {
        $this->margins = $margins;

        $this->build();
    }

    #[On('apply-logo')]
    public function applyLogo(string $path)
    {
        $this->logoPath = $path;

        $this->build();
    }

    public function build($notify = true)
    {
        $this->normalizeOptions();

        try {
            /** @var QrCode $qrCode */
            $qrCode = QrCodeFactory::build($this->format, $this->options);

            if ($bgColors = $this->colors['background']) {
                $qrCode->setBackgroundColor($bgColors['r'], $bgColors['g'], $bgColors['b']);
            }

            if ($fgColors = $this->colors['foreground']) {
                $qrCode->setForegroundColor($fgColors['r'], $fgColors['g'], $fgColors['b']);
            }

            if ($label = $this->label) {
                $qrCode->setLabel(new Label(
                    text: $label['label'],
                    fontSize: $label['size'],
                    align: $label['align'],
                ));
            }

            if ($margins = $this->margins) {
                $qrCode->setMargin($margins);
            }

            if (! is_null($this->logoPath)) {
                $qrCode->setLogo($this->logoPath)
                    ->setLogoWidth(((int) $qrCode->getSize() * 0.16));
            }

            $this->qrCode = $qrCode;

            if ($notify) {
                $this->alert('success', 'QR Code updated!');
            }
        } catch (Exception $exception) {
            $this->init();
            $this->alert('error', $exception->getMessage());
        }
    }

    public function getUri()
    {
        return isset($this->qrCode)
            ? $this->qrCode->writeDataUri()
            : '';
    }

    public function download(string $extension)
    {
        $this->build();

        if ($extension === 'jpg') {
            $this->qrCode->setWriter(new JpgWriter());
        }

        $pathName = 'qrcode/' . uniqid() . ".$extension";
        Storage::put($pathName, $this->qrCode->writeString());

        return Storage::download($pathName, 'qrcode');
    }

    /**
     * set the options the meet current's format data type
     * @return void
     */
    protected function normalizeOptions(): void
    {
        if ($this->format === FormatEnum::ICal->value) {
            $this->options['startTimestamp'] = Carbon::parse($this->options['startTimestamp'])
                ->timezone(null)
                ->getTimestamp();

            $this->options['endTimestamp'] = Carbon::parse($this->options['endTimestamp'])
                ->timezone(null)
                ->getTimestamp();
        }
    }

    public function render()
    {
        return view('livewire.qr_code_component');
    }
}
