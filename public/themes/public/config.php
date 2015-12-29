<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Inherit from another theme
    |--------------------------------------------------------------------------
    |
    | Set up inherit from another if the file is not exists,
    | this is work with "layouts", "partials", "views" and "widgets"
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
        'before' => function ($theme) {
            // You can remove this line anytime.
            $theme->setTitle(trans('cms.name'));

            // Breadcrumb template.
            // $theme->breadcrumb()->setTemplate('
            //     <ul class="breadcrumb">
            //     @foreach ($crumbs as $i => $crumb)
            //         @if ($i != (count($crumbs) - 1))
            //         <li><a href="{{ $crumb["url"] }}">{{ $crumb["label"] }}</a><span class="divider">/</span></li>
            //         @else
            //         <li class="active">{{ $crumb["label"] }}</li>
            //         @endif
            //     @endforeach
            //     </ul>
            // ');
        },

        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme' => function ($theme) {
            //You may use this event to set up your assets.

            //You may use this event to set up your assets.
            $theme->asset()->usePath()->add('style', 'css/theme.css');
          $theme->asset()->usePath()->add('responsive', 'css/theme_responsive.css');
          $theme->asset()->usePath()->add('revslider-css', 'css/revslider/settings.css');

         $theme->asset()->container('footer')->add('jquery', 'packages/jquery.min.js');
         $theme->asset()->container('footer')->add('jquery-ui', 'packages/jquery-ui.js');
         $theme->asset()->container('footer')->add('revslider-tools', 'packages/revslider/jquery.themepunch.tools.min.js');
         $theme->asset()->container('footer')->add('revslider', 'packages/revslider/jquery.themepunch.revolution.min.js');
         $theme->asset()->container('footer')->add('superfish', 'packages/menu/superfish.min.js');
         $theme->asset()->container('footer')->add('tinynav', 'packages/menu/tinynav.min.js');
         $theme->asset()->container('footer')->add('isotope', 'packages/isotope/isotope.pkgd.min.js');
         $theme->asset()->container('footer')->add('popup', 'packages/mpopup/jquery.magnific-popup.min.js');
         $theme->asset()->container('footer')->add('scrollto', 'packages/scroolto/scroolto.js');
         $theme->asset()->container('footer')->add('nicescroll', 'packages/nicescrool/jquery.nicescroll.min.js');
         $theme->asset()->container('footer')->add('inview', 'packages/inview/jquery.inview.min.js');
         $theme->asset()->container('footer')->add('parallax', 'packages/parallax/jquery.parallax-1.1.3.js');
         $theme->asset()->container('footer')->add('countdown', 'packages/countdown/jquery.countdown.js');
         $theme->asset()->container('footer')->add('countto', 'packages/countto/jquery.countTo.js');

         $theme->asset()->container('footer')->usePath()->add('theme', 'js/theme.js');
         $theme->asset()->container('footer')->usePath()->add('slider', 'js/slider.js');
         $theme->asset()->container('footer')->usePath()->add('startup', 'js/startup.js');

        },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => [

            'blank' => function ($theme) {
            },

        ],

    ],

];
