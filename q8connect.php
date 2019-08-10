<?php
session_start();

if(isset($_POST['submit']))
{
	$answer = $_POST["answer"];
}
if($answer=='tesla')
{
	    session_start();
	    $_SESSION["confirm"] = "$answer";
		header("location: complete.php");
		exit();
	}
		else
		{
			header("location: q8.php?wrong_answer");
			exit();
        }
?>
