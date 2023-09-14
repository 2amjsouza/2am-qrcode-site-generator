<div class="w-full" x-data="{
        showing: null,
        toggle: function(option) {
            if (showing == option) {
                showing = 'none'
            } else {
                showing = option
            }
        },
    }">

    <x-options.swag :option="'label'" :title="'Choose a <strong>Label</strong> for your QR'" :icon="'icons.label'">
        <x-options.label/>
    </x-options.swag>

    <x-options.swag :option="'colors'" :title="'Choose the <strong>Colors</strong> or your QR'" :icon="'icons.colors'">
        <x-options.colors/>
    </x-options.swag>

    <x-options.swag :option="'margin'" :title="'Set the <strong>Margins</strong> or your QR'" :icon="'icons.screen'">
        <x-options.margin/>
    </x-options.swag>

    <x-options.swag :option="'logo'" :title="'Add a <strong>Logo</strong> to your QR'" :icon="'icons.image'">
        <x-options.logo/>
    </x-options.swag>
</div>
