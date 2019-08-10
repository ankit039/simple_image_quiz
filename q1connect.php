<?php

if(isset($_POST['submit']))
{
	$answer = $_POST["answer"];
}
if($answer=='atom')
{
	    session_start();
	    $_SESSION["confirm"] = "$answer";
		header("location: q2.php");
		exit();
	}
		else
		{
			header("location: q1.php?wrong_answer");
			exit();
        }
?>
