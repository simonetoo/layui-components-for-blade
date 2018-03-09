<optgroup @if(isset($label))label="{{$label}}"@endif>
    @if(isset($options))
        @foreach($options as $key => $option)
            @component('components._helper.option',[
                'option'=>$option,
                'key'=>$key
            ])@endcomponent
        @endforeach
    @endif
</optgroup>