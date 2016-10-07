/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

jQuery(document).ready(function($){
    //carousel
   $('.carousel').carousel({
        interval: 5000 //changes the speed
    });
    
    //Paralax
    $(function () {
    //Cache the window object
    var $window = $(window);

    //Parallax background effect
    $('section[data-type="background"]').each(function () {
        var $bgobj = $(this); //assaining the object   
        $($window).scroll(function () {
            // scroll the background at var speed
            //the yPos is a negative value because we're scrolling it UP!
            var yPos = -($window.scrollTop() / $bgobj.data('speed'));
            // put together our final background position
            var coords = '50% ' + yPos + 'px';

            //Move the background
            $bgobj.css({
                backgroundPosition: coords
            });
        }); //ebd window scroll
    });
});
});
