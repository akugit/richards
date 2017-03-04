<?php
abstract class libDB {
	
	protected $conn = false;
	protected $methodError;
	protected $syntaxError;
	
	abstract function __construct( $host,$user,$pass,$usedb );
	abstract function checkError();
	abstract function getError();
	
	abstract function select( $stmt );
	abstract function update( $stmt );
	abstract function admin(  $stmt );
	
	protected function methodCheck( $method, $stmt ) {
		$check = false;
		$mysql = explode(" ",trim(strtolower($stmt)));
		$using = explode("::",$method);
		$this->setMethodError( $mysql[0]);
		switch( $mysql[0]) {
		case "select":
							if ( $using[1] == "select") $check = true;
							break;
		case "insert":
		case "delete":
		case "update":
							if ( $using[1] == "update") $check = true;
							break;
		default:
							if ( $using[1] == "admin" ) $check = true; 
		}
		if ( $check === false ) { $this->setMethodError("USING $method FOR SQL " .$mysql[0] . " is not allowed"); }
		return $check;
	}
	protected function setMethodError( $msg ) {
		$this->methodError = $msg;
	}
	public function getMethodError() {
		return $this->methodError;
	}
}
?>
