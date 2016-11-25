$(function() {

  $(window).load(function () {
		var headWrap = $('.head-wrap');
		var utpWrap = $('.utp-wrap');
		var footer = $('.footer');
        var headH = $(headWrap).height();
        var wH = $(window).height();
		var uH = utpWrap.outerHeight(true);
		var fH = footer.outerHeight(true);	
		var pHeight =  uH + fH; 

       if (wH <= pHeight) {
           $('.footer').css('position', 'relative');
		   $(headWrap).css('height', 'auto');
		   console.log(uH);
		   console.log(fH);
		   console.log(pHeight);
       }
       else {
            $('.footer').css('position', 'absolute');
			$(headWrap).height(wH);
       }
    });

    $(window).resize(function () {
		var headWrap = $('.head-wrap');
		var utpWrap = $('.utp-wrap');
		var footer = $('.footer');
        var headH = $(headWrap).height();
        var wH = $(window).height();
		var uH = utpWrap.outerHeight(true);
		var fH = footer.outerHeight(true);	
		var pHeight =  uH + fH; 

       if (wH <= pHeight) {
           $('.footer').css('position', 'relative');
		   $(headWrap).css('height', 'auto');
		   console.log(uH);
		   console.log(fH);
		   console.log(pHeight);
       }
       else {
            $('.footer').css('position', 'absolute');
			$(headWrap).height(wH);
       }
    });

    

    $("a.scrollto").click(function () {
        elementClick = $(this).attr("href");
        destination = $(elementClick).offset().top - 70;
        $("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 1100);
        return false;
    });

    $('#menu').slicknav({
        label: '',
        duration: 1000,
        closeOnClick: 'true',
        closedSymbol: '&#10005;'
    });

   
  


    /*Modal window*/



    $(document).on('click', '.zvonok', function () {
        $('#exampleModal4').arcticmodal();
    });

    /*Modal window*/
    $('.formphone').inputmask("mask", {"mask": "+7 (999) 999-99-99"});
    $('.send_mail').on('click', function(e) {
        e.preventDefault();
        var elemParent = $(this).parents('form');
        var phone = $(elemParent).find('.formphone').val();
        var vopros = $(elemParent).find('.formvopros').val();
        var tarif = $(elemParent).find('.tarif').val();
        console.log(tarif);

        if (phone.length  == 0) {

            if (phone.length == 0) {
                $(elemParent).find('.formphone-wrap').addClass('red');
            }


        } else {
            $.post("mail.php", { phone:phone, vopros:vopros, tarif:tarif }, function(data) {
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

    


    

});
