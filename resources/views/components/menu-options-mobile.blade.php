<div x-data="{
            showMobileOptions: false,
            toggleMenu: function() {
                showMobileOptions = !showMobileOptions
            }
        }"
     class="options-menu-mobile"
>
    <div class="flex flex-wrap mt-5 w-full">
        <x-menu-item @click="toggleMenu()" class="text-tred border border-gray shadow w-full px-5">
            <div class="flex flex-row items-center">
                <div class="basis-11/12">
                    {{\App\Enum\FormatEnum::from($activeFormat)->name}}
                </div>
                <div class="flex justify-center" x-show="! showMobileOptions">
                    <x-icons.chev-down />
                </div>
                <div class="flex justify-center" x-show="showMobileOptions">
                    <x-icons.chev-up />
                </div>
            </div>
        </x-menu-item>
    </div>

    <div class="flex flex-col border-b border-gray px-3" x-show="showMobileOptions">
        @foreach($this->formats as $format)
            <x-menu-item
                wire:click="selectFormat({{$format->value}})"
                @click="toggleMenu()"
            >
                <div class="flex flex-row items-center">
                    <div class="basis-11/12">
                        {{$format->name}}
                    </div>
                    <div class="flex justify-center">
                        <x-icons.plus />
                    </div>
                </div>

            </x-menu-item>
        @endforeach
    </div>
</div>
