@component('admin.components.form.item',['label' => isset($label) ? $label : null ])
    @component('admin.components.select',$__data){{ $slot }}@endcomponent
@endcomponent