<div
    x-data
    x-init="flatpickr($refs.datetimewidget, {wrap: true, enableTime: true, dateFormat: 'Y-m-d H:i:S', time_24hr: true});"
    x-ref="datetimewidget"
    {{$attributes->merge(['class' => ''])}}
>
    <div class="flex flex-row">
        <div class="basis-11/12">
            <x-inputs.text
                wire:model.lazy="{{$model}}"
                x-ref="datetime"
                type="text"
                id="datetime"
                data-input
                autocomplete="off"
                placeholder="Select.."
                class="rounded-r-none"
            />
        </div>
        <div class="flex mt-2">
            <a class="h-10 w-10 input-button cursor-pointer rounded-r-md bg-[#FCFCFC] border-gray-100 border p-3 shadow"
                title="clear" data-clear>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="#c53030">
                    <path fill-rule="evenodd"
                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                          clip-rule="evenodd"/>
                </svg>
            </a>
        </div>
    </div>
</div>
