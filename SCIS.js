$(document).ready(function () {
    "use strict";
 
     // Inserts a sentance to let user know to click in the box to edit. inserts into all SCIS info sheets at top and bottom
    $('.SCIS').prepend("<p style = 'color: blue; font-size: 20px;'> --Click anywhere to critique/make suggestions to the info sheet!--  </p> <br>");
     $('.SCIS').append("<p style = 'color: blue; font-size: 20px;'> --Click anywhere to critique/make suggestions to the info sheet!--  </p> <br>");
    
   
/* Opens and closes the dropdown-menu when hovering the link. "this" is used in the toggle line to allow the hover to only open the specific menu item being hovered over. There are multiple menu items within the same class '.dropdown', so this selects only the actual one
   */
    
  
$('.dropdown').hover( function() {
   
    $(".dropdown-menu",this).toggle(); 
});


/*START OF Below is the pop-op input box for sending a critique of the SCIS. */
    
    $('.SCIS').on('click', function(event) {
       $('.SCISInput').show();               // click on any SCIS and get a SCISInput box
                                                // The CSS for SCISInput is display: none;
    });
    
    //Below hides the SCISInput box when the close "X" is clicked
    
    
    $('#close').on('click', function(event) {
        $('#SCISInputX').hide();
    });
    
    
   // END OF pop-up input box for SCISInput box 
    
    
    // Below hides the dropdown-menu when clicking outside of it
     $(document).on('click', function(event) {
     if (!$(event.target).closest('.dropdown').length) {
      $('.dropdown-menu').hide();   
     }
        
    });
});