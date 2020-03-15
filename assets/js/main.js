import '../scss/main.scss';
import 'bootstrap';

var window = require('window')
window.$ = window.jQuery = window.jquery = $

$(document).ready(function() {
    var o = ["Sitios Web", "WordPress"], t = 0;
    setInterval(function() {
        $("#fraseTop").fadeOut(function() {
            $(this).html(o[t = (t + 1) % o.length]).fadeIn()
        })
    }, 4e3)

    $(".form-control").on("focus", function() {
        $(".form-control").parent().parent().removeClass("enfocado")
        $(this).parent().parent().addClass("enfocado")
    })
})

$( window ).load( function() {
    setTimeout( function() { 
        $( '.waitForLoad' ).removeClass( 'waitForLoad' ).addClass( 'animated' )
    }, 200 )
}); 

$( window ).scroll( function() {
    scrollTop = $( this ).scrollTop()
    $( '.waitForScroll' ).each( function() {
        elementOffset = $( this ).offset()
        if( elementOffset.top - scrollTop < 750 ) {
            $( this ).removeClass( 'waitForScroll' ).addClass( 'animated' )
        }
    });
}); 