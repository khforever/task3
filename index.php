<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<!--    while loop -->
 
        <?php
        $x = 1;
        while ($x <= 12) {
        if ($x==4)
        {
            $x++;
            continue;
        }
        



        if ($x==13)
        {
            break;
        }




        
        ?>
            <h3>
                
            <?php echo $x;  ?>
        
        
        </h3>
        <?php
            $x++;
        }
 
?>

<hr>
<!--  do while loop -->
<?php
    $num = 1;
    do {
    ?>
        <h3><?php echo $num;  ?></h3>
    <?php
        $num++;
    } while ($num <= 12)
    ?>
<hr>
<!--  for loop -->
<?php

for ($x = 1; $x <= 12; $x++) {

    ?>
    <h3>
<?php
    echo   $x   ;
?>

</h3>

<?php
}
?>



<hr>


<!-- constant value -->
<?php

define("pi", 3.14);
?>
<h3>
<?php
echo pi;
?>
</h3>


<hr>

<!--switch case-->
<?php
$grade = 90;
 

switch ($grade) {
    case "50":


        ?>

        <h3>
            <?php
        echo "pass";
        break;
        ?>
        </h3>

        <?php
    case "55":
        ?>
        <h3>
        <?php
        echo "pass";
        break;

        ?>

        </h3>
        <?php

    case "55":
        ?>
        <h3>
            <?php
     echo "pass";
     break;

     ?>
        </h3>
     <?php
        case "60":
      
      ?>
      <h3>
      <?php    
      echo "good";
       break;
?>
      </h3>
      <?php

       case "70":
      ?>

      <h3>
      <?php  
      echo "very good";
        break;
?>
      </h3>
      <?php
        case "90":
           
           ?>

           <h3>
            
           <?php

           echo "Excellent";
            break;
?>
           </h3>
           <?php
    default:
    ?>
    <h3>
        <?php

echo "THERE IS A mistake";
?>
    </h3>
    <?php

}



?>



<hr>

<!-- If stetment -->

<?php


$grade = 72;
if ($grade >=50  && $grade <55) {
    
    ?>
    <h3>
    
    <?php
    
    echo "pass";
} 
?>

    </h3>

    <?php
if ($grade >= 55 && $grade <60 )

{

    ?>
    <h3>
        <?php
    echo "pass";
}
?>
    </h3>

    <?php


if ($grade >= 60 && $grade<70)

{

    ?>

    <h3>

    <?php

    echo "good";
}

?>

    </h3>
    <?php

if ($grade >= 70  && $grade < 90)

{

    ?>

    <h3>


    <?php
    echo "very good";
}

?>

    </h3>

    <?php

if ($grade >= 90 && $grade<100)

{


    ?>


<h3><?php
    echo "Excellent";
}


?>
</h3>







</body>
</html>

