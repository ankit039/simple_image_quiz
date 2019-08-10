<?php
session_start();

if(isset($_POST['submit']))
{
	$answer = $_POST["answer"];
}
if($answer=='PIXL')
{ 
	    session_start();
	    $_SESSION["confirm"] = "$answer";
		header("location: q8.php");
		exit();
	}
		else
		{
			header("location: q7.php?wrong_answer");
			exit();
        }
?>
