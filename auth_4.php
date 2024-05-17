<?php
 
     
    $conn = mysqli_connect("localhost", "root", "", "project");
        
  
        
        
        for ($a = 0; $a < count($_POST["itemName"]); $a++)
        {
            $sql = " INSERT INTO assetmaster (SelectItem,SNo,IssuedDept,IssuerName,AdditionalFlag,IssueDate,AssetTransaction) 
            VALUES (' "  .$_POST["itemName"][$a]. " ' ,' ". $_POST["itemQuantity"][$a]. " ',' ". $_POST["itemQuantity1"][$a]. " ',' ". $_POST["itemQuantity2"][$a]. " ',' ". $_POST["itemQuantity3"][$a]. " ',' ". $_POST["itemQuantity4"][$a]. " ',' ". $_POST["itemQuantity5"][$a]. " ' )";
            mysqli_query($conn, $sql);
        }
      
 echo "the row has been inserted";
    
 
?>