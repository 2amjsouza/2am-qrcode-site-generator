<?php

namespace App\Livewire;

use App\Enum\FormatEnum;
use App\Livewire\Traits\FormsTrait;
use Illuminate\Support\Str;
use Livewire\Component;

class QrCodeForm extends Component
{
    use FormsTrait;

    public array $form;
    public FormatEnum $format;

    public function mount(int $formatType)
    {
        $this->form = [];
        $this->format = FormatEnum::tryFrom($formatType);
    }

    public function updated($property, $value)
    {
        $this->create();
    }

    public function create()
    {
        $this->validate();

        $this->dispatch('create-qr-code', $this->format->value, $this->form)
            ->to(QrCodeComponent::class);
    }

    public function placeholder()
    {
        return <<<'HTML'
        <div>
            <p> Loading... </p>
        </div>
        HTML;
    }

    protected function getView()
    {
        return 'forms.' . Str::snake($this->format->name);
    }

    public function render()
    {
        return view($this->getView());
    }

    protected function getFormRules()
    {
        $rules = $this->getRulesByForamt($this->format->value);
        $formRules = [];

        foreach ($rules as $key => $rule) {
            $formRules["form.$key"] = $rule;
        }

        return $formRules;
    }

    public function getRules()
    {
        return array_merge($this->getFormRules(), [

        ]);
    }
}
