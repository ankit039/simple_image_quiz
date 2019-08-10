<?php
session_start();

if(isset($_POST['submit']))
{
	$answer = $_POST["answer"];
}
if($answer=='feviquick')
{
	    session_start();
	    $_SESSION["confirm"] = "$answer";
		header("location: q3.php");
		exit();
	}
		else
		{
			header("location: q2.php?wrong_answer");
			exit();
        }
?>
