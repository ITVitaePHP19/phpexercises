<?php
for($i=1;$i<=10;$i++)
 {
  for($table=10;$table<=10;$table++)
     {
      printf("%d * %d = %d ",$i,$table,($i*$table));
      
	  echo "  ";
      echo "<br> ";
          if($table == 10)
          {
          echo "<br> ";
		  
          }
     }
}
?>