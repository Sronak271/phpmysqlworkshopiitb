  <?php
  
  $oper;
  $num1 = readline('Enter first no : ');
  $num2 = readline('Enter second no : ');

  echo "1.Addition   2.Substraction   3.Multiply   4.Division  \n";
  $ch = readline('Enter your choice:');

  switch($ch)
  {
             case 1:
             {    $oper = $num1 + $num2;
                  echo"$oper";
                  break;
             }
             case 2:
             {    $oper = $num1 - $num2;
                  echo"$oper";
                  break;
             }
             case 3:
             {    $oper = $num1 * $num2;
                  echo"$oper";
                  break;
             }
             case 4:
             {    $oper = $num1 / $num2;
                  echo"$oper";
                  break;
             }
             default:
                  echo"Invalid choice";
  }

  ?>