@component('admin.components.form.item',['label' => isset($label) ? $label : null ])
    @component('admin.components.input',$__data){{ $slot }}@endcomponent
@endcomponent