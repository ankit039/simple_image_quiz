<?php
session_start();

if(isset($_POST['submit']))
{
	$answer = $_POST["answer"];
}
if($answer=='cherry')
{
	    session_start();
	    $_SESSION["confirm"] = "$answer";
		header("location: q5.php");
		exit();
	}
		else
		{
			header("location: q4.php?wrong_answer");
			exit();
        }
?>
