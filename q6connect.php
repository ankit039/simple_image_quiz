<?php
session_start();

if(isset($_POST['submit']))
{
	$answer = $_POST["answer"];
}
if($answer=='juet'||'JUET')
{
	    session_start();
	    $_SESSION["confirm"] = "$answer";
		header("location: q7.php");
		exit();
	}
		else
		{
			header("location: q6.php?wrong_answer");
			exit();
        }
?>
