jQuery(document).ready(function(){
    $mp = jQuery.noConflict();


    $mp('.floating-menu').click(function(){
        $mp('.floating-menu-link').slideToggle();
    });
   
});