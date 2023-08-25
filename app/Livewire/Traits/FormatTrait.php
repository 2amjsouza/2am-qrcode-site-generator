<?php

namespace App\Livewire\Traits;

use App\Enum\FormatEnum;
use Illuminate\Support\Collection;

trait FormatTrait
{
    public Collection $formats;
    public int $activeFormat;
    public array $formFieldsRules = [];
    public Collection $form;

    public function selectFormat(int $format)
    {
        $this->activeFormat = $format;
        $this->formFieldsRules = $this->getFormFieldsRulesByFormat($this->activeFormat);

        $this->form->put($format, []);
    }

    /**
     * @param int $format
     * @return array
     */
    protected function getFormFieldsRulesByFormat(int $format): array
    {
        $fields = [
            FormatEnum::Text->value => [
                'text' => 'string|required',
            ],
            FormatEnum::BookMark->value => [
                'title' => 'string|required',
                'url' => "string|required|regex:(https?:\/\/(www\.)?[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_\+.~#?&//=]*))"
            ],
            FormatEnum::Btc->value => [
                'address' => 'string|required',
                'amount' => 'string|required',
                'name' => 'string|required',
            ],
            FormatEnum::Geo->value => [
                'lat' => 'numeric|required',
                'lng' => 'numeric|required',
                'altitude' => 'numeric|required',
            ],
            FormatEnum::ICal->value => [
                'summary' => 'string|required',
                'startTimestamp' => 'int|required',
                'endTimestamp' => 'int|required',
            ],
            FormatEnum::MailMessage->value => [
                'email' => 'email|required',
                'subject' => 'string|nullable',
                'body' => 'string|required',
            ],
            FormatEnum::MailTo->value => [
                'email' => 'email|required',
            ],
            FormatEnum::Mms->value => [
                'phone' => 'string|required',
                'msg' => 'string|required',
            ],
            FormatEnum::Phone->value => [
                'phone' => 'string|required',
            ],
            FormatEnum::Sms->value => [
                'phone' => 'string|required',
            ],
            FormatEnum::VCard->value => [
                'name' => 'string|required',
                'fullName' => 'string|nullable',
                'address' => 'string|nullable',
                'email' => 'email|nullable',
            ],
            FormatEnum::Wifi->value => [
                'authentication' => 'string|required',
                'ssid' => 'string|required',
                'password' => 'string|required',
            ],
            FormatEnum::Youtube->value => [
                'videoId' => 'string',
            ],
            FormatEnum::MeCard->value => [
                'firstName' => 'string|required',
                'lastName' => 'string|nullable',
                'sound' => 'string|nullable',
                'phone' => 'string|nullable',
                'videoPhone' => 'string|nullable',
                'email' => 'email|nullable',
                'note' => 'string|nullable',
                'birthday' => 'string|nullable',
                'address' => 'string|nullable',
                'url' => "string|nullable|regex:(https?:\/\/(www\.)?[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_\+.~#?&//=]*))",
                'nickName' => 'string|nullable',
            ],
        ];

        return $fields[$format];
    }

    /**
     * Build rules in run time for current form/fields associated with current qrcode format
     *
     * @return array
     */
    protected function buildRules(): array
    {
        $rules = [];

        foreach ($this->formFieldsRules as $field => $fieldsRules) {
            $field = "form.{$this->activeFormat}.{$field}";
            $rules[$field] = $fieldsRules;
        }

        return $rules;
    }
}
