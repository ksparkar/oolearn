<?php

$a = 2;

localVar();

function localVar() {
	global $a;
	echo $a;
}