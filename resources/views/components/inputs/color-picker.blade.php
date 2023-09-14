<div x-data="{
        colorField: $wire.entangle('{{$model}}')
    }" x-init="
        let pickr = Pickr.create({
            el: '.color-picker',
            theme: 'nano',
            closeWithKey: 'Enter',
            default: colorField,
            appClass: 'color-picker-widget',
            swatches: [
                'rgba(244, 67, 54, 1)',
                'rgba(233, 30, 99, 1)',
                'rgba(156, 39, 176, 1)',
                'rgba(103, 58, 183, 1)',
                'rgba(63, 81, 181, 1)',
                'rgba(33, 150, 243, 1)',
                'rgba(3, 169, 244, 1)',
                'rgba(0, 188, 212, 1)',
                'rgba(0, 150, 136, 1)',
                'rgba(76, 175, 80, 1)',
                'rgba(139, 195, 74, 1)',
                'rgba(205, 220, 57, 1)',
                'rgba(255, 235, 59, 1)',
                'rgba(255, 193, 7, 1)'
            ],

            components: {
                // Main components
                preview: true,
                hue: false,

                // Input / output Options
                interaction: {
                    hexa: true,
                    save: false,
                    input: true,
                }
            }
        })

        pickr.on('change', (color, instance) => {
            let selectedColor = color.toHEXA().toString()
            pickr.setColor(selectedColor)
            colorField = selectedColor
        })

        pickr.on('hide', (instance) => {
            $wire.colorSelected()
            $refs.colorField.removeClass('focus:ring-1 focus:ring-red-500/75')
        })
">
    <div class="my-2 flex flex-row w-full">
        <div class="h-10 border border-gray border-r-0 font-sm lowercase basis-11/12 bg-white text-[{{ $this->{$model} }}] rounded rounded-r-none shadow p-3 flex items-center font-bold" x-ref="colorField">
            {{ $this->{$model} }}
        </div>
        <div class="rounded rounded-l-none h-10 p-2 bg-[#FAFAFA] shadow border border-gray border-l-0">
            <div wire:ignore>
                <button class="color-picker border-black">
                    Pick a Color
                </button>
            </div>
        </div>
    </div>
</div>
