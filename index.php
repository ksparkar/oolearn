<?php

include("db.class.php");

$db = new DBClass();

if ($db->errorno) {
	echo $db->errorno . " : " . $db->errormsg;
} else {
	echo $db->getLink();
}