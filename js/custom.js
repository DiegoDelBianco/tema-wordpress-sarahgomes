

document.getElementById('nav-button').addEventListener('click', function(e){

        e.preventDefault(); 
        document.getElementById("menu-mask").classList.add("is-active");
        document.getElementById("mobile-menu-holder").classList.add("is-active");
})


document.getElementById('exit-mobile').addEventListener('click', function(e){ e.preventDefault(); closeMenu(); });

document.getElementById('menu-mask').addEventListener('click', function(e){ e.preventDefault(); closeMenu(); });


function closeMenu(){
        document.getElementById("menu-mask").classList.remove("is-active");
        document.getElementById("mobile-menu-holder").classList.remove("is-active");
}


/*
$('.nav-button').on('click', function(e) {
        e.preventDefault(); 
        $('.mobile-menu-holder, .menu-mask').addClass('is-active'); 
        $('body').addClass('has-active-menu');
    }

);

$('.exit-mobile, .menu-mask').on('click', function(e) {
        e.preventDefault(); 
        $('.mobile-menu-holder, .menu-mask').removeClass('is-active'); 
        $('body').removeClass('has-active-menu');
    }

);

$('.menu-mobile > li.menu-item-has-children > a').on('click', function(e) {
        e.preventDefault(); e.stopPropagation(); 
        if($(this).parent().hasClass('menu-open')) $(this).parent().removeClass('menu-open'); 
        else {
            $(this).parent().addClass('menu-open');
        }
    }

);
*/
/*$(".menu-nav li").on('mouseenter mouseleave', function(e) {
        if($('ul', this).length) {
            var elm=$('.sub-menu', this); var off=elm.offset(); var l=off.left; var w=elm.width(); var docW=$(window).width(); var isEntirelyVisible=(l+w<=docW); if( !isEntirelyVisible) {
                $(this).addClass('edge');
            }

            else {
                $(this).removeClass('edge');
            }
        }
    }

);*/

