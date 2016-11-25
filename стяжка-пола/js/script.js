$(function() {

   /*$(window).load(function () {
       var head = $('.head');
        var headH = $(head).height();
        var wH = $(window).height();

       if (wH > 700) {
           $(head).height(wH);
       }
       else {
           $(head).css('height', 'auto');
       }
    });

    $(window).resize(function () {
        var head = $('.head');
        var headH = $(head).height();
        var wH = $(window).height();

        if (wH > 700) {
            $(head).height(wH);
        }
        else {
            $(head).css('height', 'auto');
        }
    });*/

    

    $("a.scrollto").click(function () {
        elementClick = $(this).attr("href");
        destination = $(elementClick).offset().top - 0;
        $("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 1100);
        return false;
    });

    $('#menu').slicknav({
        label: '',
        duration: 1000,
        closeOnClick: 'true',
        closedSymbol: '&#10005;'
    });



    /*Форма заявки */
    $(document).on('click', '.zamer', function () {
        $('#exampleModal5').arcticmodal();
    });

    $(document).on('click', '.zvonok', function () {
        $('#exampleModal4').arcticmodal();
    });

    $(document).on('click', '.vopros', function () {
        $('#exampleModal6').arcticmodal();
    });



    /*Modal window*/
    $('.formphone').inputmask("mask", {"mask": "+7 (999) 999-99-99"});
    
    $('.send_mail').on('click', function(e) {
        e.preventDefault();
        var elemParent = $(this).parents('form');
        var phone = $(elemParent).find('.formphone').val();
        var vopros = $(elemParent).find('.formvopros').val();
        var tarif = $(elemParent).find('.tarif').val();
        

        if (phone.length  == 0) {

            if (phone.length == 0) {
                $(elemParent).find('.formphone-wrap').addClass('red');
            }


        } else {
            // $.post("/стяжка-пола/amocrm/handler.php", { phone:phone}, function(data) {
                $.post("/стяжка-пола/mail.php", { phone:phone}, function(data) {
                $.arcticmodal('close');
                showthanks();
                $('input').val('');
            });
        }
        return false;
    });

    $('input').keyup(function() {
        $(this).parent().removeClass('red');
    });


    function showthanks() {
        window.location.href = "/спасибо";
    }

    
    /* Карта Яндекс*/

    ymaps.ready(init);
    var myMap,
        myPlacemark;

    function init(){

        myMap = new ymaps.Map("map", {
            center: [55.811208, 37.83055],
            zoom: 16,
            controls: ['zoomControl']
        });

        myPlacemark = new ymaps.Placemark([55.811208, 37.83055], {
            hintContent: 'Москва!',
            balloonContent: 'Столица России'
        }, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: 'img/map-icon.png',
            // Размеры метки.
            iconImageSize: [33, 50]
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).

        });

        myMap.geoObjects.add(myPlacemark);
        myMap.behaviors.disable('scrollZoom');

    }

    /*lighcace */
    $('a[data-rel^=lightcase]').lightcase({
    video:{
        width : 640,
        height : 360,
        poster : '',
        preload : 'auto',
        controls : true,
        autobuffer : true,
        autoplay : true,
        loop : false
        }
    });

    $('.answer-item button').click(function(){
        $(this).parent().find('.box-hide').slideToggle();
       //$('.box-hide')
    });




});
