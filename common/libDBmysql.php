<?php
include_once "libDB.php";
class libDBmysql extends libDB {

//	var $conn;
		
	function __construct( $host,$user,$pass,$usedb ) {
	
		if ( !$this->conn ) $this->conn = new mysqli( $host,$user,$pass,$usedb );		
		return $this->conn;
	}
	public function checkError() {
		if ( $this->conn->connect_errno ) return true;
		else 										 return false;
	}
	public function getError() {
		return "****\n**** ERROR ("
				. $this->conn->connect_errno . ") "
				. $this->conn->connect_error . "\n****\n";
	}
	public function select( $stmt ) {
		$rows = false;
		if ( $this->methodCheck( __METHOD__ ,$stmt )) 
			$rows = $this->exeq( $this->conn->real_escape_string( $stmt ));
//		else
//			$this->setMethodError("Using " . __CLASS__ ."::" . __METHOD__ 
//								  . " for SQL " . ($this->getMethodError()) . " operation");	
		return $rows;
	}
	public function update( $stmt ) {
		$rows = false;
		if ( $this->methodCheck( __METHOD__ ,$stmt )) 
			$rows = $this->exec( $this->conn->real_escape_string( $stmt ));
//		else
//			$this->setMethodError("Using " . __METHOD__ 
//								  . " for SQL " . ($this->getMethodError()) . " operation");	
		return $rows;
	}
   public function admin(  $stmt ) {
   	$rows = false;
   	if ( $this->methodCheck( __METHOD__, $stmt ))
			$rows = $this->exec( $this->conn->real_escape_string( $stmt )); 
//			$this->setMethodError(__METHOD__  . " SQL " . ($this->getMethodError()) . " operation not allowed");	
   	return $rows;
   }
   private function exec( $stmt ) {
   	$rows = false;
   	if ( $this->conn->query( $stmt )) $rows = $this->conn->affected_rows;
   	return $rows;
   }
   private function exeq( $stmt ) {
   	$rows = false;
   	$rset = $this->conn->query( $stmt );
   	if ( $rset ) {
   		$rows = []; 
// 		$cols = []; $vals = [];
   		while ( $rrow = mysqli_fetch_assoc( $rset )) {
//echo("DEBUG: " . basename(__FILE__) . "\n"); print_r($rrow);
   			$data = [];
   			foreach( $rrow as $col=>$val ) $data[$col] = $val;
   			$rows[] = $data;
   		}
		$rset->close();
		}
else echo("*** RSET FAILED\n\n" . $this->getError());
		return $rows;
   }
}
?>
