<?php
function mail_server($service){
    switch ($service){
        case 'gmail':
            $host = 'smtp.gmail.com';
            $SMTPSecure = 'tls';
            $port = 587;
            break;
    }
    $arr=array('host' => $host,'smtpSecure' => $SMTPSecure, 'port' => $port);
    
    return $arr;
}

?>