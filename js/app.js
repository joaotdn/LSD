
/*$('body').perfectScrollbar({
    wheelSpeed: 20,
    wheelPropagation: false,
    suppressScrollY: true
});*/

$.ajaxSetup({
    url : getData.ajaxDir,
    dataType: 'html',
    type: 'GET',
});

function scrollBarConfig() {
$('.post-text, .article-text, .article-list, .thought-post, .group-list, .search-result, .english-text, .friends-list, .oportunity-text').perfectScrollbar({
    wheelSpeed: 20,
    wheelPropagation: false,
    suppressScrollX: true
});
};
scrollBarConfig();

function eraseChar(node) {
    $(node).text().slice(0, 1);
};

function adjustRowsTimeline(timeline) {
	var num_rows = $(timeline,'.h-timeline').length,
		row_width = $(timeline,'.h-timeline').width(),
		timeline_width = (num_rows * row_width);

	$('.h-timeline').css('width',timeline_width + 'px');
};

adjustRowsTimeline('.post-articles');

$(window).bind('load resize' ,function(e) {
	var max_height;

	if($(window).height() >= 677) {
		max_height = $(window).height();
	} else {
		max_height = 677;
	}

    function otherHeight(el,int) {
        $(el).css({
            height : max_height - int
        });
    }

    otherHeight('.h-timeline',0);
    otherHeight('.post-text',260);
    otherHeight('.article-text',350);
    otherHeight('.article-list',300);
    otherHeight('.english-text',260);
    otherHeight('.list-team',150);
    otherHeight('.group-list',320);
    otherHeight('.search-result',430);
    otherHeight('.friends-list',260);
    
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

/**
 * Get category page with ajax
 * @return {html}

function getCategory() {
    $('.get-category-timeline').on('click', function(e) {
        e.preventDefault();
        $('.post-articles','.h-timeline').fadeOut('slow', function() {
            $(this).remove();
            //$('.h-timeline').css('width','2000px');
        });

        $.ajax({
            url : 'category.html',
            dataType: 'html',
            type: 'GET',
            beforeSend : function() {
                ////console.log('go!');
                $('.loading').fadeIn('fast');
                $('.request-container').remove();
            },
            complete: function() {
                $('.category-timeline').fadeIn('slow');
                $('.loading').fadeOut('fast');
            },
            success: function(data) {
                $('.h-timeline').append('<div class="full-width request-container"></div>');
                $('.request-container').html(data);
                categoryPostsTL();
                adjustRowsTimeline('.category-timeline');
            },
            error: function(e) {
                //console.log(e.type);
            }
        });
    })
};
 */

//getCategory();


function categoryPostsTL() {
    $.each($('article','.category-posts'),function(i) {
        var dt = $(this).data('thumb');

        switch(i % 10) {
            case 0:
                $(this).addClass('bg-blue-lite small-4 columns small-offset-4 l-one');
            break;

            case 1: 
                $(this).addClass('bg-red small-3 columns small-offset-4 l-one rel')
                .append('<div class="small-9 bg-violet abs"></div><div class="small-9 bg-yellow abs"></div>');
            break;

            case 2: 
                $(this).addClass('bg-violet small-4 columns l-two')
                
                .append('<figure class="small-6 left" style="background-image: url('+ dt +'); background-repeat: no-repeat; background-size: cover; background-position: top center; height: 100%;"></figure>')
                
                .find('section').removeClass('small-14 small-offset-2').addClass('small-10 small-pull-1 right');
            break;

            case 3: 
                $(this).addClass('bg-yellow small-4 small-offset-2 columns l-two')

                .append('<figure class="small-6 left" style="background-image: url('+ dt +'); background-repeat: no-repeat; background-size: cover; background-position: top center; height: 100%;"></figure>')
                
                .find('section').removeClass('small-14 small-offset-2').addClass('small-10 small-pull-1 right');
            break;

            case 4: 
                $(this).addClass('bg-blue-lite small-5 columns l-two')

                .find('section').removeClass('small-14 small-offset-2').addClass('small-9 small-offset-2');
            break;

            case 5: 
                $(this).addClass('bg-blue small-6 columns small-offset-4 l-two')

                .append('<div class="small-5 bg-yellow abs"></div>')

                .append('<figure class="small-8 left" style="background-image: url('+ dt +'); background-repeat: no-repeat; background-size: cover; background-position: top center; height: 100%;"></figure>')

                .find('section').removeClass('small-14 small-offset-2').addClass('small-8 small-pull-1 right');
            break;

            case 6: 
                $(this).addClass('bg-violet small-5 columns l-two')

                .append('<figure class="small-6 left" style="background-image: url('+ dt +'); background-repeat: no-repeat; background-size: cover; background-position: top center; height: 100%;"></figure>')
                
                .find('section').removeClass('small-14 small-offset-2').addClass('small-10 small-pull-1 right');
            break;

            case 7: 
                $(this).addClass('bg-blue small-4 columns small-push-1 l-two');
            break;

            case 8: 
                $(this).addClass('bg-red small-4 columns small-push-1 l-two');
            break;

            case 9: 
                $(this).addClass('bg-violet-lite small-6 columns small-offset-3 l-two')

                .append('<figure class="small-6 right" style="background-image: url('+ dt +'); background-repeat: no-repeat; background-size: cover; background-position: top center; height: 100%;"></figure>')
                
                .find('section').removeClass('small-14 small-offset-2').addClass('small-10 small-offset-1 left');
            break;
        }
    });
};
categoryPostsTL();


$(document).on('click','a[data-reveal]',function() {
        var dt      = $(this).data('reveal-id'),
            modalid = $(this).parents('article').data('modalid');

        //console.log(modalid);

        switch(dt) {
            case 'article-modal':
            var action = 'request_article',
                idt    = '#article-modal';
            break;

            case 'post-modal' :
            var action = 'request_project',
                idt    = '#post-modal';
            break;

            case 'thought-modal' :
            var action = 'request_thought',
                idt    = '#thought-modal';
            break;

            case 'article-page-modal' :
            var action = 'request_article_search',
                idt    = '#article-page-modal';
            break;

            case 'friends-modal' :
            var action = 'request_friends_list',
                idt    = '#friends-modal';
            break;

            case 'oportunity-modal' :
            var action = 'request_oportunity',
                idt    = '#oportunity-modal';
            break;

            case 'team-modal' :
            var action = 'request_team',
                idt    = '#team-modal';
            break;

            case 'teamever-modal' :
            var action = 'request_team_for_ever',
                idt    = '#teamever-modal';
            break;

            case 'tour-modal' :
            var action = 'request_tour',
                idt    = '#tour-modal';
            break;

            case 'clipping-modal' :
            var action = 'request_clipping',
                idt    = '#clipping-modal';
            break;

            case 'english-page-modal' :
            var action = 'request_english',
                idt    = '#english-page-modal';
            break;
        }

        $.ajax({
            data : {
                action : action,
                modalid : modalid
            },
            beforeSend : function() {
                //console.log(dt);
                $('.loading').fadeIn('fast');
            },
            complete : function() {
                //console.log('complete');
                $('.loading').fadeOut('fast');
            },
            success : function(data) {
                $(idt).html(data);
                $(document).foundation();

                scrollBarConfig();
                requestPostContent();
                
                //requestAuthorTag('#select-author','autores');
                //requestAuthorTag('.article-authors a','autores');
                
                //requestAuthorTag('.tag-li','tags');
                //requestAuthorTag('.text-app a','tags');     
            },
            error : function(e) {
                alert('Erro ' + e.status + '\nTente novamente.');
            }
        });
});


$(document).on('click','a[data-getpnpost]',function(e) {
        e.preventDefault();

        var dt = $(this).data('pnpost');
        ////console.log(dt);

            $.ajax({
                data : {
                    action : 'request_pnpost',
                    pn_id : dt
                },
                beforeSend : function() {
                    ////console.log(dt);
                    $('.thought-row').fadeOut('fast');
                    $('figure.load-post').fadeIn('fast');
                    $('.loading').fadeIn('fast');
                },
                complete : function() {
                    ////console.log('complete');
                    $('figure.load-post').fadeOut('fast');
                    $('.thought-row').fadeIn('fast');
                    $('.loading').fadeOut('fast');
                },
                success : function(data) {
                    //consolo.log(data);
                    $('.thought-row').html(data);
                    scrollBarConfig();
                    requestPostContent();
                    $(document).foundation();
                }
            });
});


$(document).on('change','#select-year', function() {
        var field_value = $('#select-year' + ' option:selected').text();

        $.ajax({
            data : {
                action : 'request_article_list_query',
                field_value : field_value,
                key : 'article_year'
            },
            beforeSend : function() {
                $('.article-list').fadeOut('fast');
                $('.loading').fadeIn('fast');
            },
            complete : function() {
                $('.article-list').fadeIn('fast');
                $('.loading').fadeOut('fast');
            },
            success : function(data) {
                $('.article-list').html(data);
                //console.log(data);
            }
        });
});

function requestAuthorTag(node,taxonomy) {
    if(node == '#select-author') {
        var event = 'change';
    } else {
        var event = 'click';
    }

    $(document).on(event,node,function(e) {
        e.preventDefault();

        if(node == '#select-author') {
            var tag_value = $(this).val();
        } else {
            var tag_value = $(this).text();
        }
        
        //console.log(tag_value);

        $.ajax({
            data : {
                action : 'request_article_list_tags',
                tag_value : tag_value,
                taxonomy : taxonomy
            },
            beforeSend : function() {
                $('.article-list').fadeOut('fast');
                $('.loading').fadeIn('fast');
            },
            complete : function() {
                $('.article-list').fadeIn('fast');
                $('.loading').fadeOut('fast');
            },
            success : function(data) {
                $('.article-list').html(data);
                //console.log(data);
            }
        });

    });
};

requestAuthorTag('#select-author','autores');
requestAuthorTag('.article-authors a','autores');
                
requestAuthorTag('.tag-li','tags');
requestAuthorTag('.text-app a','tags');

$(document).on('opened', '[data-reveal]', function () {
  $('body').css({
    overflowX : 'hidden'
  });
});

$(document).on('closed', '[data-reveal]', function () {
  $('body').css({
    overflowX : 'scroll'
  });
});


function searchQuery() {
    //search query function
};

(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=764603613569479";
    fjs.parentNode.insertBefore(js, fjs);
} (document, 'script', 'facebook-jssdk'));

!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");


$(document).ajaxComplete(function(){
    try{
        FB.XFBML.parse(); 
    }catch(ex){}

    twttr.widgets.load();
});

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
//
function deleteCarateres(input,i,num) {
    var myString = $(input).eq(i).text();
    var newString = myString.substr(0, myString.length - num); 
    $(input).text(newString);
};

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
                .append('<div class="violet-block small-3 abs"></div><figure class="thought-thumb abs small-9 abs" data-reveal-id="thought-modal" data-reveal></figure>');
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
	$('a[data-reveal]').on('click touchstart',function(e) {
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