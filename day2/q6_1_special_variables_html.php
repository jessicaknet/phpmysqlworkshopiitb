<html>
   <body>
   
      <form action = "checkTriangle.php" method = "GET">
         Side1: <input type = "text" name = "side1" />
         Side2: <input type = "text" name = "side2" />
         Side3: <input type = "text" name = "side3" />
         <input type = "submit" />
      </form>
      
   </body>
   
</html>
<?php
    $a=$_GET["side1"];
    $b=$_GET["side2"];
    $c=$_GET["side3"];
   if($a==$b && $a==$c && $b==$c ) {
      echo "Your Triangle is Equilateral";
    }elseif($a==$b || $a==$c || $b==$c){
        echo "Your Triangle is Isosceles";
    }else{
        echo "Your Triangle is scalene";
    }
?>
