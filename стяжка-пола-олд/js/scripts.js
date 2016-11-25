//$(window).load(function(){$('.wrapper').focus();});$(document).ready(function(){$(".nav a").each(function(i){$(this).width($(this).width()).css('padding',0);});$('.docs a').magnificPopup({type:'image',gallery:{enabled:true},fixedContentPos:true,removalDelay:300,mainClass:'mfp-fade'});$(".nav a").each(function(i){$('.reviews-item-images:eq('+i+')  a').magnificPopup({type:'image',gallery:{enabled:true},fixedContentPos:true,removalDelay:300,mainClass:'mfp-fade'});});$('input[name="phone"]').mask("+7(999) 999-9999");$('.popup-fixed').click(function(e){if($(e.target).closest('.popup-content').length==0){$('.popup-overlay').css('display','none');$('.popup-fixed').css('display','none');$('.popup').css('display','none');}});$('.popup__close').click(function(){$('.popup-overlay').css('display','none');$('.popup-fixed').css('display','none');$('.popup').css('display','none');});$('.open-popup-call').click(function(event){event.preventDefault();$('.popup-overlay').css('display','block');$('.popup-fixed').css('display','block');$('.popup-call').css('display','block');});$('a[href^="#"]').click(function(){var scroll_el=$(this).attr('href');if(scroll_el.length!=0){if(!device.tablet()&&!device.mobile()){$('.wrapper').scrollTo(scroll_el,300,{offset:{top:-35}});}else{$('html,body').scrollTo(scroll_el,300,{offset:{top:-35}});}}return false;});if(!device.tablet()&&!device.mobile()){$('.wrapper').scroll(function(){checkSection();});}else{$(window).scroll(function(){checkSection();});}if(!device.tablet()&&!device.mobile()){$('.wrapper').scroll(function(){var scrollWidth=getScrollBarWidth();if($('.header').offset().top<-60){$('.nav-block').addClass('nav--fixed');$('.nav-block, .backfon1').css('right',scrollWidth+'px');}else{$('.nav-block').removeClass('nav--fixed');}});}else{$(window).scroll(function(){if($(window).scrollTop()>60){$('.nav-block').addClass('nav--fixed');}else{$('.nav-block').removeClass('nav--fixed');}});}var valid={rules:{phone:{required:true,minlength:16,maxlength:16},email:{required:true,email:true},message:{required:true}},errorElement:'div',submitHandler:function(form){$.post("mail.php",{'Заголовок':$(form).find('input[name="title"]').val(),'Имя':$(form).find('input[name="name"]').val(),'Телефон':$(form).find('input[name="phone"]').val(),'Email':$(form).find('input[name="email"]').val(),'Вопрос':$(form).find('textarea[name="message"]').val()});clearValue();closePopup();openPopupThanks();},errorPlacement:function(error,element){element.addClass('error');},success:function(label,element){}};$('#form1').validate(valid);$('#form2').validate(valid);$('#form3').validate(valid);$('#form4').validate(valid);$('#form5').validate(valid);$('#form6').validate(valid);});function openPopupThanks(){$('.popup-overlay').css('display','block');$('.popup-fixed').css('display','block');$('.popup-thanks').css('display','block');}function closePopup(){$('.popup-overlay').css('display','none');$('.popup-fixed').css('display','none');$('.popup').css('display','none');}function clearValue(){$('input[type="text"]').val('');$('textarea').val('');$('.wrap-element__placeholder').show();}function checkSection(){if($('.wrapper').scrollTop()>3){$('.header-logo').addClass("sticky");}else{$('.header-logo').removeClass("sticky");}if($('.wrapper').scrollTop()>1){$('.header-contacts').addClass("sticky");}else{$('.header-contacts').removeClass("sticky");}if($('.wrapper').scrollTop()>1){$('.header-phone').addClass("sticky");}else{$('.header-phone').removeClass("sticky");}if($('.wrapper').scrollTop()>1){$('.backfon1').addClass("sticky");}else{$('.backfon1').removeClass("sticky");}if($('.wrapper').scrollTop()>1){$('.header-description').addClass("sticky");}else{$('.header-description').removeClass("sticky");}if($('.wrapper').scrollTop()>1){$('.block01').addClass("sticky");}else{$('.block01').removeClass("sticky");}if($('.wrapper').scrollTop()>5){$('.header-top').addClass("sticky");}else{$('.header-top').removeClass("sticky");}$(".section").each(function(i){var $this=$(this),topEdge=$this.offset().top-70,bottomEdge=topEdge+$this.height(),wScroll=$('body').scrollTop();if(topEdge<wScroll&&bottomEdge>wScroll){var currentId=$(this).attr('id'),reqLink=$('.nav a[href="#'+currentId+'"');if(currentId){$('.nav a').removeClass('active')
//reqLink.addClass('active');}else{$('.nav a').removeClass('active')}}});}function getScrollBarWidth(){var inner=document.createElement('p');inner.style.width='100%';inner.style.height='200px';var outer=document.createElement('div');outer.style.position='absolute';outer.style.top='0px';outer.style.left='0px';outer.style.visibility='hidden';outer.style.width='200px';outer.style.height='150px';outer.style.overflow='hidden';outer.appendChild(inner);document.body.appendChild(outer);var w1=inner.offsetWidth;outer.style.overflow='scroll';var w2=inner.offsetWidth;if(w1==w2)w2=outer.clientWidth;document.body.removeChild(outer);return(w1-w2);};

$(window).load(function() {
    $('.wrapper').focus();
});
$(document).ready(function() {
    $(".nav a").each(function(i) {
        $(this).width($(this).width()).css('padding', 0);
    });
    $('.docs a').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        },
        fixedContentPos: true,
        removalDelay: 300,
        mainClass: 'mfp-fade'
    });
    $(".nav a").each(function(i) {
        $('.reviews-item-images:eq(' + i + ')  a').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            },
            fixedContentPos: true,
            removalDelay: 300,
            mainClass: 'mfp-fade'
        });
    });
    $('input[name="phone"]').mask("+7(999) 999-9999");
    $('.popup-fixed').click(function(e) {
        if ($(e.target).closest('.popup-content').length == 0) {
            $('.popup-overlay').css('display', 'none');
            $('.popup-fixed').css('display', 'none');
            $('.popup').css('display', 'none');
        }
    });
    $('.popup__close').click(function() {
        $('.popup-overlay').css('display', 'none');
        $('.popup-fixed').css('display', 'none');
        $('.popup').css('display', 'none');
    });
    $('.open-popup-call').click(function(event) {
        event.preventDefault();
        $('.popup-overlay').css('display', 'block');
        $('.popup-fixed').css('display', 'block');
        $('.popup-call').css('display', 'block');
    });
    $('a[href^="#"]').click(function() {
        var scroll_el = $(this).attr('href');
        if (scroll_el.length != 0) {
            //if (!device.tablet() && !device.mobile()) {
                $('.wrapper').scrollTo(scroll_el, 300, {
                    offset: {
                        top: -35
                    }
                });
            /*} else {
                $('html,body').scrollTo(scroll_el, 300, {
                    offset: {
                        top: -35
                    }
                });
            }*/
        }
        return false;
    });
    //if (!device.tablet() && !device.mobile()) {
        $('.wrapper').scroll(function() {
            checkSection();
        });
    /*} else {
        $(window).scroll(function() {
            checkSection();
        });
    } */
    //if (!device.tablet() && !device.mobile()) {
        $('.wrapper').scroll(function() {
            var scrollWidth = getScrollBarWidth();
            if ($('.header').offset().top < -60) {
                $('.nav-block, .toggle').addClass('nav--fixed');
                $('.nav-block, .backfon1').css('right',
                    scrollWidth + 'px');
            } else {
                $('.nav-block, .toggle').removeClass('nav--fixed');
            }
        });
    /*} else {
        $(window).scroll(function() {
            if ($(window).scrollTop() > 60) {
                $('.nav-block, .toggle').addClass('nav--fixed');
            } else {
                $('.nav-block, .toggle').removeClass('nav--fixed');
            }
        });
    } */
    var valid = {
        rules: {
            phone: {
                required: true,
                minlength: 16,
                maxlength: 16
            },
            email: {
                required: true,
                email: true
            },
            message: {
                required: true
            }
        },
        errorElement: 'div',
        submitHandler: function(form) {
            if (typeof CallbackKiller !== 'undefined') {
                CallbackKiller.newCall( $(form).find('input[name="phone"]').val() );
            }
            $.post("mail.php", {
                'Заголовок': $(form).find(
                    'input[name="title"]').val(),
                'Имя': $(form).find(
                    'input[name="name"]').val(),
                'Телефон': $(form).find(
                    'input[name="phone"]').val(),
                'Email': $(form).find(
                    'input[name="email"]').val(),
                'Вопрос': $(form).find(
                    'textarea[name="message"]').val()
            });
            clearValue();
            closePopup();
            openPopupThanks();
        },
        errorPlacement: function(error, element) {
            element.addClass('error');
        },
        success: function(label, element) {}
    };
    $('#form1').validate(valid);
    $('#form2').validate(valid);
    $('#form3').validate(valid);
    $('#form4').validate(valid);
    $('#form5').validate(valid);
    $('#form6').validate(valid);
});

function openPopupThanks() {
    $('.popup-overlay').css('display', 'block');
    $('.popup-fixed').css('display', 'block');
    $('.popup-thanks').css('display', 'block');
}

function closePopup() {
    $('.popup-overlay').css('display', 'none');
    $('.popup-fixed').css('display', 'none');
    $('.popup').css('display', 'none');
}

function clearValue() {
    $('input[type="text"]').val('');
    $('textarea').val('');
    $('.wrap-element__placeholder').show();
}

function checkSection() {
    if ($('.wrapper').scrollTop() > 3) {
        $('.header-logo').addClass("sticky");
    } else {
        $('.header-logo').removeClass("sticky");
    } if ($('.wrapper').scrollTop() > 1) {
        $('.header-contacts').addClass("sticky");
    } else {
        $('.header-contacts').removeClass("sticky");
    } if ($('.wrapper').scrollTop() > 1) {
        $('.header-phone').addClass("sticky");
    } else {
        $('.header-phone').removeClass("sticky");
    } if ($('.wrapper').scrollTop() > 1) {
        $('.backfon1').addClass("sticky");
    } else {
        $('.backfon1').removeClass("sticky");
    } if ($('.wrapper').scrollTop() > 1) {
        $('.header-description').addClass("sticky");
    } else {
        $('.header-description').removeClass("sticky");
    } if ($('.wrapper').scrollTop() > 1) {
        $('.block01').addClass("sticky");
    } else {
        $('.block01').removeClass("sticky");
    } if ($('.wrapper').scrollTop() > 5) {
        $('.header-top').addClass("sticky");
    } else {
        $('.header-top').removeClass("sticky");
    }
    $(".section").each(function(i) {
        var $this = $(this),
            topEdge = $this.offset().top - 70,
            bottomEdge = topEdge + $this.height(),
            wScroll = $('body').scrollTop();
        if (topEdge < wScroll && bottomEdge > wScroll) {
            var currentId = $(this).attr('id'),
                reqLink = $('.nav a[href="#' + currentId + '"');
            if (currentId) {
                $('.nav a').removeClass('active')
                reqLink.addClass('active');
            } else {
                $('.nav a').removeClass('active')
            }
        }
    });
}

function getScrollBarWidth() {
    var inner = document.createElement('p');
    inner.style.width = '100%';
    inner.style.height = '200px';
    var outer = document.createElement('div');
    outer.style.position = 'absolute';
    outer.style.top = '0px';
    outer.style.left = '0px';
    outer.style.visibility = 'hidden';
    outer.style.width = '200px';
    outer.style.height = '150px';
    outer.style.overflow = 'hidden';
    outer.appendChild(inner);
    document.body.appendChild(outer);
    var w1 = inner.offsetWidth;
    outer.style.overflow = 'scroll';
    var w2 = inner.offsetWidth;
    if (w1 == w2) w2 = outer.clientWidth;
    document.body.removeChild(outer);
    return (w1 - w2);
};