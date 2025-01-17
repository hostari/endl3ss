<?php // $file = /Applications/MAMP/htdocs/endless-site/wp-content/themes/yootheme/packages/theme/config/theme.json

return [
  'defaults' => [
    'menu' => [
      'items' => [], 
      'positions' => [
        'navbar' => [
          'style' => 'default', 
          'image_margin' => true, 
          'image_align' => 'center'
        ], 
        'header' => [
          'style' => 'default', 
          'image_margin' => true, 
          'image_align' => 'center'
        ], 
        'toolbar-left' => [
          'style' => 'default', 
          'image_margin' => true, 
          'image_align' => 'center'
        ], 
        'toolbar-right' => [
          'style' => 'default', 
          'image_margin' => true, 
          'image_align' => 'center'
        ], 
        'dialog' => [
          'style' => 'default', 
          'image_margin' => true, 
          'image_align' => 'center'
        ], 
        'navbar-mobile' => [
          'style' => 'default', 
          'image_margin' => true, 
          'image_align' => 'center'
        ], 
        'header-mobile' => [
          'style' => 'default', 
          'image_margin' => true, 
          'image_align' => 'center'
        ], 
        'dialog-mobile' => [
          'style' => 'default', 
          'image_margin' => true, 
          'image_align' => 'center'
        ]
      ]
    ], 
    'site' => [
      'layout' => 'full', 
      'boxed' => [
        'alignment' => 1
      ], 
      'image_size' => 'cover', 
      'image_position' => 'center-center', 
      'image_effect' => 'fixed', 
      'toolbar_width' => 'default', 
      'breadcrumbs_show_home' => true, 
      'breadcrumbs_show_current' => true, 
      'breadcrumbs_home_text' => '', 
      'main_section' => [
        'height' => true
      ]
    ], 
    'header' => [
      'layout' => 'horizontal-right', 
      'width' => 'default', 
      'social_gap' => 'small'
    ], 
    'navbar' => [
      'sticky' => 0, 
      'dropdown_align' => 'left'
    ], 
    'dialog' => [
      'layout' => 'offcanvas-top', 
      'toggle' => 'header:end', 
      'menu_style' => 'default', 
      'offcanvas' => [
        'mode' => 'slide', 
        'flip' => true
      ]
    ], 
    'mobile' => [
      'breakpoint' => 'm', 
      'header' => [
        'layout' => 'horizontal-right'
      ], 
      'navbar' => [
        'sticky' => 0
      ], 
      'dialog' => [
        'layout' => 'offcanvas-top', 
        'toggle' => 'header-mobile:end', 
        'close' => true, 
        'menu_style' => 'default', 
        'offcanvas' => [
          'mode' => 'slide', 
          'flip' => true
        ], 
        'dropbar' => [
          'animation' => 'reveal-top'
        ]
      ]
    ], 
    'top' => [
      'style' => 'default', 
      'width' => 'default', 
      'breakpoint' => 'm', 
      'image_position' => 'center-center'
    ], 
    'main_sidebar' => [
      'width' => '1-4', 
      'min_width' => '200', 
      'breakpoint' => 'm', 
      'first' => 0, 
      'divider' => 0
    ], 
    'bottom' => [
      'style' => 'default', 
      'width' => 'default', 
      'breakpoint' => 'm', 
      'image_position' => 'center-center'
    ], 
    'footer' => [
      'content' => ''
    ], 
    'webp' => true
  ], 
  'social_icons' => ['500px', 'behance', 'discord', 'dribbble', 'etsy', 'facebook', 'flickr', 'foursquare', 'github', 'github-alt', 'gitter', 'google', 'instagram', 'joomla', 'linkedin', 'pagekit', 'pinterest', 'reddit', 'soundcloud', 'tiktok', 'tripadvisor', 'tumblr', 'twitch', 'twitter', 'uikit', 'vimeo', 'whatsapp', 'wordpress', 'xing', 'yelp', 'youtube']
];
