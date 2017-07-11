<?php
//error_reporting( E_ERROR | E_NOTICE | E_PARSE );
//phpinfo(); 

include "common/libDBmysql.php";
include "common/libScandic.php";

include "common/rdconfig.php";

$msg = "";//"message rows:<br>";

$conn = new libDBmysql( $DBASE->host, $DBASE->user, $DBASE->pass, $DBASE->base );

if ( $conn === false )	$msg .= "CANNOT CREATE CONNECTION TO DATABASE<br>";
//else							$msg .= "CONNECTION OK<br>";

$next = "index";
if ( isset( $_REQUEST['next'])) $next = $_REQUEST['next'];

$html = "";
switch( $next ) {
	case "liiga": 		{ $html = $CONFIG->VERSION_PATH . $CONFIG->HTML_PATH . "rdliiga.html"; break; } 
	case "piiri":		{ $html = $CONFIG->VERSION_PATH . $CONFIG->HTML_PATH . "rdpiiri.html"; break; }
	case "tulos":		{ $html = $CONFIG->VERSION_PATH . $CONFIG->HTML_PATH . "tulokset.html"; break; }
	case "lomake":		{ $html = $CONFIG->VERSION_PATH . $CONFIG->HTML_PATH . "lomakkeet.html"; break; }
	case "historia":	{ $html = $CONFIG->VERSION_PATH . $CONFIG->HTML_PATH . "rd_historiaa.html"; break; }
	case "kalenteri":	{ $html = $CONFIG->VERSION_PATH . $CONFIG->HTML_PATH . "kalenteri_NYT.html"; break; }
	case "prefill":	//{ $html = $CONFIG->VERSION_PATH . $CONFIG->HTML_PATH . "prefilled.html"; break; }
	case "index":
	default:				{ $html = $CONFIG->VERSION_PATH . $CONFIG->HTML_PATH . "richards.html"; break; }
}

echo( setPage( $html, (array)$CONFIG, $msg ));

function setPage( $file, $vars_array, $msg = null ) {
	
	extract( $vars_array);
	
	$html = include( $file );	
//	$html = sqlUTF( $html );
//	$html = utfHTML( $html ); // let's see if we can do without these
	
	return( $html );	
}
?>
