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

    if (typeof(Storage) !== 'undefined') {
        if ( localStorage.getItem('blackMode') !== 'undefined' ) {
            if ( localStorage.getItem('blackMode') == 1 ){
              $('body').addClass('black-mode')
              $('#blackMode').addClass('btn--active')
              $('#blackMode').html('<i class="fas fa-toggle-on"></i>')
            }
        }
    }

    $(".form-control").on("focus", function() {
        $(".form-control").parent().parent().removeClass("enfocado")
        $(this).parent().parent().addClass("enfocado")
    })
})

$(window).scroll(function() {
    if ($(this).scrollTop() > 150){  
        $('body').addClass("sticky");
    }else{
        $('body').removeClass("sticky");
    }
})

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

function blackMode(elem) {    
    if ( $(".black-mode")[0] ){
      $('#blackMode').removeClass("btn--active")
      $('#blackMode').html('<i class="fas fa-toggle-off"></i>')
      $("body").removeClass("black-mode")
      localStorage.setItem("blackMode", 0)
    } else {
      $('#blackMode').addClass("btn--active")
      $('#blackMode').html('<i class="fas fa-toggle-on"></i>')
      $("body").addClass("black-mode")
      localStorage.setItem("blackMode", 1)
    }
}
window.blackMode = blackMode;

$('.navbar-collapse a').click(function(){
    $(".navbar-collapse").collapse('hide')
})
