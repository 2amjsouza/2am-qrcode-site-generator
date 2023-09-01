<div x-data="{ colorField: $wire.$entangle('{{$model}}', true)}" x-init="
        let pickr = Pickr.create({
            el: '.color-picker',
            theme: 'nano',
            closeWithKey: 'Enter',
            default: colorField,
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
                    save: true,
                    input: true,
                }
            }
        })

        pickr.on('change', (color, instance) => {
            let selectedColor = color.toHEXA().toString()
            pickr.setColor(selectedColor)
            colorField = selectedColor
        })"
>
    <div class="my-2 flex flex-row w-full">
        <div class="basis-11/12 bg-white text-black rounded-l-sm p-3 flex items-center">
            {{ $this->{$model} }}
        </div>
        <div class="p-2 bg-gray-100 rounded-r-sm border-r-gray-400">
            <div wire:ignore>
                <button class="color-picker border-black">
                    Pick a Color
                </button>
            </div>
        </div>
    </div>
</div>
