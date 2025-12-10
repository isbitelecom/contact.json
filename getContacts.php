<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: accept, authorization, content-type');
header('Access-Control-Allow-Credentials: true');

$data = array(
        array('id'=>'1', 'name'=>'test1', 'number'=>'01234567891', 'status'=>'CALLED'),
        array('id'=>'2', 'name'=>'test2', 'number'=>'01234567892', 'status'=>'BUSY'),
        array('id'=>'3', 'name'=>'test3', 'number'=>'01234567893', 'status'=>'FAX'),
        array('id'=>'4', 'name'=>'test4', 'number'=>'01234567894', 'status'=>'DIALING'),
        array('id'=>'5', 'name'=>'test5', 'number'=>'01234567895', 'status'=>'SPEAKING'),
        array('id'=>'6', 'name'=>'test1', 'number'=>'01234567891', 'status'=>'CALLED'),
        array('id'=>'7', 'name'=>'test2', 'number'=>'01234567892', 'status'=>'BUSY'),
        array('id'=>'8', 'name'=>'test3', 'number'=>'01234567893', 'status'=>'FAX'),
        array('id'=>'9', 'name'=>'test4', 'number'=>'01234567894', 'status'=>'DIALING'),
        array('id'=>'10', 'name'=>'test5', 'number'=>'01234567895', 'status'=>'SPEAKING'),
        array('id'=>'11', 'name'=>'test1', 'number'=>'01234567891', 'status'=>'CALLED'),
        array('id'=>'12', 'name'=>'test2', 'number'=>'01234567892', 'status'=>'BUSY'),
        array('id'=>'13', 'name'=>'test3', 'number'=>'01234567893', 'status'=>'FAX'),
        array('id'=>'14', 'name'=>'test4', 'number'=>'01234567894', 'status'=>'DIALING'),
        array('id'=>'15', 'name'=>'test5', 'number'=>'01234567895', 'status'=>'SPEAKING'),
        array('id'=>'16', 'name'=>'test1', 'number'=>'01234567891', 'status'=>'CALLED'),
        array('id'=>'17', 'name'=>'test2', 'number'=>'01234567892', 'status'=>'BUSY'),
        array('id'=>'18', 'name'=>'test3', 'number'=>'01234567893', 'status'=>'FAX'),
        array('id'=>'19', 'name'=>'test4', 'number'=>'01234567894', 'status'=>'DIALING'),
        array('id'=>'20', 'name'=>'test5', 'number'=>'01234567895', 'status'=>'SPEAKING'),
        array('id'=>'21', 'name'=>'test1', 'number'=>'01234567891', 'status'=>'CALLED'),
        array('id'=>'22', 'name'=>'test2', 'number'=>'01234567892', 'status'=>'BUSY'),
        array('id'=>'23', 'name'=>'test3', 'number'=>'01234567893', 'status'=>'FAX'),
        array('id'=>'24', 'name'=>'test4', 'number'=>'01234567894', 'status'=>'DIALING'),
        array('id'=>'25', 'name'=>'test5', 'number'=>'01234567895', 'status'=>'SPEAKING'),
        array('id'=>'26', 'name'=>'test1', 'number'=>'01234567891', 'status'=>'CALLED'),
        array('id'=>'27', 'name'=>'test2', 'number'=>'01234567892', 'status'=>'BUSY'),
        array('id'=>'28', 'name'=>'test3', 'number'=>'01234567893', 'status'=>'FAX'),
        array('id'=>'29', 'name'=>'test4', 'number'=>'01234567894', 'status'=>'DIALING'),
        array('id'=>'30', 'name'=>'test5', 'number'=>'01234567895', 'status'=>'SPEAKING'),
        array('id'=>'31', 'name'=>'test1', 'number'=>'01234567891', 'status'=>'CALLED'),
        array('id'=>'32', 'name'=>'test2', 'number'=>'01234567892', 'status'=>'BUSY'),
        array('id'=>'33', 'name'=>'test3', 'number'=>'01234567893', 'status'=>'FAX'),
        array('id'=>'34', 'name'=>'test4', 'number'=>'01234567894', 'status'=>'DIALING'),
        array('id'=>'35', 'name'=>'test5', 'number'=>'01234567895', 'status'=>'SPEAKING'),
        array('id'=>'36', 'name'=>'test1', 'number'=>'01234567891', 'status'=>'CALLED'),
        array('id'=>'37', 'name'=>'test2', 'number'=>'01234567892', 'status'=>'BUSY'),
        array('id'=>'38', 'name'=>'test3', 'number'=>'01234567893', 'status'=>'FAX'),
        array('id'=>'39', 'name'=>'test4', 'number'=>'01234567894', 'status'=>'DIALING'),
        array('id'=>'40', 'name'=>'test5', 'number'=>'01234567895', 'status'=>'SPEAKING')
);

//file_put_contents('data.json', json_encode($data));
$data = json_decode(file_get_contents('data.json'), true);

echo json_encode($data);
