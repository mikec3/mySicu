var main = function() {
   
   
   
   
/* Opens 
and closes the dropdown-menu when hovering the link. "this" is used in the toggle line to allow the hover to only open the specific menu item being hovered over. There are multiple menu items within the same class '.dropdown', so this selects only the actual one
   */
$('.dropdown').hover(function () {
  
    $(".dropdown-menu",this).toggle(); 
});



    
    // Below hides the dropdown-menu when clicking outside of it
     $(document).on('click', function(event) {
     if (!$(event.target).closest('.dropdown').length) {
      $('.dropdown-menu').hide();   
     }
        
    });



// START OF index.php slides bottom nav arrows

   
    $('.arrow-next').click(function() {
  var currentSlide = $('.active-slide');
  var nextSlide = currentSlide.next();
  var currentDot = $('.active-dot');
  var nextDot = currentDot.next();

  if(nextSlide.length == 0) {
    nextSlide = $('.slide').first();
    nextDot = $('.dot').first();
  }
    currentDot.removeClass('active-dot');
    nextDot.addClass('active-dot');
  currentSlide.fadeOut(600).removeClass('active-slide');
  nextSlide.fadeIn(600).addClass('active-slide');
    });
    
    
    
    $('.arrow-prev').click(function() {
      var currentSlide = $('.active-slide');
      var prevSlide = currentSlide.prev();
      var currentDot = $('.active-dot');
      var prevDot = currentDot.prev();
        
        if (prevSlide.length == 0) {
         prevSlide = $('.slide').last();  
            prevDot = $('.dot').last();
        }
        
        currentDot.removeClass('active-dot');
        prevDot.addClass('active-dot');
        currentSlide.fadeOut(600).removeClass('active-slide');
        prevSlide.fadeIn(600).addClass('active-slide');
    });
};



// END OF index.php slides bottom nav arrows
$(document).ready(main);