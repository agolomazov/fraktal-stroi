<?php
 
return
array(
    array(
        'id'        => 'ab_form_color', // Название кампании АБ тестирования, с которым она будет показана в ROIstat
        'variants'  => array(
            array( 'id' => 'dark'),  // Название варианта, с которым он будет показан в ROIstat
            array( 'id' => 'blue'),  // Количество вариантов неограничено
        ),
    ),
    array(
        'id'        => 'ab_main_title', // Количество кампаний неограничено
        'variants'  => array(
            array( 'id' => 'small'),
            array( 'id' => 'big'),
        ),
    ),
);