<div class="container mt-5">
    <div class="row">
    <style>
        .format-items {
            background: #eee;
        }

        .format-items:hover {
            cursor: pointer;
            background: #ccc;
        }

        .active {
            background: #ddd;
        }
    </style>

    <h5> Format </h5>
    @foreach($this->formats as $format)
        <div class="col-2 d-flex p-2 m-1 format-items {{$format->value == $activeFormat ? 'active' : ''}}" wire:click="selectFormat({{$format}})">
            <div class="w-25">
                <x-icons.set icon="{{$format->value}}"/>
            </div>
            <div class="d-flex align-items-center">
                {{ $format->name }}
            </div>
        </div>
    @endforeach
    </div>

    <h5> Options </h5>
    <div class="mt-3">
        <div class="row">
            <div wire:click="toggleOption({{\App\Enum\OptionsEnum::Colors->value}})" class="col-2 format-items p-2 m-1">
                Colors
            </div>
            <div wire:click="toggleOption({{\App\Enum\OptionsEnum::Margin->value}})" class="col-2 format-items p-2 m-1">
                Margin
            </div>
            <div wire:click="toggleOption({{\App\Enum\OptionsEnum::Label->value}})" class="col-2 format-items p-2 m-1">
                Label
            </div>
            <div wire:click="toggleOption({{\App\Enum\OptionsEnum::Logo->value}})" class="col-2 format-items p-2 m-1">
                Logo
            </div>
        </div>

        <x-options />
    </div>

    <div class="mt-3">
        <h3> {{ \App\Enum\FormatEnum::from($activeFormat)->name }} </h3>
        <div class="row">
            <div class="col-9">
                <div class="row">
                    @foreach($this->formFieldsRules as $field => $rules)
                    <div class="col-3 mt-2">
                        <b> {{ ucfirst($field) }} </b>
                        <input type="text" name="{{$field}}" wire:model="form.{{$activeFormat}}.{{$field}}" class="form-control" key="{{$activeFormat}}-{{$field}}"/>
                        @error("form.$activeFormat.$field") <span class="text-danger"> {{\Illuminate\Support\Str::replace('form.', null, $message)}} </span> @enderror
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-3 bg-gray p-2">
                <img src="{{$qrCodeData}}" />

                <button wire:click="generate" class="mt-2 btn btn-success">
                    Generate QR Code
                </button>
                <br>
                <button wire:click="download('png')" class="btn btn-secondary">
                    Download .png
                </button>
                <button wire:click="download('jpg')" class="btn btn-secondary">
                    Download .jpg
                </button>
            </div>
        </div>
    </div>
</div>
