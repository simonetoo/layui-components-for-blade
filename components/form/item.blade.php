<div class="layui-form-item">
    @if(isset($label))
        <label class="layui-form-label">{{ $label }}</label>
    @endif
    @if(!isset($block) || $block !== false )
        <div class="layui-input-block">
            {{ $slot }}
        </div>
    @else
        {{ $slot }}
    @endif
</div>