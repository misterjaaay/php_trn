<form action="" method="post">
	<input placeholder="first number" type="text" name="n1"/>
	<select name="action">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
	</select>
	<input placeholder="second number" type="text" name="n2"/>
	<input name="equals" type="submit" value="="/>
</form>

<?php
ini_set('display_errors', 1);


function Calc()
{
	if (isset($_POST['equals'])) {

		$n1 = $_POST['n1'];
		$n2 = $_POST['n2'];
		$action = $_POST['action'];
		switch ($action) {
			case "+":
				$result = $n1 + $n2;
				break;
			case "-":
				$result =  $n1 - $n2;
				break;
			case "*":
				$result =  $n1 * $n2;
				break;
			case "/":
				if(!$n2){
					die('division by zero is not acceptable');
				}
				else {
					$result =  $n1 / $n2;
				}
				break;
		}
	}
	return $result;
}

?>
<div>
	<span>Result is <?php echo Calc();?></span>
</div>