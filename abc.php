<?php
$host="localhost";
$user="root";
$password="";
$db_name="project";

$con = mysqli_connect($host, $user, $password, $db_name);  
   if(mysqli_connect_errno()) {  
       die("Failed to connect with MySQL: ". mysqli_connect_error());  
   }



  $SI = $_POST['SI'];
  $sno = $_POST['sno'];
  $sql1 = "select * from assetmaster where SelectItem ='$SI'  && SNo ='$sno' "; 
  $result2= mysqli_query($con, $sql1);  
  echo $SI;
  ?>
  <table>
    <?php
        
      while($row = mysqli_fetch_assoc($result2))
      
      {
          ?>    
          <tr>
            
              <td><?php echo $row['SelectItem'];?></td>
              <td><?php echo $row['SNo']; ?></td>
              <td><?php echo $row['IssuedDept']; ?></td>
              <td><?php echo $row['IssuerName']; ?></td>
              <td><?php echo $row['AdditionalFlag']; ?></td>
              <td><?php echo $row['IssueDate']; ?></td>
              <td><?php echo $row['AssetTransaction']; ?></td>
              
              
              
            </tr>
            <?php 
    }
    ?>
    </table> 
  
