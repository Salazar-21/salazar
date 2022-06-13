<?php
$data='';
$filename='miercoles.json';
if(is_file($filename)){
	$data=file_get_contents($filename);
}
$json_arr=json_decode($data, true);
$json_arr[]=array(
'id'=>$_REQUEST['id'],
'nombre'=>$_REQUEST['nombre'],
'edad'=>$_REQUEST['edad'],
'identidadsecreta'=>$_REQUEST['identidadsecreta'],
'poderes'=>$_REQUEST['poderes'],
'image'=>$_REQUEST['image']

);
file_put_contents($filename, json_encode($json_arr));
header("https://salazar-21.github.io/salazar/miercoles.html")
?>
