<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: accept, authorization, content-type');
header('Access-Control-Allow-Credentials: true');

openlog('PredictiveDialer', LOG_PID, LOG_LOCAL0);
syslog(LOG_INFO, print_r($_REQUEST, true));


$data = json_decode(file_get_contents('data.json'), true);

if(!empty($_REQUEST['status']) && !empty($_REQUEST['number'])){
    foreach ($data as $key=>$value){
        if($value['number'] == $_REQUEST['number']){
            $data[$key]['status'] = $_REQUEST['status'];
            syslog(LOG_INFO, 'Finded: '.print_r($value, true));
            break;
        }
    }
}

file_put_contents('data.json', json_encode($data));


closelog();