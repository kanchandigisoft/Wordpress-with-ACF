<?php
//$email = $_POST['hup_shopify_developer_email'];
$email  = $_POST['email'];
$data = $_POST['details'];
$to = "admin@wholedesignstudios.com";
$subject = "Book a call request from Shopify Developer Page";
$body = 'List of shopify developer listed below <br>'.$data;

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: <".$email.">" . "\r\n";
//mail($to,$subject,$message,$headers);
$headers = array('Content-Type: text/html; charset=UTF-8');

wp_mail( $to, $subject, $body, $headers );
?>