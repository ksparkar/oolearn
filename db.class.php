<?php

include("db.constants.php");

class DBClass {

	# Define public properties here
	public $response;
	private $link;
	public $errormsg;
	public $errorno;

	# End public properties

	function __construct() {
		if (!(@$this->link = mysqli_connect(DBSERVER, DBUSER, DBPASS, DBNAME))) {
			$this->errormsg = mysqli_connect_error();
			$this->errorno = mysqli_connect_errno();
		}
	} # end __construct()

	function getLink() {
		return $this->link;
	}

	function select() {

		# select code here		
	
	} # end select()

	function insert() {

		# insert code here		
	
	} # end insert()

	function update() {

		# update code here		
	
	} # end update()

	function delete() {

		# delete code here		
	
	} # end delete()


	function __destruct() {
		if ($this->link) {
			mysqli_close($this->link);
		}
	} # end __destruct()

}