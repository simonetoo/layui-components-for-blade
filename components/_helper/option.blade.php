@if(is_array($option))
    @php
        $val = isset($option['value']) ? $option['value'] : $key;
    @endphp
    <option
            value="{{ $val }}"
            @if(isset($option['disabled']) && $option['disabled']) disabled @endif
            @if((isset($option['selected']) && $option['selected']) || isset($value) && $value === $val)
            selected
            @endif
    >{{ $option['label'] }}</option>
@else
    @php
        $val = is_string($key) ? $key : $option;
    @endphp
    <option
            value="{{ $val }}"
            @if( isset($value) && $value === $val) selected @endif
    >{{ $option }}</option>
@endif