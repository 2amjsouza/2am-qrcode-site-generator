@props(['options' => []])

@php
    $options = array_merge([
                    'dateFormat' => 'Y-m-d',
                    'enableTime' => false,
                    'altFormat' =>  'j F Y',
                    'altInput' => true
                    ], []);
@endphp
<div>
    <h6 class="text-xl mb-5 font-bold"> ICal Format </h6>

    <span> Summary </span>
    <x-inputs.text wire:model="form.summary"/>
    <x-error :for="'form.summary'"/>

    <span> Start </span>
    <x-inputs.date-time :model="'form.startTimestamp'"/>
    <x-error :for="'form.startTimestamp'"/>

    <span> End </span>
    <x-inputs.date-time :model="'form.endTimestamp'"/>
    <x-error :for="'form.endTimestamp'"/>

    <x-inputs.success-button wire:click="create" class="mt-2">
        Create QR Code
    </x-inputs.success-button>
</div>
