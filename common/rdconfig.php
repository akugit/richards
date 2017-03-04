<?php
$CONFIG = (object)
	[
		'PROG_MODE' => 'PROD',			// this must be TEST or PROD
		'PROG_NAME' => '',
		'PROG_PROD' => 'index.php',
		'PROG_TEST' => 'index.php',
		
		'PROTOCOL_HOST'=>'',
		'PROTOCOL_PROD'=>'http://www.richardsdart.fi/',		
		'PROTOCOL_TEST'=>'http://192.168.0.10:8880/',
		
		'VERSION_PATH' =>'',
		'VERSION_PROD' =>'richards/',
		'VERSION_TEST' =>'richards/',
		
		'CSS_PATH' => 'richards/css/',			'CSS_FILE' =>'rd.css',		
		'HTML_PATH' => 'VIEW/',
		'IMAGE_PATH' => 'images/',
		'JS_PATH' => 'richards/js/',				'JS_FILE'  =>'rd.js',
		'PDF_PATH' => 'docs/pdf/',
		'XLS_PATH' => 'docs/xls/',
		
		'DARTS_LEFT' => 'images/dartsvas.gif',
		'DART_RIGHT' => 'images/dartoik.gif',
		'DART_RIGHT2'=> 'images/dartoik2.gif'		
	];

$host = "PROTOCOL_"	. $CONFIG->PROG_MODE;	$CONFIG->PROTOCOL_HOST = $CONFIG->{$host};
$prog = "PROG_"		. $CONFIG->PROG_MODE;	$CONFIG->PROG_NAME 	  = $CONFIG->{$prog};
$vers = "VERSION_"	. $CONFIG->PROG_MODE;	$CONFIG->VERSION_PATH  = $CONFIG->{$vers};
	
$DBASE = (object)
	[
		'host'=>'localhost',
		'user'=>'richards',
		'pass'=>'dat5Runn3r',
		'base'=>'richards'
	];

?>
