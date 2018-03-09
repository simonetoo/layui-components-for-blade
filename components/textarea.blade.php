<textarea
        class="layui-textarea"
        @if(isset($name)) name="{{$name}}" @endif
        @if(isset($value)) value="{{$value}}" @endif
        @if(isset($placeholder)) placeholder="{{$placeholder}}" @endif
        @if(isset($alert)) lay-verType="{{ $alert }}" @endif
        @if(isset($filter)) lay-filter="{{ $filter }}" @endif
        @if(isset($rules)) lay-verify="{{ is_array($rules) ? implode('|',$rules) : $rules}}" @endif
        @if(isset($readonly) && $readonly) readonly @endif
        @if(isset($disabled) && $disabled) disabled="" @endif

@if(isset($attributes))
    @foreach($attributes as $key=>$val)
        @if(is_bool($val))
            @if($val === true) {{ $key }} @endif
                @else
            {!! $key.'="'.$val.'"' !!}
                @endif
            @endforeach
        @endif
>{{ isset($value) ? $value : $slot }}</textarea>