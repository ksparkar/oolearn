<?php

$a = 3;

localVar();

function localVar() {
	global $a;
	echo $a;
}