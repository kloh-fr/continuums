/* Tester l’activation du js
 * @author Gaël Poupard
 * @see https://twitter.com/ffoodd_fr
 * @note Inspiré par Modernizr
 * @author http://modernizr.com/
 * @see http://modernizr.github.io/Modernizr/annotatedsource.html#section-103
*/
document.documentElement.className=document.documentElement.className.replace(/\bno-js\b/g,'')+' js';


/* Correction du bug des ancres sous Chrome
 * @see http://www.nczonline.net/blog/2013/01/15/fixing-skip-to-content-links/
 * @see http://blog.atalan.fr/des-liens-devitement-astucieux/
*/
window.addEventListener("hashchange", function(event) {
    var element = document.getElementById(location.hash.substring(1));
    if (element) {
        if (!/^(?:a|select|input|button)$/i.test(element.tagName)) {
            element.tabIndex = -1;
        }
        element.focus();
    }
}, false);


/* Liens d’évitements > Persistance de l’affichage
 * @see http://blog.atalan.fr/des-liens-devitement-astucieux/
*/
[].forEach.call(document.querySelectorAll(".skip"), function(el) {
  el.addEventListener("focus", function() {
    el.classList.add("show");
  });
});


/* Menu fixé en haut de page au scroll
 * @see http://wentsch.me/2013/09/keep-navigation-bar-fixed-after-scrolling-certain-element
 * @see http://stackoverflow.com/questions/12343714/typeerror-is-not-a-function-when-calling-jquery-function
*/
jQuery(function ($) {
  var fixednav = $('#nav').offset();
  console.log(fixednav.top);
    $(window).bind('scroll', function() {
      if ($(window).scrollTop() > fixednav.top) {
        $('#nav').addClass('fixed');
       }
       else {
         $('#nav').removeClass('fixed');
       }
    });
});