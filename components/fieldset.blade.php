<fieldset class="layui-elem-field">
    @if(isset($title))
        <legend>{{ $title }}</legend>
    @endif
    <div class="layui-field-box">
        {{ $slot }}
    </div>
</fieldset>