<form class="layui-form" action="{{$action}}" @if(isset($method)) method="{{ $method }}" @endif>
    @if(isset($method) && strtolower($method) === 'post')
        {{ csrf_field() }}
    @endif
    {{ $slot }}
</form>