jQuery(document).ready(function($){

    //navbar dropdown menus and appearances
    var $parent = $(".navbar-nav");

    var $syls = $parent.find("li").eq(0);
    var $sylsDrop = $("#syls-drop");

    var $danu = $parent.find("li").eq(1);
    var $danuDrop = $("#danu-drop");

    var $myce = $parent.find("li").eq(2); 
    var $myceDrop = $("#myce-drop");

    $syls.mouseenter(function(){
        $danuDrop.addClass("hidden");
        $myceDrop.addClass("hidden");
        $sylsDrop.removeClass("hidden");
    });

    $sylsDrop.mouseleave(function(){
        $sylsDrop.addClass("hidden");
    });

    $danu.mouseenter(function(){
        $sylsDrop.addClass("hidden");
        $myceDrop.addClass("hidden");
        $danuDrop.removeClass("hidden");
    });

    $danuDrop.mouseleave(function(){
        $danuDrop.addClass("hidden");
    });

    $myce.mouseenter(function(){
        $danuDrop.addClass("hidden");
        $sylsDrop.addClass("hidden");
        $myceDrop.removeClass("hidden");
    });

    $myceDrop.mouseleave(function(){
        $myceDrop.addClass("hidden");
    });

    var $borger = $("#burger-icon");

    var $borgerDrop = $("#borger-drop");

    $borger.click(function() {
        $borgerDrop.toggleClass("hidden");
    });


    // pop-in tooltip on images

    var $price = $(".field--name-field-price");
    var $name = $(".field--name-title");
    var $teaser = $(".item-teaser");


    $teaser.hover(function(){
        $(this).find(".field--name-field-price").animate({width: 'toggle'},150);
        $(this).find(".field--name-title").animate({width: 'toggle'}, 150);
    });



    // scroll function for ever paragraph gallery
    var $scrollBack = $(".field--name-field-back-scroll");
    var $scrollFwrd = $(".field--name-field-forward-scroll");
    

    $scrollBack.click(function(){
        var $gallery = $(this).closest(".paragraph--type--galleries").find(".field--name-field-items");
        $gallery.scrollLeft($gallery.scrollLeft() - 300);
    });

    $scrollFwrd.click(function(){
        var $gallery = $(this).closest(".paragraph--type--galleries").find(".field--name-field-items");
        $gallery.scrollLeft($gallery.scrollLeft() + 300);
    });

});