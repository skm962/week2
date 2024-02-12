<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Change the Number Sign</title>
</head>

<body>
<p>Change the Sign of Number</p>
<h3>
<?php 
function changeIt($num){
   echo "The new number is: ". $num * -1 ." <br>";
}
changeIt($_GET["changeIt"])
?>
</h3>
<p><a href="hw7.php">return</a></p>


</body></html>