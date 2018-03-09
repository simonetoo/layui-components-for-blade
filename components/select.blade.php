<select
        class=""
        @if(isset($name)) name="{{ $name }}" @endif
        @if(isset($readonly) && $readonly) readonly @endif
        @if(isset($disabled) && $disabled) disabled="" @endif
        @if(isset($search) && $search) lay-search @endif
        @if(isset($rules)) lay-verify="{{ is_array($rules) ? implode('|',$rules) : $rules}}" @endif
@if(isset($attributes))
    @foreach($attributes as $key=>$val)
        @if(is_bool($val))
            @if($val === true) {{ $key }} @endif
                @else
            {!! $key.'="'.$val.'"' !!}
                @endif
            @endforeach
        @endif
>
    @if(isset($placeholder))
        <option @if(isset($nullable) && $nullable === false ) disabled @endif>{{ $placeholder }}</option>
    @endif
    @if(isset($options))
        @foreach($options as $key => $option)

            @if(is_array($option) && isset($option['options']))
                @component('components._helper.opt-group', $option)@endcomponent
            @else
                @component('components._helper.option', [
                    'key' => $key,
                    'option' => $option,
                    'value' => isset($value) ? $value : null
                ])@endcomponent
            @endif

        @endforeach
    @else
        {{ $slot }}
    @endif
</select>