<!doctype html>
<!--[if IE 7]>			<html class="ie ie7"> <![endif]-->
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html  lang="ru"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<!-- <meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="format-detection" content="telephone=no"> -->
    <meta name="viewport" content="width=device-width">

	<title>ФракталСтрой</title>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=latin,cyrillic-ext' rel='stylesheet'>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/media.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
    <link rel="stylesheet" href="https://cdn.callbackkiller.com/widget/cbk.css">




	
	





<noindex><script async src="data:text/javascript;charset=utf-8;base64,ZnVuY3Rpb24gbG9hZHNjcmlwdChlLHQpe3ZhciBuPWRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoInNjcmlwdCIpO24uc3JjPSIvL2xwdHJhY2tlci5ydS9hcGkvIitlO24ub25yZWFkeXN0YXRlY2hhbmdlPXQ7bi5vbmxvYWQ9dDtkb2N1bWVudC5oZWFkLmFwcGVuZENoaWxkKG4pO3JldHVybiAxfXZhciBpbml0X2xzdGF0cz1mdW5jdGlvbigpe2xzdGF0cy5zaXRlX2lkPTEwMjkwO2xzdGF0cy5yZWZlcmVyKCl9O3ZhciBqcXVlcnlfbHN0YXRzPWZ1bmN0aW9uKCl7alFzdGF0Lm5vQ29uZmxpY3QoKTtsb2Fkc2NyaXB0KCJzdGF0c19hdXRvLmpzIixpbml0X2xzdGF0cyl9O2xvYWRzY3JpcHQoImpxdWVyeS0xLjEwLjIubWluLmpzIixqcXVlcnlfbHN0YXRzKQ=="></script></noindex>



	
</head>
<?php
$type = $_GET['type'];
$utm = $_GET['utm'];
if($type == 'psp') {
    $multiTitle1 = 'Преимущества полусухой стяжки пола';
    if($utm == 'v_dome'){
        $main_title = 'ПОЛУСУХАЯ СТЯЖКА ПОЛА ДЛЯ ДОМА ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';
    }elseif($utm == 'v_kvartire'){
        $main_title = 'ПОЛУСУХАЯ СТЯЖКА ПОЛА ДЛЯ КВАРТИРЫ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_garaje'){
        $main_title = 'ПОЛУСУХАЯ СТЯЖКА ПОЛА В ГАРАЖЕ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'dlya_doma'){
        $main_title = 'ПОЛУСУХАЯ СТЯЖКА ПОЛА ДЛЯ ЧАСТНОГО ДОМА ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_bane'){
        $main_title = 'ПОЛУСУХАЯ СТЯЖКА ПОЛА ДЛЯ БАНИ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'na_dache'){
        $main_title = 'ПОЛУСУХАЯ СТЯЖКА ПОЛА ДЛЯ ДАЧИ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_stalinke'){
        $main_title = 'ПОЛУСУХАЯ СТЯЖКА ПОЛА В СТАЛИНКЕ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_hruschevke'){
        $main_title = 'ПОЛУСУХАЯ СТЯЖКА ПОЛА В ХРУЩЕВКЕ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_novostroike'){
        $main_title = 'ПОЛУСУХАЯ СТЯЖКА ПОЛА ДЛЯ НОВОСТРОЙКИ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_taunhause'){
        $main_title = 'ПОЛУСУХАЯ СТЯЖКА ПОЛА ДЛЯ ТАУНХАУСА ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_ofise'){
        $main_title = 'ПОЛУСУХАЯ СТЯЖКА ПОЛА ДЛЯ ОФИСА ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'na_sclade'){
        $main_title = 'ПОЛУСУХАЯ СТЯЖКА ПОЛА ДЛЯ СКЛАДА ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_komnate'){
        $main_title = 'ПОЛУСУХАЯ СТЯЖКА ПОЛА ДЛЯ КОМНАТЫ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_podvale'){
        $main_title = 'ПОЛУСУХАЯ СТЯЖКА ПОЛА ДЛЯ ПОДВАЛА ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'na_avtomoike'){
        $main_title = 'ПОЛУСУХАЯ СТЯЖКА ПОЛА ДЛЯ АВТОМОЙКИ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'stagke_krovli'){
        $main_title = 'ПОЛУСУХАЯ СТЯЖКА КРОВИЛИ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'na_krishe'){
        $main_title = 'ПОЛУСУХАЯ СТЯЖКА ПОЛА ДЛЯ КРЫШИ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'na_balkone'){
        $main_title = 'ПОЛУСУХАЯ СТЯЖКА ПОЛА НА БОЛКОНЕ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'na_verande'){
        $main_title = 'ПОЛУСУХАЯ СТЯЖКА ПОЛА НА ВЕРАНДЕ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }
}elseif($type == 'sp'){
    $multiTitle1 = 'Преимущества стяжки пола';
    if($utm == 'v_dome'){
        $main_title = 'СТЯЖКА ПОЛА ДЛЯ ДОМА ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';
    }elseif($utm == 'v_kvartire'){
        $main_title = 'СТЯЖКА ПОЛА ДЛЯ КВАРТИРЫ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_garaje'){
        $main_title = 'СТЯЖКА ПОЛА В ГАРАЖЕ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'dlya_doma'){
        $main_title = 'СТЯЖКА ПОЛА ДЛЯ ЧАСТНОГО ДОМА ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_bane'){
        $main_title = 'СТЯЖКА ПОЛА ДЛЯ БАНИ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'na_dache'){
        $main_title = 'СТЯЖКА ПОЛА ДЛЯ ДАЧИ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_stalinke'){
        $main_title = 'СТЯЖКА ПОЛА В СТАЛИНКЕ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_hruschevke'){
        $main_title = 'СТЯЖКА ПОЛА В ХРУЩЕВКЕ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_novostroike'){
        $main_title = 'СТЯЖКА ПОЛА ДЛЯ НОВОСТРОЙКИ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_taunhause'){
        $main_title = 'СТЯЖКА ПОЛА ДЛЯ ТАУНХАУСА ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_ofise'){
        $main_title = 'СТЯЖКА ПОЛА ДЛЯ ОФИСА ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'na_sclade'){
        $main_title = 'СТЯЖКА ПОЛА ДЛЯ СКЛАДА ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_komnate'){
        $main_title = 'СТЯЖКА ПОЛА ДЛЯ КОМНАТЫ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_podvale'){
        $main_title = 'СТЯЖКА ПОЛА ДЛЯ ПОДВАЛА ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'na_avtomoike'){
        $main_title = 'СТЯЖКА ПОЛА ДЛЯ АВТОМОЙКИ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'stagke_krovli'){
        $main_title = 'СТЯЖКА КРОВИЛИ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'na_krishe'){
        $main_title = 'СТЯЖКА ПОЛА ДЛЯ КРЫШИ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'na_balkone'){
        $main_title = 'СТЯЖКА ПОЛА НА БОЛКОНЕ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'na_verande'){
        $main_title = 'СТЯЖКА ПОЛА НА ВЕРАНДЕ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }    
}elseif($type == 'spf'){
    $multiTitle1 = 'Преимущества стяжки пола c фибровлокном';
    if($utm == 'v_dome'){
        $main_title = 'СТЯЖКА ПОЛА С ФИБРОВОЛОКНОМ ДЛЯ ДОМА ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';
    }elseif($utm == 'v_kvartire'){
        $main_title = 'СТЯЖКА ПОЛА С ФИБРОВОЛОКНОМ ДЛЯ КВАРТИРЫ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_garaje'){
        $main_title = 'СТЯЖКА ПОЛА С ФИБРОВОЛОКНОМ В ГАРАЖЕ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'dlya_doma'){
        $main_title = 'СТЯЖКА ПОЛА С ФИБРОВОЛОКНОМ ДЛЯ ЧАСТНОГО ДОМА ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_bane'){
        $main_title = 'СТЯЖКА ПОЛА С ФИБРОВОЛОКНОМ ДЛЯ БАНИ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'na_dache'){
        $main_title = 'СТЯЖКА ПОЛА С ФИБРОВОЛОКНОМ ДЛЯ ДАЧИ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_stalinke'){
        $main_title = 'СТЯЖКА ПОЛА С ФИБРОВОЛОКНОМ В СТАЛИНКЕ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_hruschevke'){
        $main_title = 'СТЯЖКА ПОЛА С ФИБРОВОЛОКНОМ В ХРУЩЕВКЕ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_novostroike'){
        $main_title = 'СТЯЖКА ПОЛА С ФИБРОВОЛОКНОМ ДЛЯ НОВОСТРОЙКИ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_taunhause'){
        $main_title = 'СТЯЖКА ПОЛА С ФИБРОВОЛОКНОМ ДЛЯ ТАУНХАУСА ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_ofise'){
        $main_title = 'СТЯЖКА ПОЛА С ФИБРОВОЛОКНОМ ДЛЯ ОФИСА ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'na_sclade'){
        $main_title = 'СТЯЖКА ПОЛА С ФИБРОВОЛОКНОМ ДЛЯ СКЛАДА ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_komnate'){
        $main_title = 'СТЯЖКА ПОЛА С ФИБРОВОЛОКНОМ ДЛЯ КОМНАТЫ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_podvale'){
        $main_title = 'СТЯЖКА ПОЛА С ФИБРОВОЛОКНОМ ДЛЯ ПОДВАЛА ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'na_avtomoike'){
        $main_title = 'СТЯЖКА ПОЛА С ФИБРОВОЛОКНОМ ДЛЯ АВТОМОЙКИ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'stagke_krovli'){
        $main_title = 'СТЯЖКА КРОВИЛИ С ФИБРОВОЛОКНОМ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'na_krishe'){
        $main_title = 'СТЯЖКА ПОЛА С ФИБРОВОЛОКНОМ ДЛЯ КРЫШИ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'na_balkone'){
        $main_title = 'СТЯЖКА ПОЛА С ФИБРОВОЛОКНОМ НА БОЛКОНЕ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'na_verande'){
        $main_title = 'СТЯЖКА ПОЛА С ФИБРОВОЛОКНОМ НА ВЕРАНДЕ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }    
}elseif($type == 'sps'){
    $multiTitle1 = 'Преимущества стяжки пола самовыравнивающейся';
    if($utm == 'v_dome'){
        $main_title = 'САМОВЫРАВНИВАЮЩАЯСЯ СТЯЖКА ПОЛА ДЛЯ ДОМА ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';
    }elseif($utm == 'v_kvartire'){
        $main_title = 'САМОВЫРАВНИВАЮЩАЯСЯ СТЯЖКА ПОЛА ДЛЯ КВАРТИРЫ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_garaje'){
        $main_title = 'САМОВЫРАВНИВАЮЩАЯСЯ СТЯЖКА ПОЛА В ГАРАЖЕ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'dlya_doma'){
        $main_title = 'САМОВЫРАВНИВАЮЩАЯСЯ СТЯЖКА ПОЛА ДЛЯ ЧАСТНОГО ДОМА ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_bane'){
        $main_title = 'САМОВЫРАВНИВАЮЩАЯСЯ СТЯЖКА ПОЛА ДЛЯ БАНИ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'na_dache'){
        $main_title = 'САМОВЫРАВНИВАЮЩАЯСЯ СТЯЖКА ПОЛА ДЛЯ ДАЧИ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_stalinke'){
        $main_title = 'САМОВЫРАВНИВАЮЩАЯСЯ СТЯЖКА ПОЛА В СТАЛИНКЕ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_hruschevke'){
        $main_title = 'САМОВЫРАВНИВАЮЩАЯСЯ СТЯЖКА ПОЛА В ХРУЩЕВКЕ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_novostroike'){
        $main_title = 'САМОВЫРАВНИВАЮЩАЯСЯ СТЯЖКА ПОЛА ДЛЯ НОВОСТРОЙКИ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_taunhause'){
        $main_title = 'САМОВЫРАВНИВАЮЩАЯСЯ СТЯЖКА ПОЛА ДЛЯ ТАУНХАУСА ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_ofise'){
        $main_title = 'САМОВЫРАВНИВАЮЩАЯСЯ СТЯЖКА ПОЛА ДЛЯ ОФИСА ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'na_sclade'){
        $main_title = 'САМОВЫРАВНИВАЮЩАЯСЯ СТЯЖКА ПОЛА ДЛЯ СКЛАДА ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_komnate'){
        $main_title = 'САМОВЫРАВНИВАЮЩАЯСЯ СТЯЖКА ПОЛА ДЛЯ КОМНАТЫ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_podvale'){
        $main_title = 'САМОВЫРАВНИВАЮЩАЯСЯ СТЯЖКА ПОЛА ДЛЯ ПОДВАЛА ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'na_avtomoike'){
        $main_title = 'САМОВЫРАВНИВАЮЩАЯСЯ СТЯЖКА ПОЛА ДЛЯ АВТОМОЙКИ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'stagke_krovli'){
        $main_title = 'САМОВЫРАВНИВАЮЩАЯСЯ СТЯЖКА КРОВИЛИ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'na_krishe'){
        $main_title = 'САМОВЫРАВНИВАЮЩАЯСЯ СТЯЖКА ПОЛА ДЛЯ КРЫШИ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'na_balkone'){
        $main_title = 'САМОВЫРАВНИВАЮЩАЯСЯ СТЯЖКА ПОЛА НА БОЛКОНЕ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'na_verande'){
        $main_title = 'САМОВЫРАВНИВАЮЩАЯСЯ СТЯЖКА ПОЛА НА ВЕРАНДЕ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }    
}elseif($type == 'svp'){
    $multiTitle1 = 'Преимущества стяжки водяного пола';
    if($utm == 'v_dome'){
        $main_title = 'СТЯЖКА ВОДЯНОГО ПОЛА ДЛЯ ДОМА ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';
    }elseif($utm == 'v_kvartire'){
        $main_title = 'СТЯЖКА ВОДЯНОГО ПОЛА ДЛЯ КВАРТИРЫ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_garaje'){
        $main_title = 'СТЯЖКА ВОДЯНОГО ПОЛА В ГАРАЖЕ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'dlya_doma'){
        $main_title = 'СТЯЖКА ВОДЯНОГО ПОЛА ДЛЯ ЧАСТНОГО ДОМА ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_bane'){
        $main_title = 'СТЯЖКА ВОДЯНОГО ПОЛА ДЛЯ БАНИ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'na_dache'){
        $main_title = 'СТЯЖКА ВОДЯНОГО ПОЛА ДЛЯ ДАЧИ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_stalinke'){
        $main_title = 'СТЯЖКА ВОДЯНОГО ПОЛА В СТАЛИНКЕ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_hruschevke'){
        $main_title = 'СТЯЖКА ВОДЯНОГО ПОЛА В ХРУЩЕВКЕ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_novostroike'){
        $main_title = 'СТЯЖКА ВОДЯНОГО ПОЛА ДЛЯ НОВОСТРОЙКИ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_taunhause'){
        $main_title = 'СТЯЖКА ВОДЯНОГО ПОЛА ДЛЯ ТАУНХАУСА ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_ofise'){
        $main_title = 'СТЯЖКА ВОДЯНОГО ПОЛА ДЛЯ ОФИСА ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'na_sclade'){
        $main_title = 'СТЯЖКА ВОДЯНОГО ПОЛА ДЛЯ СКЛАДА ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_komnate'){
        $main_title = 'СТЯЖКА ВОДЯНОГО ПОЛА ДЛЯ КОМНАТЫ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_podvale'){
        $main_title = 'СТЯЖКА ВОДЯНОГО ПОЛА ДЛЯ ПОДВАЛА ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'na_avtomoike'){
        $main_title = 'СТЯЖКА ВОДЯНОГО ПОЛА ДЛЯ АВТОМОЙКИ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'stagke_krovli'){
        $main_title = 'СТЯЖКА ВОДЯНОГО КРОВИЛИ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'na_krishe'){
        $main_title = 'СТЯЖКА ВОДЯНОГО ПОЛА ДЛЯ КРЫШИ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'na_balkone'){
        $main_title = 'СТЯЖКА ВОДЯНОГО ПОЛА НА БОЛКОНЕ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'na_verande'){
        $main_title = 'СТЯЖКА ВОДЯНОГО ПОЛА НА ВЕРАНДЕ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }    
}elseif($type == 'tsp'){
    $multiTitle1 = 'Преимущества теплой стяжки пола';
    if($utm == 'v_dome'){
        $main_title = 'ТЕПЛАЯ СТЯЖКА ПОЛА ДЛЯ ДОМА ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';
    }elseif($utm == 'v_kvartire'){
        $main_title = 'ТЕПЛАЯ СТЯЖКА ПОЛА ДЛЯ КВАРТИРЫ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_garaje'){
        $main_title = 'ТЕПЛАЯ СТЯЖКА ПОЛА В ГАРАЖЕ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'dlya_doma'){
        $main_title = 'ТЕПЛАЯ СТЯЖКА ПОЛА ДЛЯ ЧАСТНОГО ДОМА ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_bane'){
        $main_title = 'ТЕПЛАЯ СТЯЖКА ПОЛА ДЛЯ БАНИ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'na_dache'){
        $main_title = 'ТЕПЛАЯ СТЯЖКА ПОЛА ДЛЯ ДАЧИ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_stalinke'){
        $main_title = 'ТЕПЛАЯ СТЯЖКА ПОЛА В СТАЛИНКЕ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_hruschevke'){
        $main_title = 'ТЕПЛАЯ СТЯЖКА ПОЛА В ХРУЩЕВКЕ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_novostroike'){
        $main_title = 'ТЕПЛАЯ СТЯЖКА ПОЛА ДЛЯ НОВОСТРОЙКИ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_taunhause'){
        $main_title = 'ТЕПЛАЯ СТЯЖКА ПОЛА ДЛЯ ТАУНХАУСА ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_ofise'){
        $main_title = 'ТЕПЛАЯ СТЯЖКА ПОЛА ДЛЯ ОФИСА ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'na_sclade'){
        $main_title = 'ТЕПЛАЯ СТЯЖКА ПОЛА ДЛЯ СКЛАДА ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_komnate'){
        $main_title = 'ТЕПЛАЯ СТЯЖКА ПОЛА ДЛЯ КОМНАТЫ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'v_podvale'){
        $main_title = 'ТЕПЛАЯ СТЯЖКА ПОЛА ДЛЯ ПОДВАЛА ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'na_avtomoike'){
        $main_title = 'ТЕПЛАЯ СТЯЖКА ПОЛА ДЛЯ АВТОМОЙКИ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'stagke_krovli'){
        $main_title = 'ТЕПЛАЯ СТЯЖКА КРОВИЛИ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'na_krishe'){
        $main_title = 'ТЕПЛАЯ СТЯЖКА ПОЛА ДЛЯ КРЫШИ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'na_balkone'){
        $main_title = 'ТЕПЛАЯ СТЯЖКА ПОЛА НА БОЛКОНЕ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }elseif($utm == 'na_verande'){
        $main_title = 'ТЕПЛАЯ СТЯЖКА ПОЛА НА ВЕРАНДЕ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';        
    }    
}else{
    $main_title = 'ПОЛУЧИТЕ ИДЕАЛЬНЫЙ РОВНЫЙ ПОЛ ЗА 1 ДЕНЬ ПО НЕМЕЦКОЙ ТЕХНОЛОГИИ С ГАРАНТИЕЙ 5 ЛЕТ';
}
?>
<body>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PXDQPH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PXDQPH');</script>
<!-- End Google Tag Manager -->

<div class="wrapper">
<!--[if lt IE 9]>
<div class="browsehappy">Вы используете <strong>устаревший</strong> браузер. Пожалуйста <a href="http://browsehappy.com/">обновите ваш браузер</a>.</div>
<![endif]-->
<div class="back01" id="top">
    <div class="header" id="top1">
        <div class="header-top">
            <div class="cnt">
                <div class="backfon1">
                    <div class="backfon1111">
                        <div class="l-sitelogo">
                            <img class="header-logo" src="http://xn--1-8sbrq7ag5g.xn--p1ai/img/logo1.png">
                        </div>
                        <div class="header-contacts">
                            <div class="header-phone"> <span class="lptracker_phone">+7 (495) 134-07-45 </span> </div>
                            <button class="btn-call open-popup-call">Заказать обратный звонок</button>
                        </div>
                    </div>		
                </div>	
            </div>
        </div>		
    </div>
    <div class="nav">
        <a class="toggle" href="javascript:void(0);">
            <span>☰</span>
        </a>
        <div class="nav-block menu">
            <a href="#advantages">Преимущества</a><span>|</span>
            <a href="#arguments">Аргументы</a><span>|</span>
            <a href="#steps">Монтаж</a><span>|</span>
            <a href="#gains">Выгоды</a><span>|</span>
            <a href="#days">Этапы работы</a><span>|</span>
            <a href="#reviews">Отзывы</a><span>|</span>
            <a href="#contacts">Контакты</a>
        </div>
    </div>
    <div class="grab section">
        <div class="cnt">
            <div class="grab-title">
                <?php echo $main_title;?>
            </div>
            <img class="line" src="img/line.png">
            <div class="left_side_grab">
            </div>
        </div>
    </div>
    <div class="order section">
        <div class="cnt">
            <div class="order-title">Оставьте заявку на бесплатную консультацию прямо сейчас и мы перезвоним Вам в течении 23 секунд!</div>
            <form onsubmit="yaCounter31118432.reachGoal('submit'); return true;" method="post" action="mail.php">
                <input type="hidden" name="title" value="бесплатный замер">
                <input type="text" name="name" class="input" placeholder="Введите Ваше имя" name="name">
                <input type="text" name="phone" class="input" placeholder="Введите Ваш телефон" name="phone">
                <button type="submit" class="btn">Получить консультацию</button>
                <div class="clear"></div>
            </form>
        </div>
    </div>
    <div class="advantages section">
        <div class="cnt">
            <div class="title">
                <div class="riginf">ПРЕИМУЩЕСТВА ПОЛУСУХОЙ СТЯЖКИ</div>
            </div>
        </div>
        <div class="cnt table_cnt">
            <table class="advantages-table">
                <tr>
                    <th>Характеристики</th>
                    <th class="center">Полусухая стяжка по немецкой технологии</th>
                    <th>Мокрая стяжка</th>
                </tr>
                <tr>
                    <td>Качество покрытия</td>
                    <td class="center">Чистовая стяжка под любое напольное покрытие</td>
                    <td>Требует дополнительного<br>выравнивания наливным полом</td>
                </tr>
                <tr>
                    <td>Перепад по высоте</td>
                    <td class="center1">Всего 3 мм</td>
                    <td>10 мм</td>
                </tr>
                <tr>
                    <td>Угол наклона</td>
                    <td class="center">Возможно делать с любым углом наклона</td>
                    <td>Только горизонтальная</td>
                </tr>
                <tr>
                    <td>Появление трещин</td>
                    <td class="center1">Трещины исключены</td>
                    <td>Возможно в процессе высыхания</td>
                </tr>
                <tr>
                    <td>Пешеходная нагрузка</td>
                    <td class="center">Всего 12 часов</td>
                    <td>72 часа</td>
                </tr>
                <tr>
                    <td>Отделочные работы</td>
                    <td class="center1">8 дней</td>
                    <td>28 дней</td>
                </tr>
                <tr>
                    <td>Максимальная площадь укладки в день 1 бригадой</td>
                    <td class="center">400 м<sup>2</sup></td>
                    <td>50 м<sup>2</sup></td>
                </tr>
                <tr>
                    <td>Прочность</td>
                    <td class="center1">Высокая</td>
                    <td>Высокая</td>
                </tr>
                <tr>
                    <td>Риск протечек во время монтажа</td>
                    <td class="center">Протечки исключены</td>
                    <td>Велик</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="arguments section" id="arguments">
        <div class="cnt">
            <div class="title">
                <div class="riginf">Сильные аргументы в пользу полусухой стяжки</div>
            </div>
        </div>
        <div class="cnt">
            <div class="arguments-items clearfix">
                <div class="arguments-item">
                    <div class="arguments-item-icon">
                        <img src="img/icon-a1.png" alt="">
                    </div>
                    <div class="arguments-item-title">
                        Сочетание<br>
                        лучшего
                    </div>
                    <div class="arguments-item-text">
                        Объединяет все<br>
                        достоинства сухой<br>
                        и мокрой стяжек, исключив<br>
                        их недостатки
                    </div>
                </div>
                <div class="arguments-item">
                    <div class="arguments-item-icon">
                        <img src="img/icon-a2.png" alt="">
                    </div>
                    <div class="arguments-item-title">
                        Технологичность
                    </div>
                    <div class="arguments-item-text">
                        Выполняется по новейшей<br>
                        технологии, которая<br>
                        обеспечивает чистоту<br>
                        и высокую скорость
                    </div>
                </div>
                <div class="arguments-item">
                    <div class="arguments-item-icon">
                        <img src="img/icon-a3.png" alt="">
                    </div>
                    <div class="arguments-item-title">
                        Универсальность
                    </div>
                    <div class="arguments-item-text">
                        Подходит для всех типов<br>
                        помещений и видов<br>
                        напольных покрытий
                    </div>
                </div>
                <div class="arguments-item">
                    <div class="arguments-item-icon">
                        <img src="img/icon-a4.png" alt="">
                    </div>
                    <div class="arguments-item-title">
                        Долгий срок<br>службы
                    </div>
                    <div class="arguments-item-text">
                        Обладает максимально<br>
                        длительным сроком<br>
                        службы
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="consult section">
        <div class="cnt clearfix">
            <div class="consult-left">
                <div class="consult-title">Оставьте заявку на бесплатную <br>консультацию прямо сейчас<br> и мы перезвоним Вам<br> в течении 23 секунд</div>
            </div>
            <div class="consult-right">
                <form onsubmit="yaCounter31118432.reachGoal('submit'); return true;" method="post" action="mail.php">
                    <input type="hidden" name="title" value="бесплатная консультация">
                    <div class="consult-input"><input type="text" name="name" class="input" placeholder="Введите Ваше имя" name="name"></div>
                    <div class="consult-input"><input type="text" name="phone" class="input" placeholder="Введите Ваш телефон" name="phone"></div>

                    <div class="consult-button"><button type="submit" class="btn btn_2">получить консультацию</button></div>
                </form>
            </div>
        </div>
    </div>
    <div id="steps"><br><br></div>
    <div class="steps section" >
        <div class="cnt">
            <div class="steps-items clearfix">
                <div class="steps-item">
                    <div class="title1">
                        <div class="riginf">Этапы укладки полусухой <br> стяжки пола</div>
                    </div>
                </div>
                <div class="steps-item">
                    <div class="steps-item-img">
                        <img src="img/1001.jpg" alt="">
                    </div>
                    <div class="steps-item-num">01</div>
                    <div class="steps-item-title">Подготовка основания</div>
                    <div class="steps-item-text">Во избежание протечек на пол<br>укладывается специальная пленка</div>
                </div>
                <div class="steps-item">
                    <div class="steps-item-img">
                        <img src="img/1002.jpg" alt="">
                    </div>
                    <div class="steps-item-num">02</div>
                    <div class="steps-item-title">Доставка раствора</div>
                    <div class="steps-item-text">При помощи пневмонагнетателя раствор<br>доставляется на объект (до 70 м. по вертикали и 200 м. по горизонтали)</div>
                </div>
                <div class="steps-item">
                    <div class="steps-item-img">
                        <img src="img/1003.jpg" alt="">
                    </div>
                    <div class="steps-item-num">03</div>
                    <div class="steps-item-title">Выставление маяков</div>
                    <div class="steps-item-text">Маяки выставляются при<br>использовании уровня и лазерного<br>нивелира</div>
                </div>
                <div class="steps-item">
                    <div class="steps-item-img">
                        <img src="img/1004.jpg" alt="">
                    </div>
                    <div class="steps-item-num">04</div>
                    <div class="steps-item-title">Выравнивание стяжки</div>
                    <div class="steps-item-text">Стяжка тщательно выравнивается <br>мастером по всему <br>периметру помещения</div>
                </div>
                <div class="steps-item">
                    <div class="steps-item-img">
                        <img src="img/s5.jpg" alt="">
                    </div>
                    <div class="steps-item-num">05</div>
                    <div class="steps-item-title">Финишная затирка</div>
                    <div class="steps-item-text">При помощи затирочной машины<br> пол приводится к идеально<br> ровному состоянию</div>
                </div>
            </div>
        </div>
    </div>
    <div  id="gains"><br><br></div>
    <div class="gains section">
        <div class="cnt clearfix">
            <div class="gains-left">
                <div class="gains-title">ПРИЧИН ПОЧЕМУ БОЛЕЕ 1 247 КЛИЕНТОВ ВЫБРАЛИ <br> ИМЕННО НАС </div>
            </div>
            <div class="gains-right">
                <div class="gains-item">
                    <img src="img/icon-g1.png" alt="" style="top:31px;left:-5px;">
                    <div class="gains-item-title">ВЫ ПОЛУЧИТЕ ВЫСОКОЕ КАЧЕСТВО РАБОТЫ</div>
                    <div class="gains-item-text">
                        Мы используем качественные материалы и новейшее<br>
                        оборудование, которое способно подавать раствор даже на последний<br>
                        этаж «Дома на Мосфильмовской»!
                    </div>
                </div>
                <div class="gains-item">
                    <img src="img/icon-g2.png" alt="" style="top:38px;left:-6px">
                    <div class="gains-item-title">МЫ ПРОФЕССИОНАЛЫ СВОЕГО ДЕЛА</div>
                    <div class="gains-item-text">
                        У нас 10 бригад мастеров с опытом от 5 лет. Каждый из них регулярно<br>
                        проходит обучение новым актуальным технологиям полусухой стяжки.
                    </div>
                </div>
                <div class="gains-item">
                    <img src="img/icon-g3.png" alt="" style="top:30px;left:-14px;">
                    <div class="gains-item-title">ВЫ НЕ ПЛАТИТЕ ЗА МАТЕРИАЛЫ</div>
                    <div class="gains-item-text">
                        В цену входят материалы, работа и даже доставка —  никаких комиссий<br>
                        и дополнительных платежей!
                    </div>
                </div>
                <div class="gains-item">
                    <img src="img/icon-g4.png" alt="" style="top:33px;left:-10px;">
                    <div class="gains-item-title">ВЫ ПОЛУЧИТЕ СКИДКУ ЗА ОБЪЕМ</div>
                    <div class="gains-item-text">
                        При заказе полусухой стяжки от 1000 м2. вы получаете специальную<br>
                        выгодную цену за квадратный метр.
                    </div>
                </div>
                <div class="gains-item">
                    <img src="img/icon-g5.png" alt="" style="top:33px;left:-13px;">
                    <div class="gains-item-title">С НАМИ ВЫ СЭКОНОМИТЕ ВРЕМЯ</div>
                    <div class="gains-item-text">
                        Пока мы выполняем работы, вы  — делаете свои дела. Устройство<br>
                        полусухой стяжки не требует вашего присутствия. Вы просто<br>
                        подписываете договор и принимаете работу.
                    </div>
                </div>
                <div class="gains-item">
                    <img src="img/icon-g6.png" alt="" style="top:34px;left:-6px;">
                    <div class="gains-item-title">Получите гарантию 5 лет</div>
                    <div class="gains-item-text">
                        Вы получаете гарантийный талон сроком 5 лет на выполненную работу.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="days"></div>
    <div class="days section" >
        <div class="cnt">
            <div class="title">
                <div class="leftinf">3</div>
                <div class="riginf">ШАГА ОТ ЗВОНКА <br> ДО ИДЕАЛЬНОГО ПОЛА</div>
            </div>
            <div class="days-items clearfix">
                <div class="days-item day1">
                    <div class="days-item-num">01</div>

                    <div class="days-item-text">
                        Оставьте заявку на сайте или<br>
                        по телефону, получите<br>
                        предварительный расчет стоимости<br>
                        и согласуйте время замера
                    </div>
                </div>
                <div class="days-item day2">
                    <div class="days-item-num">02</div>

                    <div class="days-item-text">
                        Мы делаем замер, называем<br>
                        окончательную стоимость<br>
                        и назначаем исполнение
                    </div>
                </div>
                <div class="days-item day3">
                    <div class="days-item-num">03</div>

                    <div class="days-item-text">
                        Вы подписываете договор, а мы<br>
                        выполняем работу. Затем вы<br>
                        принимаете работу и получаете<br>
                        гарантийный талон на 5 лет!
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="nums section">
        <div class="cnt">
            <div class="nums-cnt">
                <div class="nums-item">
                    <b>6</b>
                    <span>лет<br>опыта работы</span>
                </div>
                <div class="nums-item">
                    <b>1 247</b>
                    <span>довольных<br>клиентов</span>
                </div>
                <div class="nums-item">
                    <b>145 000</b>
                    <span>квадратных<br>метров пола</span>
                </div>
            </div>
        </div>
    </div>
    <div></div>
    <div class="reviews section"  id="reviews">
        <div class="cnt">
            <div class="title">
                Отзывы и результаты нашей работы:
            </div>
            <div class="review_wrap">
                <p>Александр г. Подольск площадь 100м2 средняя толщина 85мм</p>
                <div class="review_left_side">
                    <img src="img/rew_1_1.jpg">
                    <img src="img/rew_1_2.jpg">
                    <img src="img/rew_1_3.jpg">
                    <img src="img/rew_1_4.jpg">
                </div>
                <div class="review_right_side">
                    <video width="100%" controls="controls" poster="img/otzyv_1.jpg">
                        <source src="video/otzyv1.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                        Тег video не поддерживается вашим браузером. 
                    </video>
                </div>					
            </div>
            <div class="review_wrap">
                <p>Дмитрий г. Щелково площадь 38м2 средняя толщина 73мм</p>
                <div class="review_left_side">
                    <img src="img/rew_2_1.jpg">
                    <img src="img/rew_2_2.jpg">
                    <img src="img/rew_2_3.jpg">
                </div>
                <div class="review_right_side">
                    <video width="100%" controls="controls" poster="img/otzyv_video_prev_2.jpg">
                        <source src="video/otzyv2.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                        Тег video не поддерживается вашим браузером. 
                    </video>
                </div>					
            </div>
            <div class="review_wrap">
                <p>Татьяна г. Москва, ул. Молостовых площадь 13,5м2 средняя толщина 60мм</p>
                <div class="review_left_side">
                    <img src="img/rew_3_1.jpg">
                </div>
                <div class="review_right_side">
                    <video width="100%" controls="controls" poster="img/otzyv_video_prev_3.jpg">
                        <source src="video/otzyv3.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                        Тег video не поддерживается вашим браузером. 
                    </video>
                </div>					
            </div>
            <div class="review_wrap">
                <p>Константин г. Москва ул. Дакутина 10 средняя толщина 90мм, площадь 240м2</p>
                <div class="review_left_side">
                    <img src="img/rew_4_1.jpg">
                    <img src="img/rew_4_2.jpg">
                </div>
                <div class="review_right_side">
                    <video width="100%" controls="controls" poster="img/otzyv_video_prev_4.jpg">
                        <source src="video/otzyv4.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                        Тег video не поддерживается вашим браузером. 
                    </video>
                </div>					
            </div>
        </div>
    </div>
    <div  id="contacts"><br><br></div>
    <div class="contacts section">
        <div class="map">
            <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=qdRca4QqLeVPJjfag6pUzBfWRWZPQpOF&width=100%&height=100%&lang=ru_RU&sourceType=constructor"></script>
        </div>
        <div class="shadow"></div>
        <div class="cnt">
            <div class="contacts-cnt">
                <div class="contacts-title">Свяжитесь с нами!</div>
                <div class="contacts-h2">АДРЕС</div>
                <div class="contacts-text">
                    г. Москва, Щелковское шоссе,<br> д. 100, оф.135
                </div>
                <div class="contacts-h2">ТЕЛЕФОН</div>
                <div class="contacts-text">
                    <span class="lptracker_phone">+7 (495) 134-07-45 </span>
                </div>
                <div class="contacts-h2">ГРАФИК РАБОТЫ</div>
                <div class="contacts-text">
                    Понедельник — суббота<br>
                    с 9:00 до 19:00
                </div>
                <hr>
                <div class="contacts-h2">У ВАС ОСТАЛИСЬ ВОПРОСЫ?</div>
                <form method="post" action="mail.php" onsubmit="yaCounter31118432.reachGoal('submit'); return true;">
                    <input type="hidden" name="title" value="вопрос">
                    <div class="contacts-input">
                        <input type="text" class="input" name="name" placeholder="Ваше имя" name="name">
                    </div>
                    <div class="contacts-input">
                        <input type="text" class="input" name="phone" placeholder="Ваш e-mail" name="email">
                    </div>
                    <div class="contacts-textarea">
                        <textarea class="textarea" name="text" placeholder="Ваш вопрос" name="message"></textarea>
                    </div>
                    <button class="btn" type="submit">Задать вопрос</button>
                </form>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="cnt clearfix">
            <span class="copyright">© Фрактал Строй 2015 | <a href="http://xn--1-8sbrq7ag5g.xn--p1ai/_.pdf" target="_blank">Соглашение об обработке персональных данных</a></span>

            <a class="back" href="#top"></a>
        </div>
    </div>
</div>
<!-- begin popup -->
<div class="popup-overlay"></div>
<div class="popup-fixed">
    <div class="popup-container">
        <div class="popup-content">
            <div class="popup popup-call">
                <div class="popup__close"></div>
                <div class="popup-title">Оставьте заявку на бесплатную консультацию прямо сейчас и мы перезвоним Вам в течении 23 секунд!</div>
                <form onsubmit="yaCounter31118432.reachGoal('submit'); return true;" method="post" action="mail.php">
                    <input type="hidden" name="title" value="обратный звонок">
                    <div class="popup-input">
                        <input type="text" class="input" name="name" placeholder="Введите Ваше имя" name="name">
                    </div>
                    <div class="popup-input">
                        <input type="text" class="input" name="phone" placeholder="Введите Ваш телефон" name="phone">
                    </div>
                    <div class="popup-button">
                        <button class="btn" type="submit">Получить консультацию</button>
                    </div>
                </form>
            </div>
            <div class="popup popup-thanks">
                <div class="popup__close"></div>
                <div class="popup-title">спасибо!</div>
                <div class="popup-text">
                    Ваша заявка принята!<br> Мы с вами свяжемся в<br> ближайшее время.
                </div>
            </div>
        </div>
    </div>
</div>
	<!-- end popup -->

	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/device.min.js"></script>
	<script src="js/jquery.scrollTo.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/maskedinput.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/scripts.js?v=2"></script>
	<!--[if lt IE 10]>
	<script src="js/attrplaceholder.js"></script>
	<![endif]-->
<!— Yandex.Metrika counter —> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter38463925 = new Ya.Metrika({ id:38463925, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true, ut:"noindex", ecommerce:"dataLayer" }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <!— /Yandex.Metrika counter —>

<noscript><div><img src="//mc.yandex.ru/watch/31118432" style="position:absolute; left:-9999px;" alt="" /></div></noscript>



<script type="text/javascript" src="https://cdn.callbackkiller.com/widget/cbk.js?cbk_code=6d40ce813e02e2d6eac61a84827b4d0f" charset="UTF-8" async></script>
<script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=n1WdjNhu0HASA5S1*8Xvai4d1376JFCt/tbWf3fm1AteTp/x4mW6lHFq9TSzI0fUeX/54tcYaKuchL/7Zi3C0d/bAWAGqWCHFoimlp/MesEb646QSy5uTsbfhGhp3Ihhll5fcpNx8KqGh1dp5D*wW0pYXdixj9O4oCvQLj77mNI-';</script>

<!-- Код тега ремаркетинга Google -->
<!--------------------------------------------------
С помощью тега ремаркетинга запрещается собирать информацию, по которой можно идентифицировать личность пользователя. Также запрещается размещать тег на страницах с контентом деликатного характера. Подробнее об этих требованиях и о настройке тега читайте на странице http://google.com/ads/remarketingsetup.
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 951046342;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/951046342/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>



</body>
</html>