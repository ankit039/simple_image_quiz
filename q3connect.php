<?php
session_start();

if(isset($_POST['submit']))
{
	$answer = $_POST["answer"];
}
if($answer=='salman khan'||'Salman khan'||'Salman Khan'||'salman Khan')
{
	    session_start();
	    $_SESSION["confirm"] = "$answer";
		header("location: q4.php");
		exit();
	}
		else
		{
			header("location: q3.php?wrong_answer");
			exit();
        }
?>
