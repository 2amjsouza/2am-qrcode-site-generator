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
    <div wire:ignore>
    <x-inputs.text
        x-data="{
           init() {
               flatpickr(this.$refs.input, {{json_encode((object)$options)}});
           }
        }"
        x-ref="input"
        wire:model="form.startTimestamp" class="date-time"/>
    <x-error :for="'form.startTimestamp'"/>
    </div>

    <span> End </span>
    <x-inputs.text wire:model="form.endTimestamp"/>
    <x-error :for="'form.endTimestamp'"/>

    <div class="block">
        <span class="demonstration">Timestamp</span>
        <el-date-picker
            v-model="value3"
            type="datetime"
            placeholder="Pick a Date"
            format="YYYY/MM/DD hh:mm:ss"
            value-format="x"
        />
    </div>
    <x-inputs.success-button wire:click="create" class="mt-2">
        Create QR Code
    </x-inputs.success-button>
</div>
