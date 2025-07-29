/**
 * @file
 * Global utilities.
 *
 */
(function (Drupal) {

  'use strict';

  Drupal.behaviors.gobbo_tema = {
    attach: function (context, settings) {
    
    }
  };


})(Drupal);


// jQuery(document).ready(function () {
//   console.log('OSO ENTRNADO EN JQUERY DOCUMENT')
//   $('button.staff-accordion').on('click', function(e){
//     console.log('OSO CLICK BOTON ORGANIGRAMA')
//     $(this).toggleClass('active');
//     if ($(this).hasClass('staff-accordion-main')) {
//       var _ul = $(this).next().find('ul.staff-ul-main');
//       _ul.toggleClass('staff-ul-main-show');
//     } else {
//       var _panel = $(this).next();
//       _panel.toggleClass('show');
//     }

//   });
// });