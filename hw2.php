<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>convert me</title></head>

<body>
<p>Convert Temp</p>
<form id="form1" name="form1" method="get" action="FCresult.php">
  <table width="300" border="1">
    <tr>
      <td width="122">Enter Temp </td>
      <td width="168"><label>
        <input name="temp" type="text" id="temp" value="0" size="6" maxlength="8" />
      </label></td>
    </tr>
    <tr>
      <td>Convert to &gt;&gt;&gt; </td>
      <td><p>
        <label></label>
        <label>
        <input name="type" type="radio" value="f" checked="checked" />
Fahrenheit</label>
        <br />
        <label>
        <input type="radio" name="type" value="c" />
Celcius</label>
        <br />
        <br />
      </p></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="Submit" value="Submit" />
      </label></td>
    </tr>
  </table>
</form>
<p><a href="index.php">return</a></p>
</body>
</html>
