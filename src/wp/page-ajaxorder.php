<?php
    /*
        Template Name: Ajax Order Page
    */

    $str_json           = file_get_contents('php://input');
    $response           = json_decode($str_json, true);
    $content            = $response['content'];
    $__from             = $response['email'];

    $to = 'lid@jast.tech';
    $subject = 'Заявка с сайта jast.tech';
    $headers = array('Content-Type: text/html; charset=UTF-8');
    
    wp_mail( $to, $subject, $content, $headers );
    echo $content;
?>