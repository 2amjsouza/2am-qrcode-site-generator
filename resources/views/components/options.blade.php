<div class="w-full mb-5 px-1" x-data="{
        showing: $persist(null).as('showing-option'),
        setShowing: function (option) {
            showing = option !== showing
                ? option
                : null
        }
    }">

    <x-options.swag :option="'label'" :title="'<strong>Label</strong>'" :icon="'icons.label'">
        <x-options.label/>
    </x-options.swag>

    <x-options.swag :option="'colors'" :title="'<strong>Colors</strong>'" :icon="'icons.colors'">
        <x-options.colors/>
    </x-options.swag>

    <x-options.swag :option="'margin'" :title="'<strong>Margins</strong>'" :icon="'icons.screen'">
        <x-options.margin/>
    </x-options.swag>

    <x-options.swag :option="'logo'" :title="'<strong>Logo</strong>'" :icon="'icons.image'">
        <x-options.logo/>
    </x-options.swag>
</div>
