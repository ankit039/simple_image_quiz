<?php
session_start();

if(isset($_POST['submit']))
{
	$answer = $_POST["answer"];
}
if($answer=='fuse')
{      
	    session_start();
	    $_SESSION["confirm"] = "$answer";
		header("location: q6.php");
		exit();
	}
		else
		{
			header("location: q5.php?wrong_answer");
			exit();
        }
?>
