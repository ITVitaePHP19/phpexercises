<?php

for($i=1;$i<=10;$i++)
 {
  for($table_counter=10;$table_counter<=10;$table_counter++)
     {
      printf("%d * %d = %d ",$i,$table_counter,($i*$table_counter));
      echo "  ";
      echo "<br> ";
          if($table_counter==10)
          {
          echo "<br> ";
          }
     }
}

?>
