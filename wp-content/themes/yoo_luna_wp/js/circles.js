/* Copyright (C) YOOtheme GmbH, YOOtheme Proprietary Use License (http://www.yootheme.com/license) */

jQuery(function($) {

    var $container = $('<div class="tm-fx-container tm-fx-circles"></div>').prependTo('body>.uk-block:first'),
        svg = {
            'circle'     : '<svg class="tm-svg-circle" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="900px" height="900px" viewBox="0 0 900 900" enable-background="new 0 0 900 900" xml:space="preserve"><path fill="#3C78C0" d="M450,0C201.47,0,0,201.47,0,450c0,248.53,201.47,450,450,450c248.53,0,450-201.47,450-450C900,201.47,698.53,0,450,0z M450,770c-176.73,0-320-143.27-320-320c0-176.73,143.27-320,320-320c176.73,0,320,143.27,320,320C770,626.73,626.73,770,450,770z"/></svg>',
            'semicircle' : '<svg class="tm-svg-semicircle" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="900px" height="450px" viewBox="0 450 900 450" enable-background="new 0 450 900 450" xml:space="preserve"><path fill="#1857A5" d="M780,450c0,182.25-147.75,330-330,330S120,632.25,120,450H0c0,248.53,201.47,450,450,450c248.53,0,450-201.47,450-450H780z"/></svg>'
        },
        items = [
            {
                'svg'     : 'circle',
                'width'   : '40vw',
                'height'  : '40vw',
                'rangeX'  : '-100',
                'rangeY'  : '-80',
                'posLeft' : '-20vw',
                'posTop'  : '-10vw'
            },
            {
                'svg'     : 'semicircle',
                'width'   : '40vw',
                'height'  : '40vw',
                'rangeX'  : '120',
                'rangeY'  : '60',
                'posLeft' : '85%',
                'posTop'  : '25%'
            }
        ];

    items.forEach(function(item) {
        var img = $(svg[item.svg]).css({'width': item.width, 'height': item.height}),
            parallax = $('<div data-parallaxify-range-x="'+item.rangeX+'" data-parallaxify-range-y="'+item.rangeY+'" style="left:'+item.posLeft+';top:'+item.posTop+';width:'+item.width+';height:'+item.height+';"></div>');

        parallax.append(img).appendTo($container);
    });

    $container.parallaxify({
        positionProperty: 'transform'
    });

});
