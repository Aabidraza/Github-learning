<table  cellspacing="0px" cellpadding="0px" border="2px">  

      <?php  
      $total=0;
      for($i=1;$i<=8;$i++)  // row 
      {  
          echo "<tr>";  
          for($j=1;$j<=8;$j++)   // column
          {  
		  $total=$i+$j;  
		  if($total%2==0)  
		  {  
		  	echo "<td height=10px width=10px bgcolor=white></td>";  
		  }  
		  else{  
			  echo "<td height=10px width=10px bgcolor=black></td>";  
		  }  
          }  
          echo "</tr>";  
      }  
          ?>  
  </table>  
