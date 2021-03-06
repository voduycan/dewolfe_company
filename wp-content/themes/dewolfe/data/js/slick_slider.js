$(function() {
    $('.team').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        dots: true,
        responsive: [
            {
                breakpoint: 576,
                settings: {
                    dots: false,
                }
            }
        ]
    });
    $('.foundation').slick({
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: true,
        autoplaySpeed: 4000,
        dots: true,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false,
                }
            }
        ]
    });

    //Scroll
    $( window ).load(function(){
        $('.cap-scroll').jScrollPane();
        $('.caption-scroll').jScrollPane();
        $('#press-cards .card-body-desk').jScrollPane({ autoReinitialise: true });
    });
    $( window ).resize(function() {
        $('#cap-scroll .cap-scroll').jScrollPane();
        $('.caption-scroll').jScrollPane();
        $('#press-cards .card-body-desk').jScrollPane({ autoReinitialise: true });
        $('#press-cards .card-body-desk').data('jsp').reinitialise();
    });

    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
        if (window.pageYOffset > 0) {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
            document.getElementById("header").setAttribute("style", "top: 0");
            } else {
            document.getElementById("header").setAttribute("style", "top: -100px");
            }
            prevScrollpos = currentScrollPos;
        }
        if (window.pageYOffset == 0){
            document.getElementById("header").setAttribute("style", "top: 0");
        }
    }
    
    // Set Cookie
    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*60*1000));
        var expires = "expires="+d.toUTCString();
        document.cookie = cname + "=" + cvalue + "; " + expires;
    }
     
    // Get Cookie
    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i=0; i<ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1);
            if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
        }
        return "";
    }
    if(getCookie('userIP')){
        if(!$('#submit').hasClass('d-none')){
            $('#submit').addClass('d-none');
            $('#close').removeClass('d-none');
        }
        var interval_obj = setInterval(function() {
            if (!getCookie('userIP')) {
                $('#submit').removeClass('d-none');
                $('#close').addClass('d-none');
                clearInterval(interval_obj);
            }
        }, 5 * 1000);
    }
    document.addEventListener( 'wpcf7mailsent', function( event ) {
        if(!getCookie('userIP')){
            setCookie('userIP', 'submit', 3);
        }
        if(getCookie('userIP')){
            if(!$('#submit').hasClass('d-none')){
                $('#submit').addClass('d-none');
                $('#close').removeClass('d-none');
            }
            var interval_obj2 = setInterval(function() {
                if (!getCookie('userIP')) {
                    $('#submit').removeClass('d-none');
                    $('#close').addClass('d-none');
                    clearInterval(interval_obj2);
                }
            }, 5 * 1000);
        }
    }, false );
    // if(getCookie('userIP')){
    //     if(!$('#gform_submit_button_1').hasClass('d-none')){
    //         $('#gform_submit_button_1').addClass('d-none');
    //     }
    //     var interval_obj = setInterval(function() {
    //         if (!getCookie('userIP')) {
    //             $('#gform_submit_button_1').removeClass('d-none');
    //             clearInterval(interval_obj);
    //         }
    //     }, 5 * 1000);
    // }
    // jQuery(document).on('gform_confirmation_loaded', function(){
    //     if(!getCookie('userIP')){
    //         setCookie('userIP', 'submit', 3);
    //     }
    //     if(getCookie('userIP')){
    //         if(!$('#gform_submit_button_1').hasClass('d-none')){
    //             $('#gform_submit_button_1').addClass('d-none');
    //         }
    //         var interval_obj2 = setInterval(function() {
    //             if (!getCookie('userIP')) {
    //                 $('#gform_submit_button_1').removeClass('d-none');
    //                 clearInterval(interval_obj2);
    //             }
    //         }, 5 * 1000);
    //     }
    // });
    $(document).ready(function (){
        $('h1').wordBreakKeepAll();
        $('h2').wordBreakKeepAll();
        $('h3').wordBreakKeepAll();
        $('h4').wordBreakKeepAll();
        $('h5').wordBreakKeepAll();
        $('p').wordBreakKeepAll();
        $('ul li span').wordBreakKeepAll();
        $('.faq .card-body').wordBreakKeepAll();
        $('#exampleModal .modal-footer ul li').wordBreakKeepAll();
        $('.faq .btn-collapse').wordBreakKeepAll();

        $("#scroll-down").click(function() {
            $('html, body').animate({
                scrollTop: $(".our-client").offset().top
            }, 800);
        });
        
        $('#carouselExampleIndicators2').bind('slide.bs.carousel', function (e) {
            setTimeout(function(){ $('.cap-scroll').jScrollPane(); }, 300);
        });
        
        

        $('#crs1').addClass('active');
        $('#count0').addClass('active');
        
        $('#press-slide-0').addClass('active');

        var flag_close = true;
        $('#btn-toggle').click(function(){
            if (flag_close) {
                $('#btn-toggle img').addClass('d-none');
                $('#btn-toggle .icon-cancel').removeClass('d-none');
                flag_close = false;
            }
            else{
                $('#btn-toggle img').removeClass('d-none');
                $('#btn-toggle .icon-cancel').addClass('d-none');
                flag_close = true;
            }
        });

        $('.carousel-indicators.mobile li').click(function(){
            $('.carousel-indicators.mobile li').removeClass('active');
            $(this).addClass('active');
        });

        var hashcode = window.location.hash;
        if(hashcode){
            $('html,body').animate({scrollTop: $('section'+hashcode).offset().top + 600}, 800);
        }
        $('#submit .ajax-loader').addClass('icon-spinner');
        $('#submit').parent('p').addClass('text-center');
        $('.wpcf7-form input').click(function(){
            if($(this).hasClass('wpcf7-not-valid')){
                $(this).removeClass('wpcf7-not-valid');
            }
        });
        $('#close-btn').click(function(){
            $('#exampleModal').click();
        });
        $('#close-modal').click(function(){
            $('#exampleModal').click();
        });
        $('#no-1').addClass('active');
        $('.foundation .slick-prev').append('<span class="icon-left-arrow"></span>');
        $('.foundation .slick-next').append('<span class="icon-right-arrow"></span>');
        $('.Practical .slick-prev').append('<span class="icon-left-arrow"></span>');
        $('.Practical .slick-next').append('<span class="icon-right-arrow"></span>');
        $('.trips .slick-prev').append('<span class="icon-left-arrow"></span>');
        $('.trips .slick-next').append('<span class="icon-right-arrow"></span>');
        $('.btn-collapse').addClass('collapsed');
        $flag = false;

        $('.btn-collapse').click(function(){
            if($(this).children('.icon-btn').hasClass('icon-bottom')){
                $(this).children('.icon-btn').removeClass('icon-bottom');
                $(this).children('.icon-btn').addClass('icon-top');
            }
            else{
                $(this).children('.icon-btn').removeClass('icon-top');
                $(this).children('.icon-btn').addClass('icon-bottom');
            }
            
        });
        document.addEventListener( 'wpcf7submit', function( event ) {
            setTimeout(function() {$('.wpcf7-response-output').fadeOut('1000','linear',true)}, 5 * 1000);
        }, false );
    });
});