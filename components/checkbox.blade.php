@component('components.input',array_merge($__data,[
    'type' => 'checkbox',
    'attributes' => [
        'title' => isset($title) ? $title : $slot,
        'lay-skin'=>isset($skin) ? $skin : '',
        'checked' => isset($checked) && $checked
    ]
]))@endcomponent