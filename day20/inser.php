<html>
<head>
    <link rel="stylesheet" type="text/css" href='feedcss.css' />
	<link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Grenze+Gotisch"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Montserrat"
    />

</head>
<body>
<header>

</header>
				<main>
		        <div class="box">
				<form id="survey-form" >
				<h2>


<?php
$NA=$_POST['name'];
$E=$_POST['email'];
$AGE=$_POST['age'];
$FEED=$_POST['feedback'];
$con=mysqli_connect("localhost","root");
if($con)
echo " ";
else
echo "Error";
$db=mysqli_select_db($con,"first_db");
$sql="insert into feedback_table(Name,Email,Age,Text) values
('$NA','$E','$AGE','$FEED')";
$cmd=mysqli_query($con,$sql);
if($cmd)
{
	echo "Thank you for your feedback";
	echo "<br>";
	echo "Your data is succefuly recevied";
//echo "data insertd successfully<br>";
//header("location:display_inserted.php");
}
else{
echo "Error is:".mysqli_error($con);
}
?>
</h2>
</form>
</div>
</main>

</body>
</html>