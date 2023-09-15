<div class="border-t-2 border-t-tred">
    <x-menu-options :activeFormat="$activeFormat"/>

    <x-menu-options-mobile :activeFormat="$activeFormat"/>

    <div class="grid grid-cols-1 md:grid-cols-6 md:gap-4 mt-10">
        <div class="col-span-4">
            <div class="w-full px-2">
                <div class="mb-5">
                    <p class="text-xl text-center center text-black mb-2">
                        Set your QR <b>Content</b>
                    </p>
                </div>
                <livewire:qr-code-form :formatType="$activeFormat" :key="$activeFormat"/>

                <x-options />
            </div>
        </div>
        <div class="col-span-2">
            <div class="px-2">
                <livewire:qr-code-component />
            </div>
        </div>
    </div>

</div>
