<form action="q2_strings_functions.php" method='POST'>
<h3>Enter Your Details</h3>
Name of Student: <input type='text' name='name' ><br/><br>
Submit: <input type='submit' name='submit'><br>
</form>




<?php
$string= $_POST['name'];

if(isset($string)){
    echo "Length of string is ".strlen($string)."<br>";
    echo "<br>"."Reverse the string is ".strrev($string)."<br>";
    echo "All alphabet to upper case: ".strtoupper($string)."<br>";
    echo "All alphabet to Lower case: ".strtolower($string)."<br>";
    $result= substr_replace($string,$substring,11,16);
    echo "$result";
}
