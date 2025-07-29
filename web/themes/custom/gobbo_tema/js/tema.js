(function (Drupal, drupalSettings) {
  Drupal.behaviors.themeSwitcher = {
    attach: function (context, settings) {
      var switcherButton = document.getElementById('theme-switcher-button');
      const iconoTema = document.getElementById('icono-tema'); 

      var currentTheme = localStorage.getItem('theme') || 'light';

      function applyTheme(theme) {

        document.documentElement.setAttribute("data-theme", currentTheme);

        var stylesheet = document.getElementById('theme-stylesheet');
        // stylesheet.setAttribute('href', theme === 'dark' ? drupalSettings.themeSwitcher.darkTheme : drupalSettings.themeSwitcher.lightTheme);
        localStorage.setItem('theme', theme);
        if (theme === 'dark') {
          iconoTema.classList.add('bi-brightness-high-fill')
          iconoTema.classList.remove('bi-moon-fill')
        } else {
          iconoTema.classList.add('bi-moon-fill')
          iconoTema.classList.remove('bi-brightness-high-fill')
          localStorage.setItem('theme', 'light');
        }
      }

      switcherButton.addEventListener('click', function () {
        currentTheme = currentTheme === 'light' ? 'dark' : 'light';
        applyTheme(currentTheme);
      });

      applyTheme(currentTheme);
    }
  };


})(Drupal, drupalSettings);

(function($){

    jQuery(".nav-link").on("click", function () {
    var iconoElemento = jQuery(this).find(".bi-chevron-up");

    if (iconoElemento.length > 0) {
      iconoElemento.removeClass("bi-chevron-up");
      iconoElemento.addClass("bi-chevron-down");
    } else {
      iconoElemento = jQuery(this).find(".bi-chevron-down");
      iconoElemento.removeClass("bi-chevron-down");
      iconoElemento.addClass("bi-chevron-up");
    }

    //   jQuery(this).find(".dropdown-menu").css();
  });
  $(document).ready(function(){
   'use strict';
   //============================== COUNTER-UP =========================
   $('button.staff-accordion.level_1').on('click', function(e){
    $(this).toggleClass('active');
    if ($(this).hasClass('staff-accordion-main')) {
      var _ul = $(this).next().find('ul.staff-ul-main');
      _ul.toggleClass('staff-ul-main-show');
    } else {
      var _panel = $(this).next();    
      _panel.toggleClass('show');
    }

  }); 
  $('button.staff-accordion.level_0').on('click', function(e){
    $(this).toggleClass('active');
    var _ul = $('li.level_1');
    _ul.toggleClass('show');

  }); 
  });
 })(jQuery);