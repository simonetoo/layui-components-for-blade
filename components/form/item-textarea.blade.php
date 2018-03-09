@component('admin.components.form.item',['label' => isset($label) ? $label : null ])
    @component('admin.components.textarea',$__data){{ $slot }}@endcomponent
@endcomponent