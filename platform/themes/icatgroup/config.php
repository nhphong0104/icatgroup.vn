<?php

use Botble\Theme\Theme;

return [

    /*
    |--------------------------------------------------------------------------
    | Inherit from another theme
    |--------------------------------------------------------------------------
    |
    | Set up inherit from another if the file is not exists,
    | this is work with "layouts", "partials" and "views"
    |
    | [Notice] assets cannot inherit.
    |
    */

    'inherit' => null, //default

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these event can be override by package config.
    |
    */

    'events' => [

        // Before event inherit from package config and the theme that call before,
        // you can use this event to set meta, breadcrumb template or anything
        // you want inheriting.
        'before' => function($theme)
        {
            // You can remove this line anytime.
        },

        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme' => function (Theme $theme)
        {
            // Partial composer.
            // $theme->partialComposer('header', function($view) {
            //     $view->with('auth', \Auth::user());
            // });

            // You may use this event to set up your assets.
            $theme->asset()
                ->usePath()->add('bootstrap', 'css/bootstrap.min.css')
                ->usePath()->add('jquery-ui', 'css/jquery-ui.min.css')
                ->usePath()->add('css-plugin', 'css/css-plugin-collections.css')
                ->usePath()->add('menuzord', 'css/menuzord-boxed.css')
                ->usePath()->add('style-main', 'css/style-main.css')
                ->usePath()->add('preloader', 'css/preloader.css')
                ->usePath()->add('custom-bootstrap', 'css/custom-bootstrap-margin-padding.css')
                ->usePath()->add('responsive', 'css/responsive.css')
                ->usePath()->add('theme-skin', 'css/theme-skin-color-set2.css');


            $theme->asset()->container('footer')
                ->usePath()->add('jquery-js', 'js/jquery-2.2.4.min.js')
                ->usePath()->add('jquery-ui', 'js/jquery-ui.min.js')
                ->usePath()->add('bootstrap-js', 'js/bootstrap.min.js')
                ->usePath()->add('jquery-plugin-collection', 'js/jquery-plugin-collection.js')
                ->usePath()->add('custom', 'js/custom.js')
                ->usePath()->add('actions', 'js/revolution-slider/js/revolution.extension.actions.min.js')
                ->usePath()->add('carousel', 'js/revolution-slider/js/revolution.extension.carousel.min.js')
                ->usePath()->add('kenburn', 'js/revolution-slider/js/revolution.extension.kenburn.min.js')
                ->usePath()->add('layeranimation', 'js/revolution-slider/js/revolution.extension.layeranimation.min.js')
                ->usePath()->add('migration', 'js/revolution-slider/js/revolution.extension.migration.min.js')
                ->usePath()->add('navigation', 'js/revolution-slider/js/revolution.extension.navigation.min.js')
                ->usePath()->add('parallax', 'js/revolution-slider/js/revolution.extension.parallax.min.js')
                ->usePath()->add('slideanims', 'js/revolution-slider/js/revolution.extension.slideanims.min.js')
                ->usePath()->add('video', 'js/revolution-slider/js/revolution.extension.video.min.js');


            if (function_exists('shortcode')) {
                $theme->composer(['index', 'page', 'post'], function (\Botble\Shortcode\View\View $view) {
                    $view->withShortcodes();
                });
            }
        },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => [

            'default' => function ($theme)
            {
                // $theme->asset()->usePath()->add('ipad', 'css/layouts/ipad.css');
            }
        ]
    ]
];
