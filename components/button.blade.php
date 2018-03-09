<button
        type="{{isset($type) ? $type : 'button'}}"
        class="layui-btn
            @if(isset($style)) layui-btn-{{$style}} @endif
        @if(isset($size)) layui-btn-{{$size}} @endif
        @if(isset($disabled) && $disabled) layui-btn-disabled @endif
        @if(isset($radius) && $radius) layui-radius @endif
                "
        @if(isset($disabled) && $disabled) disabled @endif
        @if(isset($submit))  lay-submit="{{$size}}" @endif
        @if(isset($filter)) lay-filter="{{ $filter }}" @endif

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
    {{ isset($label) ? $label : $slot }}
</button>