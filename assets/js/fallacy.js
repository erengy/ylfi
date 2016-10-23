var app = {
    modules: [],

    add: function (module) {
        this.modules.push(module);
        if (module.init) {
            module.init(this);
        }
    },

    notify: function(event, options){
        var method = 'on'.concat(event.charAt(0).toUpperCase(), event.slice(1));
        var i = this.modules.length;
        while (i--){
            var module = this.modules[i];
            if (module[method]) {
                module[method](this, options);
            }
        }
    },
    
    run: function(){
        if (!window.jQuery) {
            return document.getElementById('jquery-script').addEventListener('load', app.run);
        }
        if (!jQuery.prototype.velocity && !/velocity/.test(this.url)) {
            return $.getScript("//cdn.jsdelivr.net/velocity/1.2.3/velocity.min.js", app.run);
        }
        app.notify('load');
    }
};







/*
 * jQuery Easing v1.3 - http://gsgd.co.uk/sandbox/jquery/easing/
 *
 * Uses the built in easing capabilities added In jQuery 1.1
 * to offer multiple easing options
 *
 * TERMS OF USE - jQuery Easing
 * 
 * Open source under the BSD License. 
 * 
 * Copyright ÂŠ 2008 George McGinley Smith
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without modification, 
 * are permitted provided that the following conditions are met:
 * 
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list 
 * of conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * 
 * Neither the name of the author nor the names of contributors may be used to endorse 
 * or promote products derived from this software without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *  COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 *  EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
 *  GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED 
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 *  NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED 
 * OF THE POSSIBILITY OF SUCH DAMAGE. 
 *
*/
app.add({
    onLoad: function(app){
        // t: current time, b: begInnIng value, c: change In value, d: duration
        jQuery.easing['jswing'] = jQuery.easing['swing'];

        jQuery.extend( jQuery.easing,
        {
            def: 'easeOutQuad',
            swing: function (x, t, b, c, d) {
                //alert(jQuery.easing.default);
                return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
            },
            easeInQuad: function (x, t, b, c, d) {
                return c*(t/=d)*t + b;
            },
            easeOutQuad: function (x, t, b, c, d) {
                return -c *(t/=d)*(t-2) + b;
            },
            easeInOutQuad: function (x, t, b, c, d) {
                if ((t/=d/2) < 1) return c/2*t*t + b;
                return -c/2 * ((--t)*(t-2) - 1) + b;
            },
            easeInCubic: function (x, t, b, c, d) {
                return c*(t/=d)*t*t + b;
            },
            easeOutCubic: function (x, t, b, c, d) {
                return c*((t=t/d-1)*t*t + 1) + b;
            },
            easeInOutCubic: function (x, t, b, c, d) {
                if ((t/=d/2) < 1) return c/2*t*t*t + b;
                return c/2*((t-=2)*t*t + 2) + b;
            },
            easeInQuart: function (x, t, b, c, d) {
                return c*(t/=d)*t*t*t + b;
            },
            easeOutQuart: function (x, t, b, c, d) {
                return -c * ((t=t/d-1)*t*t*t - 1) + b;
            },
            easeInOutQuart: function (x, t, b, c, d) {
                if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
                return -c/2 * ((t-=2)*t*t*t - 2) + b;
            },
            easeInQuint: function (x, t, b, c, d) {
                return c*(t/=d)*t*t*t*t + b;
            },
            easeOutQuint: function (x, t, b, c, d) {
                return c*((t=t/d-1)*t*t*t*t + 1) + b;
            },
            easeInOutQuint: function (x, t, b, c, d) {
                if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
                return c/2*((t-=2)*t*t*t*t + 2) + b;
            },
            easeInSine: function (x, t, b, c, d) {
                return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
            },
            easeOutSine: function (x, t, b, c, d) {
                return c * Math.sin(t/d * (Math.PI/2)) + b;
            },
            easeInOutSine: function (x, t, b, c, d) {
                return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
            },
            easeInExpo: function (x, t, b, c, d) {
                return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
            },
            easeOutExpo: function (x, t, b, c, d) {
                return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
            },
            easeInOutExpo: function (x, t, b, c, d) {
                if (t==0) return b;
                if (t==d) return b+c;
                if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
                return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
            },
            easeInCirc: function (x, t, b, c, d) {
                return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
            },
            easeOutCirc: function (x, t, b, c, d) {
                return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
            },
            easeInOutCirc: function (x, t, b, c, d) {
                if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
                return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
            },
            easeInElastic: function (x, t, b, c, d) {
                var s=1.70158;var p=0;var a=c;
                if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
                if (a < Math.abs(c)) { a=c; var s=p/4; }
                else var s = p/(2*Math.PI) * Math.asin (c/a);
                return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
            },
            easeOutElastic: function (x, t, b, c, d) {
                var s=1.70158;var p=0;var a=c;
                if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
                if (a < Math.abs(c)) { a=c; var s=p/4; }
                else var s = p/(2*Math.PI) * Math.asin (c/a);
                return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
            },
            easeInOutElastic: function (x, t, b, c, d) {
                var s=1.70158;var p=0;var a=c;
                if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
                if (a < Math.abs(c)) { a=c; var s=p/4; }
                else var s = p/(2*Math.PI) * Math.asin (c/a);
                if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
                return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
            },
            easeInBack: function (x, t, b, c, d, s) {
                if (s == undefined) s = 1.70158;
                return c*(t/=d)*t*((s+1)*t - s) + b;
            },
            easeOutBack: function (x, t, b, c, d, s) {
                if (s == undefined) s = 1.70158;
                return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
            },
            easeInOutBack: function (x, t, b, c, d, s) {
                if (s == undefined) s = 1.70158; 
                if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
                return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
            },
            easeInBounce: function (x, t, b, c, d) {
                return c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
            },
            easeOutBounce: function (x, t, b, c, d) {
                if ((t/=d) < (1/2.75)) {
                    return c*(7.5625*t*t) + b;
                } else if (t < (2/2.75)) {
                    return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
                } else if (t < (2.5/2.75)) {
                    return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
                } else {
                    return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
                }
            },
            easeInOutBounce: function (x, t, b, c, d) {
                if (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
                return jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
            }
        });
    }
});










/*! Copyright (c) 2010 Brandon Aaron (http://brandonaaron.net)
 * Licensed under the MIT License (LICENSE.txt).
 *
 * Thanks to: http://adomas.org/javascript-mouse-wheel/ for some pointers.
 * Thanks to: Mathias Bank(http://www.mathias-bank.de) for a scope bug fix.
 * Thanks to: Seamus Leahy for adding deltaX and deltaY
 *
 * Version: 3.0.4
 * 
 * Requires: 1.2.2+
 */
app.add({
    onLoad: function(app){
        var types = ['DOMMouseScroll', 'mousewheel'];

        $.event.special.mousewheel = {
            setup: function() {
                if ( this.addEventListener ) {
                    for ( var i=types.length; i; ) {
                        this.addEventListener( types[--i], handler, false );
                    }
                } else {
                    this.onmousewheel = handler;
                }
            },
            
            teardown: function() {
                if ( this.removeEventListener ) {
                    for ( var i=types.length; i; ) {
                        this.removeEventListener( types[--i], handler, false );
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
            var orgEvent = event || window.event, args = [].slice.call( arguments, 1 ), delta = 0, returnValue = true, deltaX = 0, deltaY = 0;
            event = $.event.fix(orgEvent);
            event.type = "mousewheel";
            
            // Old school scrollwheel delta
            if ( event.wheelDelta ) { delta = event.wheelDelta/120; }
            if ( event.detail     ) { delta = -event.detail/3; }
            
            // New school multidimensional scroll (touchpads) deltas
            deltaY = delta;
            
            // Gecko
            if ( orgEvent.axis !== undefined && orgEvent.axis === orgEvent.HORIZONTAL_AXIS ) {
                deltaY = 0;
                deltaX = -1*delta;
            }
            
            // Webkit
            if ( orgEvent.wheelDeltaY !== undefined ) { deltaY = orgEvent.wheelDeltaY/120; }
            if ( orgEvent.wheelDeltaX !== undefined ) { deltaX = -1*orgEvent.wheelDeltaX/120; }
            
            // Add event and delta to the front of the arguments
            args.unshift(event, delta, deltaX, deltaY);
            
            return $.event.handle.apply(this, args);
        }
    }
});










/**
 * Load Facebook Kit 
 **/
app.add({
    init: function(app){
        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    },

    onFallacyDetailedUpdate: function(){
        try{
            FB.XFBML.parse(); 
        }catch(ex){}
    }
});












/**
 * Global Fallacies object
 **/
app.add({

    init: function(){
        app.fallacies = [];
    },
    
    onLoad: function(app){
        app.fallacies = $.extend(app.fallacies, {
            curr: -1,
            index: {},
            slugIndex: {},

            push: function(item){
                item.order = this.length;
                this.index[item.slug] = item;
                this.slugIndex[item.slug] = item.slug;
                Array.prototype.push.call(this, item);
            },

            next: function(){
                if (++this.curr == this.length) {
                    this.curr = 0;
                }
                return this.current();
            },

            prev: function(){
                if (--this.curr < 0) {
                    this.curr = this.length-1;
                }
                return this.current();
            },

            find: function(q, field){
                field = field ? field : 'slug';
                if (field === 'slug') {
                    q = this.slugIndex[q];
                }
                return this.index[q] ? this.index[q] : undefined;
            },

            current: function(val){
                if (val === undefined) {
                    return this[this.curr];
                } else {
                    this.curr = val;
                }
            }
        });

        $.getJSON('/' + fallacyLocale + 'data/data.json', this.loadFallacies);
    },

    loadFallacies: function(data){
        data = data['fallacies'];
        for (var slug in data) {
            fallacy = data[slug];
            fallacy.slug = slug;
            app.fallacies.push(fallacy);
        }
        app.notify('fallaciesLoad', app.fallacies);
    }
    
});









/**
 * Detailed fallacy page
 **/
app.add({

    onFallaciesLoad: function(app, fallacies){
        //check if the loaded page is fallacy detailed page
        var fallacy, q = decodeURIComponent(window.location.pathname.replace('/', ''));

        // remove locale
        if (fallacyLocale) {
            q = q.replace(fallacyLocale, '');
        }

        if (fallacy = fallacies.find(q, 'slug')) {
            fallacy.populated = true;
            fallacies.current(fallacy.order);
            app.notify('fallacyDetailedCreate', fallacy);
        }
    },

    onFallacyDetailedCreate: function(app, fallacy){
        var fallacies = app.fallacies;
        var detailed = $('.fallacy-detailed').extend({
            
            populate: function(fallacy){
                this.show();
                this.find('.square-button i').attr('class', 'icon-'+fallacy.slug);
                this.find('h1').html(fallacy.title);
                this.find('h2').html(fallacy.head);
                this.find('.body .description').first().html(fallacy.description);
                this.find('.body .example').first().html('<h3>Örnekler</h3>' + fallacy.example);
                this.find('.body .fb-button').first().html('<span class="fb-like" data-href="http://localhost/' + fallacyLocale + fallacy.slug + '" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></span>');

                window.document.title = 'Düştüğünüz mantık hatası: ' + fallacy.title;
                $('meta[name="description"]').attr('content', fallacy.head);

                $('meta[property="og:title"]').attr('content', window.document.title);
                $('meta[property="og:image"]').attr('content', fallacy.head);
                $('meta[property="og:image:width"]').attr('content', 150);
                $('meta[property="og:image:height"]').attr('content', 150);
                $('meta[property="og:description"]').attr('content', fallacy.head);
                $('meta[property="og:description"]').attr('content', fallacy.head);
                $('meta[property="og:url"]').attr('content', window.location.href);
                $('meta[property="og:type"]').attr('content', 'website');

                app.notify('fallacyDetailedUpdate');
            },

            change: function(e){
                if (e.type == 'popstate') {
                    var direction = e.originalEvent.state.direction * -1;
                } else {
                    var direction = this.className == 'next' ? 1 : -1;
                }
                
                var fallacy = direction > 0 ? fallacies.next() : fallacies.prev();
                
                if (e.type != 'popstate') {
                    window.history.pushState({direction: direction}, fallacy.title, fallacy.slug);
                }

                detailed.find('.square-button').velocity({
                    opacity: 0,
                    translateX: direction * -200 + 'px'
                }, 250);
                detailed.find('.body').velocity({
                    opacity: 0,
                    translateX: direction * -50 + 'px'
                }, 250, onhide);

                if (window.ga) {
                    ga('send', 'pageview', fallacy.slug);
                } else {
                    console.log(fallacy.slug);
                }

                function onhide(){
                    detailed.populate(fallacy);
                    //move oposite side
                    detailed.find('.square-button').velocity({translateX: direction * 200 + 'px'}, 0);
                    detailed.find('.body').velocity({translateX: direction * 50 + 'px'}, 0);
                    
                    detailed.find('.square-button, .body').velocity({
                        opacity: 1,
                        translateX: 0
                    }, 250);
                }
            }


        });

        detailed.find('.next,.prev').on('click', detailed.change);
        $(window).on('popstate', detailed.change);


        if (!fallacy.populated) {
            detailed.populate(fallacy);

            var path = '/'+ fallacyLocale + fallacy.slug;
            window.history.pushState({}, fallacy.title, path);

            if (window.ga) {
                ga('send', 'pageview', path);
            }
        }
    }

});










/**
 * Hero on the front page
 **/
app.add({

    onLoad: function(){
        this.hero = $('.front-page-hero').map(this.create);
    },

    onFallaciesLoad: function(){

        this.hero.each(function(){
            //check if one of mouse is over a button on load
            var fallacy = $('.front-page-hero .square-button:hover')[0];
            if (fallacy) {
                this.item.setActive.call(fallacy);
            } else {
                this.next();
            }
        });

        $('.waits-for-hero').removeClass('waits-for-hero');
    },

    create: function(){

        var fallacies = app.fallacies;

        var item = {
            setActive: function(e){
                var fallacy = fallacies.find(this.getAttribute('data-key'));
                if (!fallacy || e && fallacy === fallacies.current()) {
                    return;
                }
                fallacies.current(fallacy.order);
                
                hero.items.removeClass('active');
                hero.article.fadeOut(250, hero.refresh);

                this.className += ' active';
            },
            preventDefault: function(e){
                e.preventDefault();
            }
        }

        var hero = {
            timer: undefined,
            items: $('.front-page-hero .square-button'),
            article: $('.front-page-hero-article'),
            item: item,

            resume: function(){
                if (hero.timer) {
                    hero.stop();
                }
                hero.timer = setTimeout(hero.next, 5000);
            },

            stop: function(){
                clearTimeout(hero.timer);
                hero.timer = undefined;
            },

            next: function(){
                var prev = fallacies.curr;
                fallacies.next();
                if (prev > -1) {
                    var next = hero.items[fallacies.current().order];
                    item.setActive.call(next);
                }
                hero.resume();
            },

            refresh: function(){
                var fallacy = fallacies.current();
                hero.article.empty()
                            .append('<h2>'+fallacy.title+'</h2>')
                            .append('<p>'+fallacy.head+'</p>')
                            .append('<hr>')
                            .fadeIn(250);
            },

            setDetailedTemplate: function(html){
                var template = /<!--detailed-template-->([\s\S]+)<!--detailed-template-->/.exec(html);
                if (!template) {
                    throw new Error('failed to get detailed template');
                }
                hero.detailedTemplate = $(template.pop());
            },

            selected: function(){
                var fallacyKey = this.getAttribute('data-key'),
                    fallacy = null;

                if (fallacyKey) {
                    fallacy = fallacies.find(fallacyKey);
                }
                
                if (!fallacy) {
                    fallacy = fallacies.current();
                }
                else {
                    item.setActive.call(this);
                }

                if (!fallacy) {
                    return;
                }

                hero.items.off('click.selected');

                // $('body').addClass('pause-animation');
                var miscimage_url = $('#miscpage_image').attr('src');
                app.header.change(miscimage_url);

                var clicked = $(this);
                var animated = clicked.clone();
                clicked.css('visibility', 'hidden');

                var container = $('.container.main');
                //build new layout and calculate destination's coordinates
                var article = hero.detailedTemplate;
                article.prependTo(container);
                article.find('.square-button').html(clicked.html());

                var enlarged = article.find('.square-button');
                var destination = enlarged.offset();
                destination['font-size'] = '2em';

                article.hide();
                enlarged.css('visibility', 'hidden');
                
                container.velocity({opacity: 0}, 250);

                //animate clicked picture to the center
                animated.appendTo('body')
                        .css('position', 'absolute')
                        .offset(clicked.offset())
                        .velocity(destination, {duration: 250*2, easing: [500,20]});


                setTimeout(function(){
                    app.notify('fallacyDetailedCreate', fallacy);
                    //cleanup old content. the first child is our new content (article)
                    container.children().not(":first-child").remove();
                    container.velocity({opacity: 1}, 250);
                }, 250);

                setTimeout(function(){
                    animated.remove();
                    enlarged.css('visibility', 'visible');
                    // $('body').removeClass('pause-animation');
                }, 250*2);
            }
        };

        hero.items.on('mouseenter', item.setActive);
        hero.items.on('mouseenter', hero.stop);
        //hero.items.on('mouseleave', hero.resume);
        
        hero.items.on('click', item.preventDefault);
        hero.items.on('click.selected', hero.stop);
        hero.items.on('click.selected', hero.selected);

        // $.get(hero.items.attr('href'), hero.setDetailedTemplate);
        var html = $('#detailed-template').html();
        hero.setDetailedTemplate(html);

        return hero;
    }
});











/**
 * Header
 **/
app.add({

    init: function(app){
        app.header = this.header;
    },

    header: {
        change: function(url){
            var img = $('#header img')
            img.velocity({opacity: 0}, 250, onHide);

            function onHide(){
                img.attr('src', url)
                   .velocity({opacity: 1}, 250);
            }
        }
    }
    
});










/**
 * http://paulirish.com/2011/requestanimationframe-for-smart-animating/
 * http://my.opera.com/emoller/blog/2011/12/20/requestanimationframe-for-smart-er-animating
 * requestAnimationFrame polyfill by Erik Möller. fixes from Paul Irish and Tino Zijdel
 * MIT license
 **/
app.add({
    init: function(){
        var lastTime = 0;
        var vendors = ['ms', 'moz', 'webkit', 'o'];
        for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
            window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
            window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame'] 
                                       || window[vendors[x]+'CancelRequestAnimationFrame'];
        }
     
        if (!window.requestAnimationFrame)
            window.requestAnimationFrame = function(callback, element) {
                var currTime = new Date().getTime();
                var timeToCall = Math.max(0, 16 - (currTime - lastTime));
                var id = window.setTimeout(function() { callback(currTime + timeToCall); }, 
                  timeToCall);
                lastTime = currTime + timeToCall;
                return id;
            };
     
        if (!window.cancelAnimationFrame)
            window.cancelAnimationFrame = function(id) {
                clearTimeout(id);
            };
    }
});










app.run();