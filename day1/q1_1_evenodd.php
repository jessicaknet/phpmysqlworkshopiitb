<html>
<head>
    <title>even or odd</title>
</head>
<body>

<form>
    <div>Number:</div>
    <input type="number" name="num"/>

  <div><br><input type="submit" value="answer"></div><br>

</form>

<?php
if (isset($_GET['num']))
{
  $num = $_GET['num'];

if ($num%2==0) {
   echo "The number is ".$num. " an even integer";
}
else {
  echo "The number is ".$num." an odd integer";
  }
}
?>
</body>
</html>