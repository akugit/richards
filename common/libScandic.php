<?php
$aa    = "ä";		  $AA	   = "Ä";
$oo    = "ö";		  $OO	   = "Ö";	
$ar    = "å";		  $AR	   = "Å";
$auml  = "&auml;";  $Auml  = "&Auml;";
$ouml  = "&ouml;";  $Ouml  = "&Ouml;";
$aring = "&aring;"; $Aring = "&Aring;";

$auSQL = chr(228);  $AuSQL = chr(196); $auUTF = chr(195).chr(164); $AuUTF = chr(195).chr(132);
$ouSQL = chr(246);  $OuSQL = chr(214); $ouUTF = chr(195).chr(182); $OuUTF = chr(195).chr(150);
$arSQL = chr(229);  $ArSQL = chr(197); $arUTF = chr(195).chr(165); $ArUTF = chr(195).chr(133);

function sqlUTF( $orig ) {
global $auml,$Auml,$ouml,$Ouml,$aring,$Aring,$auSQL,$AuSQL,$auUTF,$AuUTF,$ouSQL,$OuSQL,$ouUTF,$OuUTF,$arSQL,$ArSQL,$arUTF,$ArUTF;

	$text = str_replace($auSQL, $auUTF, $orig); $text = str_replace($AuSQL, $AuUTF, $text);
	$text = str_replace($ouSQL, $ouUTF, $text); $text = str_replace($OuSQL, $OuUTF, $text);
	$text = str_replace($arSQL, $arUTF, $text); $text = str_replace($ArSQL, $ArUTF, $text);
	return $text;
}
function sqlHTML( $orig ) {
global $auml,$Auml,$ouml,$Ouml,$aring,$Aring,$auSQL,$AuSQL,$auUTF,$AuUTF,$ouSQL,$OuSQL,$ouUTF,$OuUTF,$arSQL,$ArSQL,$arUTF,$ArUTF;

	$text = str_replace($auSQL, $auml, $orig); $text = str_replace($AuSQL, $Auml, $text);
	$text = str_replace($ouSQL, $ouml, $text); $text = str_replace($OuSQL, $Ouml, $text);
	$text = str_replace($arSQL, $aring,$text); $text = str_replace($ArSQL, $Aring,$text);
	return $text;
}
function utfSQL( $orig ) {
global $auml,$Auml,$ouml,$Ouml,$aring,$Aring,$auSQL,$AuSQL,$auUTF,$AuUTF,$ouSQL,$OuSQL,$ouUTF,$OuUTF,$arSQL,$ArSQL,$arUTF,$ArUTF;

	$text = str_replace($auUTF, $auSQL, $orig); $text = str_replace($AuUTF, $AuSQL, $text);
	$text = str_replace($ouUTF, $ouSQL, $text); $text = str_replace($OuUTF, $OuSQL, $text);
	$text = str_replace($arUTF, $arSQL, $text); $text = str_replace($ArUTF, $ArSQL, $text);
	return $text;
}
function utfHTML( $orig ) {
global $auml,$Auml,$ouml,$Ouml,$aring,$Aring,$auSQL,$AuSQL,$auUTF,$AuUTF,$ouSQL,$OuSQL,$ouUTF,$OuUTF,$arSQL,$ArSQL,$arUTF,$ArUTF;
	$text = str_replace($auUTF, $auml, $orig); $text = str_replace($AuUTF, $Auml, $text);
	$text = str_replace($ouUTF, $ouml, $text); $text = str_replace($OuUTF, $Ouml, $text);
	$text = str_replace($arUTF, $aring,$text); $text = str_replace($ArUTF, $Aring,$text);
	return $text;
}
function phpHTML( $orig ) {
global $auml,$Auml,$ouml,$Ouml,$aring,$Aring,$auSQL,$AuSQL,$auUTF,$AuUTF,$ouSQL,$OuSQL,$ouUTF,$OuUTF,$arSQL,$ArSQL,$arUTF,$ArUTF;
	$text = str_replace('ä', $auml, $orig); $text = str_replace('Ä', $Auml, $text);
	$text = str_replace('ö', $ouml, $text); $text = str_replace('Ö', $Ouml, $text);
	$text = str_replace('å', $aring,$text); $text = str_replace('Å', $Aring,$text);
	return $text;	
}
function charDEBUG( $orig ) {
global $aa,$AA,$oo,$OO,$ar,$AR,$auml,$Auml,$ouml,$Ouml,$aring,$Aring,$auSQL,$AuSQL,$auUTF,$AuUTF,$ouSQL,$OuSQL,$ouUTF,$OuUTF,$arSQL,$ArSQL,$arUTF,$ArUTF;
	$txt  = "STRING<br>";
	$find = stripos($orig,$auml);  if ( $find === false ) $find = "NO"; $txt .= "auml : $find <br>"; 
	$find = stripos($orig,$auSQL); if ( $find === false ) $find = "NO"; $txt .= "auSQL: $find <br>";
	$find = stripos($orig,$auUTF); if ( $find === false ) $find = "NO"; $txt .= "auUTF: $find <br>";
	$find = stripos($orig,$aa);    if ( $find === false ) $find = "NO"; $txt .= "auaa : $find <br>";
	$txt.= "MB_STRING:<br>";
	$find = mb_stripos($orig,$auml);  if ( $find === false ) $find = "NO"; $txt .= "mbml : $find <br>"; 
	$find = mb_stripos($orig,$auSQL); if ( $find === false ) $find = "NO"; $txt .= "mbSQL: $find <br>";
	$find = mb_stripos($orig,$auUTF); if ( $find === false ) $find = "NO"; $txt .= "mbUTF: $find <br>";
	$find = mb_stripos($orig,$aa);	 if ( $find === false ) $find = "NO"; $txt .= "mbaa : $find <br>";
	$txt.= "ONEBYTE<br>";
	$find = strpos($orig,chr(195));	 if ( $find === false ) $find = "NO"; $txt .= "195  : $find <br>";
	$find = strpos($orig,chr(164));	 if ( $find === false ) $find = "NO"; $txt .= "164  : $find <br>";		
	$txt.= "LENGHT<br>";
	$txt.= "  len:	aa: " . strlen($aa) . "(" . ord(substr($aa,0,1)) . "/" . ord(substr($aa,1,1)) . ")<br>";
	$txt.= "mblen:	aa: " . mb_strlen($aa) . "<br>";	
	$txt.= mb_internal_encoding() . "<br>";
	return $txt;	
}
?>
