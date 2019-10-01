<?php 
session_start();
if(isset($_SESSION["confirm"])=='PIXL')
{?>
<html>
<head>
  <meta charset="UTF-8">
	<title>Quiz</title>
  <link rel="icon" href="mil.png" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="asset/css/style.css">
</head>

<body>

<form action="q8connect.php" method="post">
<div class="box black">
<div align="center">
  <br><br><br>
<h1>WAR FOR TREZOR</h1>
<img src="asset/image/8.jpg">
    <div class="container">
      <input type="text" placeholder="Your Answer" name="answer">
        <br>
      <button type="submit" name="submit" ><strong>Submit</strong></button> 
      <br><br>
    </div>
  </div>
</div>
</form>

</body>
</html>
<?php
                 }

            else{
                    echo ('<meta http-equiv="refresh" content="0; URL=q1.php">');
                }
//edit
?>
