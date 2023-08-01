<?php
$to = 'rjrahim113@gmail.com';
$from = 'help.designbazar@gmail.com';
$message = 'hhello;
if($to == '') {
echo "error";
} else{
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
     $headers = 'Content-type: text/html; charset=utf-8';
    $headers = "From:" . $from;
    if(mail($to, $from, $message, $headers)) {
    echo '{"status":"true"}';
} else{
    echo '{"status":"false"}';
}
}
