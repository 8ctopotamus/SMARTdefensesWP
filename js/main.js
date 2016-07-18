(function($) {
  // $('#fullpage').fullpage({
  //   css3: true,
  //   fitToSection: true,
  //   fitToSectionDelay: 1000,
  //   scrollOverflow: true,
  //   anchors: ['intro', 'about', 'personal-protection-devices', 'self-defense', 'property-protection', 'contact-us'],
  //   menu: '.sidebar-nav',
  // });

  //active class for sidebar-nav
  // $(document).on("click", ".sidebar-nav li", function() {
  //   $(".sidebar-nav li").removeClass("active");
  //   $(this).addClass("active");
  // })
})( jQuery );


( function( $ ) {
    function addBlacklistClass() {
      $( 'a' ).each( function() {
          if ( this.href.indexOf('/wp-admin/') !== -1 ||
               this.href.indexOf('/wp-login.php') !== -1 ) {
              $( this ).addClass( 'wp-link' );
          }
      });
    }

    $( function() {
      addBlacklistClass();

      var settings = {
          anchors: 'a',
          blacklist: ".wp-link, .no-smoothstate, .post-edit-link,  a[href*='.jpg'], a[href*='.png'], a[href*='.jpeg'], a[href*='.pdf']",
          onStart: {
              duration: 280, // ms
              render: function ( $container ) {
                  $container.addClass( 'slide-out' );
              }
          },
          onAfter: function( $container ) {
              addBlacklistClass();
              $container.removeClass( 'slide-out' );
          }
      };

      $('#page').smoothState( settings );
    });
})( jQuery );

// ;(function ($) {
//   'use strict';
//   var $body    = $('html, body'), // Define jQuery collection
//       content  = $('#main').smoothState({
//         onStart : {
//           duration: 250,
//           render: function () {
//             content.toggleAnimationClass('is-exiting');
//
//             // Scroll user to the top
//             $body.animate({ 'scrollTop': 0 });
//
//           }
//         }
//       }).data('smoothState');
// })(jQuery);
