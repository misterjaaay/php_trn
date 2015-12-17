<?php
ini_set('display_errors', 1);

function Calc($n1, $n2, $action)
{
	switch ($action){
		case "+":
			echo $n1+$n2;
			break;
		case "-":
			echo $n1-$n2;
			break;
		case "*":
			echo $n1*$n2;
			break;
		case "/":
			echo $n1/$n2;
			break;
	}
}

Calc(1,1,"+");