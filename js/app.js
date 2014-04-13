function adjustRowsTimeline() {
	var num_rows = $('.post-articles','.h-timeline').length,
		row_width = $('.post-articles','.h-timeline').width(),
		timeline_width = (num_rows * row_width);

	$('.h-timeline').css('width',timeline_width + 'px');
};
adjustRowsTimeline();

$(window).bind('load resize' ,function(e) {
	var max_height;

	if($(window).height() >= 720) {
		max_height = $(window).height();
	} else {
		max_height = 720;
	}

	$('.h-timeline').css({
		height : max_height
	});
});

function worksList() {
	var count = $('article','.list-articles').length;
	$.each($('article','.list-articles'),function(i) {
		switch(i % 4) {
			case 0:
				$(this).addClass('violet');
			break;

			case 1: 
				$(this).addClass('red').append('<div class="block-violet small-2 abs"></div>');
			break;

			case 2: 
				$(this).addClass('yellow');
			break;

			case 3: 
				$(this).addClass('blue');
			break;
		}
	});
};

worksList();

function projectsList() {
	var count = $('article','.list-projects').length;
	$.each($('article','.list-projects'),function(i) {
		switch(i % 3) {
			case 0:
				$(this).append('<div class="block-blue-lite small-9 abs"></div>');
			break;
			case 1: 
				$(this).addClass('large-offset-2');
			break;
			case 2: 
				$(this).append('<div class="block-red small-9 abs"></div>');
			break;
		}
	});
};

projectsList();

function projectsTitles() {
	var count = $('h3 a','.this-pj').length;
	$.each($('h3 a','.this-pj'),function(i) {
		switch(i % 3) {
			case 0:
				$(this).addClass('violet');
			break;
			case 1: 
				$(this).addClass('red');
			break;
			case 2: 
				$(this).addClass('blue');
			break;
		}
	});
};

projectsTitles();

/*function thoughtColors() {
	var count = $('.this-thought').length;
	$.each($('.this-thought'),function(i) {
		switch(i % 4) {
			case 0: 
				$(this).addClass('blue small-offset-1');
			break;

			case 1: 
				$(this).addClass('yellow');
			break;

			case 2: 
				$(this).removeClass('large-3').addClass('large-5 violet-lite large-offset-3')
				.append('<div class="violet-block small-3 abs"></div><figure class="thought-thumb abs small-5"><>')
				.find('header').removeClass('small-14').addClass('small-9')
				.end()
				.find('p').removeClass('small-14').addClass('small-9');
			break;

			case 3: 
				$(this).addClass('large-offset-1 red');
			break;
		};

		var dt = $(this).data('thumb');

		$('.thought-thumb',this).css({
			height: '100%',
			backgroundImage: 'url('+dt+')',
			backgroundSize: 'cover',
			backgroundRepeat: 'no-repeat',
			top: 0,
			right: 0
		})
	});
};*/

//thoughtColors();

function thought() {
            var count = $('.this-thought').length;
            $.each($('.this-thought'),function(i) {
                switch(i % 4) {
            case 0: 
                $(this).addClass('blue small-offset-1');
            break;

            case 1: 
                $(this).addClass('yellow');
            break;

            case 2: 
                $(this).addClass('violet-lite large-offset-2')
                .append('<div class="violet-block small-3 abs"></div><figure class="thought-thumb abs small-9 abs"></figure>');
            break;

            case 3: 
                $(this).addClass('large-offset-2 red');
            break;
        };

        var dt = $(this).data('thumb');

        $('.thought-thumb',this).css({
            height: '100%',
            backgroundImage: 'url('+dt+')',
            backgroundSize: 'cover',
            backgroundRepeat: 'no-repeat',
            top: 0,
            left: '100%'
        })
        });
};

thought();

/**
 * Request content on post timeline 
 */
function requestPostContent() {
	$('a[data-reveal]','.post-articles').on('click touchstart',function(e) {
		e.preventDefault();
		$('#footer').css({
			opacity: 0
		});
		$('#main-menu').css({
			height: '710px'
		});
	});

	//return initial config
	$('.close-reveal-modal').on('click touchstart',function() {
		$('#footer').css({
			opacity: 1
		});
		$('#main-menu').css({
			height: '100%'
		});
	});
};
requestPostContent();

// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

/*! Copyright (c) 2013 Brandon Aaron (http://brandonaaron.net)
 * Licensed under the MIT License (LICENSE.txt).
 *
 * Thanks to: http://adomas.org/javascript-mouse-wheel/ for some pointers.
 * Thanks to: Mathias Bank(http://www.mathias-bank.de) for a scope bug fix.
 * Thanks to: Seamus Leahy for adding deltaX and deltaY
 *
 * Version: 3.1.3
 *
 * Requires: 1.2.2+
 */

(function (factory) {
    if ( typeof define === 'function' && define.amd ) {
        // AMD. Register as an anonymous module.
        define(['jquery'], factory);
    } else if (typeof exports === 'object') {
        // Node/CommonJS style for Browserify
        module.exports = factory;
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function ($) {

    var toFix = ['wheel', 'mousewheel', 'DOMMouseScroll', 'MozMousePixelScroll'];
    var toBind = 'onwheel' in document || document.documentMode >= 9 ? ['wheel'] : ['mousewheel', 'DomMouseScroll', 'MozMousePixelScroll'];
    var lowestDelta, lowestDeltaXY;

    if ( $.event.fixHooks ) {
        for ( var i = toFix.length; i; ) {
            $.event.fixHooks[ toFix[--i] ] = $.event.mouseHooks;
        }
    }

    $.event.special.mousewheel = {
        setup: function() {
            if ( this.addEventListener ) {
                for ( var i = toBind.length; i; ) {
                    this.addEventListener( toBind[--i], handler, false );
                }
            } else {
                this.onmousewheel = handler;
            }
        },

        teardown: function() {
            if ( this.removeEventListener ) {
                for ( var i = toBind.length; i; ) {
                    this.removeEventListener( toBind[--i], handler, false );
                }
            } else {
                this.onmousewheel = null;
            }
        }
    };

    $.fn.extend({
        mousewheel: function(fn) {
            return fn ? this.bind("mousewheel", fn) : this.trigger("mousewheel");
        },

        unmousewheel: function(fn) {
            return this.unbind("mousewheel", fn);
        }
    });


    function handler(event) {
        var orgEvent = event || window.event,
            args = [].slice.call(arguments, 1),
            delta = 0,
            deltaX = 0,
            deltaY = 0,
            absDelta = 0,
            absDeltaXY = 0,
            fn;
        event = $.event.fix(orgEvent);
        event.type = "mousewheel";

        // Old school scrollwheel delta
        if ( orgEvent.wheelDelta ) { delta = orgEvent.wheelDelta; }
        if ( orgEvent.detail )     { delta = orgEvent.detail * -1; }

        // New school wheel delta (wheel event)
        if ( orgEvent.deltaY ) {
            deltaY = orgEvent.deltaY * -1;
            delta  = deltaY;
        }
        if ( orgEvent.deltaX ) {
            deltaX = orgEvent.deltaX;
            delta  = deltaX * -1;
        }

        // Webkit
        if ( orgEvent.wheelDeltaY !== undefined ) { deltaY = orgEvent.wheelDeltaY; }
        if ( orgEvent.wheelDeltaX !== undefined ) { deltaX = orgEvent.wheelDeltaX * -1; }

        // Look for lowest delta to normalize the delta values
        absDelta = Math.abs(delta);
        if ( !lowestDelta || absDelta < lowestDelta ) { lowestDelta = absDelta; }
        absDeltaXY = Math.max(Math.abs(deltaY), Math.abs(deltaX));
        if ( !lowestDeltaXY || absDeltaXY < lowestDeltaXY ) { lowestDeltaXY = absDeltaXY; }

        // Get a whole value for the deltas
        fn = delta > 0 ? 'floor' : 'ceil';
        delta  = Math[fn](delta / lowestDelta);
        deltaX = Math[fn](deltaX / lowestDeltaXY);
        deltaY = Math[fn](deltaY / lowestDeltaXY);

        // Add event and delta to the front of the arguments
        args.unshift(event, delta, deltaX, deltaY);

        return ($.event.dispatch || $.event.handle).apply(this, args);
    }

}));