@props([
'name',
'label'=>null,
'options'=>[],
'value'=>null,
'text'=>null,
'placeholder'=>null,
'ajax'=>null,
'inline'=>false,
'style'=>false,
'class'=>''
])

@php
    $selectedValue = old($name,$value);
@endphp

@if($inline)
    <div class="row mb-3 align-items-center {{ $class }}" {{ $style }}>
        @if($label)
            <label class="col-sm-3 col-form-label fw-semibold">
                {{ $label }}
            </label>
        @endif

        <div class="col-sm-9">

            <select
                name="{{ $name }}"
                data-ajax="{{ $ajax }}"
                data-placeholder="{{ $placeholder }}"
                {{ $attributes->merge(['class'=>'form-select select2']) }}
            >

                <option></option>

                @if($ajax)

                    @if($selectedValue)
                        <option value="{{ $selectedValue }}" selected>
                            {{ $text }}
                        </option>
                    @endif

                @else

                    @foreach($options as $key=>$text)
                        <option value="{{ $key }}" @selected($selectedValue==$key)>
                            {{ $text }}
                        </option>
                    @endforeach

                @endif

            </select>

        </div>
    </div>

@else

    <div class="mb-3 {{ $class }}" {{ $style }}>

        @if($label)
            <label class="form-label fw-semibold">
                {{ $label }}
            </label>
        @endif

        <select
            name="{{ $name }}"
            data-ajax="{{ $ajax }}"
            data-placeholder="{{ $placeholder }}"
            {{ $attributes->merge(['class'=>'form-select select2']) }}
        >

            <option></option>

            @if($ajax)

                @if($selectedValue)
                    <option value="{{ $selectedValue }}" selected>
                        {{ $text }}
                    </option>
                @endif

            @else

                @foreach($options as $key=>$text)
                    <option value="{{ $key }}" @selected($selectedValue==$key)>
                        {{ $text }}
                    </option>
                @endforeach

            @endif

        </select>

    </div>

@endif
