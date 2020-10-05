<?php
    
    echo $_POST['sub1']; 
    if(isset($_POST['submit'])){  
            $name = $_POST['name'];
            $Sub1 = $_POST['sub1'];
            $Sub2 = $_POST['sub2'];
            $Sub3 = $_POST['sub3'];
            $Sub4 = $_POST['sub4'];
            $Sub5 = $_POST['sub5'];
            echo $name;
            echo "Subject 1 Marks : $Sub1";
            echo "Subject 2 Marks : $Sub2";
            echo "Subject 3 Marks : $Sub3";
            echo "Subject 4 Marks : $Sub4";
            echo "Subject 5 Marks : $Sub5";
            $totalMarksObtained = $Sub1 + $Sub2 + $Sub3 +$Sub4 + $Sub5;
            echo "Total Marks Obtained : $totalMarksObtained";
            $totalMarks = 500;
            echo "Total Marks : $totalMarks";
            $Percentage =  $totalMarksObtained/$totalMarks*100;
            echo "Percentage :  $Percentage";
      }
        
    

?>

<html>
   <body>
   
      <form action = "marksheet.php" method = "POST">
        <input type = "text" name = "name" placeholder = "Name of student:" /><br>
        <label for = "marksentry">Marks Of Student</lable><br> 
        <input type = "text" name = "sub1" placeholder = "Subject 1" /><br>
        <input type = "text" name = "sub2" placeholder = "Subject 1" /><br>
        <input type = "text" name = "sub3" placeholder = "Subject 2" /><br>
        <input type = "text" name = "sub4" placeholder = "Subject 3" /><br>
        <input type = "text" name = "sub5" placeholder = "Subject 4" /><br>
        <input type = "submit"  name = 'submit' value = "Submit"/>
      </form>
      
   </body>
  
</html>