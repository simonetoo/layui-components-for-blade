@component('admin.components.form.item',[ 'label' => isset($label) ? $label : null ])
    @php
        $type = isset($type) ? $type : 'checkbox';
    @endphp
    @if(isset($options))
        @foreach($options as $key => $option)
            @if(is_array($option))
                @php
                    $option['skin'] = isset($skin) ? $skin : null;
                    $option['type'] = $type;
                    $option['value'] = isset($option['value']) ? $option['value'] : $key;
                    $option['checked'] =  isset($option['checked']) ? $option['checked'] : (isset($value) && $value === $option['value']);
                @endphp
                @component('admin.components.checkbox', $option)@endcomponent
            @else
                @php
                    $val = is_string($key) ? $key : $option;
                @endphp
                @component('admin.components.checkbox',[
                    'value' => $val,
                    'checked' => isset($value) && $value === $val,
                    'title' => $option,
                    'skin' => isset($skin) ? $skin : null,
                    'type' => $type
                ])@endcomponent
            @endif
        @endforeach
    @else
        @component('admin.components.checkbox',array_merge($__data,[ 'type' => $type])){{ $slot }}@endcomponent
    @endif

@endcomponent