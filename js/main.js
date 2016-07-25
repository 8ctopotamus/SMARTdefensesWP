(function($) {
// $body = $(document).find('body');
// $(function() {
//   $body.find('.single_add_to_cart_button').addClass("no-animation");
// })

//     function addBlacklistClass() {
//       $('a').each( function() {
//           if ( this.href.indexOf('/wp-admin/') !== -1 ||
//                this.href.indexOf('/wp-login.php') !== -1 ) {
//               $( this ).addClass( 'wp-link' );
//           }
//       });
//     }
//
//     $( function() {
//       'use strict';
//       addBlacklistClass();
//
//       // var url = smoothState.href // <-- get the current url
//       // var doc = smoothState.cache[url].doc // <-- full html response
//       var settings = {
//           anchors: 'a',
//           cache: true,
//           prefetch: true,
//           blacklist: ".wp-link, .no-smoothstate, .post-edit-link,  a[href*='.jpg'], a[href*='.png'], a[href*='.jpeg'], a[href*='.pdf'], .ajax_add_to_cart, .remove",
//           cacheLength: 0,
//           onReady: {
//             duration: 280,
//             render: function($container, $newContent) {
//               var url = smoothState.href; // <-- get the current url
//               var doc = smoothState.cache[url].doc; // <-- full html response
//               console.log(url)
//             }
//           },
//           onStart: {
//             duration: 280, // ms
//             render: function ( $container, $newContent ) {
//                 $container.addClass( 'slide-out' );
//                 $container.html($newContent);
//             }
//           },
//           onAfter: function( $container ) {
//             addBlacklistClass();
//             console.log($('body').attr('class').split(/\s+/))
//             console.log($container)
//             $container.removeClass( 'slide-out' );
//           }
//       },
//       smoothState = $('#page').smoothState(settings).data('smoothState');
//     });
//
//
//
//
// // Try #2
// // StackOverflow: https://github.com/miguel-perez/smoothState.js/issues/103
// // Code: http://pudge.se/NrQ4
//
// // var $component, SmoothState,
// //   bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; };
// //
// // SmoothState = (function() {
// //   function SmoothState($context) {
// //     this.onReady = bind(this.onReady, this);
// //     this.init = bind(this.init, this);
// //     this.$context = $context;
// //     this.$smoothStateContainer = jQuery('#page');
// //     this.$body = jQuery('body');
// //     this.init();
// //   }
// //
// //   SmoothState.prototype.init = function() {
// //     var options;
// //     console.log('smoothState init');
// //
// //     options = {
// //       prefetch: true,
// //       cacheLength: 2,
// //       onStart: {
// //         duration: 400,
// //         render: (function(_this) {
// //           return function($container) {
// //             $container.addClass('slide-out');
// //             _this.$body.velocity("scroll", {
// //               duration: 500,
// //               delay: 0
// //             });
// //             return WTF.smoothState.restartCSSAnimations();
// //           };
// //         })(this)
// //       },
// //       onReady: {
// //         duration: 0,
// //         render: (function(_this) {
// //           return function($container, $newContent) {
// //             var $html, doc, meta, url;
// //             $container.removeClass('slide-out');
// //             $container.html($newContent);
// //             url = WTF.smoothState.href;
// //             doc = WTF.smoothState.cache[url].doc;
// //             $html = $.htmlDoc(doc);
// //             meta = {};
// //             meta.bodyId = $html.find('body').attr('id');
// //             meta.bodyClasses = $html.find('body').attr('class');
// //             meta.bodyCSS = $html.find('body').attr('style');
// //             $('body').removeClass().addClass(meta.bodyClasses);
// //             $('body').attr('id', meta.bodyId);
// //             $('body').attr('style', meta.bodyCSS);
// //             return _this.onReady();
// //           };
// //         })(this)
// //       }
// //     };
// //
// //     return WTF.smoothState = jQuery('#page').smoothState(options).data('smoothState');
// //   };
// //
// //   SmoothState.prototype.onReady = function() {
// //     return this.$body.trigger('pageload');
// //   };
// //
// //   return SmoothState;
// //
// // })();
// //
// // $component = jQuery("#page");
// //
// // if ($component.length > 0) {
// //   new SmoothState($component);
// // }
//
//
//
})(jQuery);
//
// // (function($, undefined) {
// //     var isFired = false;
// //     var oldReady = jQuery.fn.ready;
// //     $(function() {
// //         isFired = true;
// //         $(document).ready();
// //     });
// //     jQuery.fn.ready = function(fn) {
// //         if(fn === undefined) {
// //             $(document).trigger('_is_ready');
// //             return;
// //         }
// //         if(isFired) {
// //             window.setTimeout(fn, 1);
// //         }
// //         $(document).bind('_is_ready', fn);
// //     };
// // })(jQuery);
//
//
//
// $(function() {
//     var $body = $('html, body'),
//     content = $('#page').smoothState({
//         prefetch: true,
//         pageCacheSize: 4,
//         // blacklist anything you dont want targeted
//         blacklist : '',
//         development : false,
//         // Runs when a link has been activated
//         onStart: {
//             duration: 250, // Duration of our animation
//             render: function (url, $container) {
//                 // toggleAnimationClass() is a public method
//                 // for restarting css animations with a class
//                 $container.addClass( 'slide-out' );
//                 // Scroll user to the top
//                 $body.animate({
//                     scrollTop: 0
//                 });
//             }
//         },
//         onEnd : {
//             duration: 0, // Duration of the animations, if any.
//             render: function (url, $container, $content) {
//                 $body.css('cursor', 'auto');
//                 $body.find('a').css('cursor', 'auto');
//                 $container.html($content);
//                 // Trigger document.ready and window.load
//                 $(document).ready();
//                 $(window).trigger('load');
//             }
//         },
//         onAfter : function(url, $container, $content) {
// $container.removeClass( 'slide-out' );
//         }
//     }).data('smoothState');
//     //.data('smoothState') makes public methods available
// });
//
// (function($, undefined) {
//     var isFired = false;
//     var oldReady = jQuery.fn.ready;
//     $(function() {
//         isFired = true;
//         $(document).ready();
//     });
//     jQuery.fn.ready = function(fn) {
//         if(fn === undefined) {
//             $(document).trigger('_is_ready');
//             return;
//         }
//         if(isFired) {
//             window.setTimeout(fn, 1);
//         }
//         $(document).bind('_is_ready', fn);
//     };
// })(jQuery);
