<?php

register_page_template([
    'default' => 'Default',
    'landing_go'    => 'Landing Go'
]);

register_sidebar([
    'id'          => 'second_sidebar',
    'name'        => 'Second sidebar',
    'description' => 'This is a sample sidebar for icatgroup theme',
]);

theme_option()
    ->setField([
        'id'         => 'copyright',
        'section_id' => 'opt-text-subsection-general',
        'type'       => 'text',
        'label'      => __('Copyright'),
        'attributes' => [
            'name'    => 'copyright',
            'value'   => '© 2020 Botble Technologies. All right reserved.',
            'options' => [
                'class'        => 'form-control',
                'placeholder'  => __('Change copyright'),
                'data-counter' => 250,
            ]
        ],
        'helper' => __('Copyright on footer of site'),
    ]);

add_action('init', function () {
    config(['filesystems.disks.public.root' => public_path('storage')]);
}, 124);
