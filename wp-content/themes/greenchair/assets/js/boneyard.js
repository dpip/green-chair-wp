// Removed functionality that might be useful 

//+++ Adds and removes active class depending on viewport width

$(window).on('resize load', function(){
    if($(window).width()>924){ 
        $('.dropdown-toggle').addClass('toplevel-active');
     console.log('window is greater than 924')
    } else {
        $('.dropdown-toggle').removeClass('toplevel-active'); 
    }
   });

// +++ If dropdown-toggle has class toplevel-active, route to the menu item's url

$('.dropdown-toggle').on('click', function(event) { 
    event.preventDefault();
    let location = $(this).attr('href');
    if($(this).hasClass('toplevel-active')) {
        window.location.href = location;
    console.log('clicked', location);
    return false; 
    }
});

