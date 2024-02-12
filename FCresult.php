<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>convert!</title>
</head>

<body>
<p>Temperature Conversion</p>
<p>
  <?php 
    $temp = $_GET["temp"];
	$type = $_GET["type"];
	if( $type == "f")
		printf("You converted $temp Celcius to ". number_format((float)((9 * $temp) / 5 + 32),2, '.', '') ." Fahrenheit <br>");
	else
		printf("You converted $temp Fahrenheit to ". number_format((float)(($temp - 32) * 5/9), 1, '.','') ." Celcius <br>");
  ?>	
</p>
<p><a href="hw2.php">return</a></p>


</body></html>