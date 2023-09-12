<div>
    <label for="uploading-logo" class="cursor-pointer">
        <div class="w-full flex flex-row shadow h-10
            items-center p-3 mt-4 rounded text-gray-500">
            <span class="flex relative basis-11/12">
                Upload a file
            </span>
            <div class="w-max relative justify-content-end">
                <x-icons.upload/>
            </div>
        </div>
    </label>
    <input hidden type="file" id="uploading-logo" wire:model="{{$model}}">
</div>
