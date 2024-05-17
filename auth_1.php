<?php
$host="localhost";
$user="root";
$password="";
$db_name="project";

$con = mysqli_connect($host, $user, $password, $db_name);  
   if(mysqli_connect_errno()) {  
       die("Failed to connect with MySQL: ". mysqli_connect_error()); 
       
   }
   
  $Sno = $_POST['sno1'];  
  $Brand= $_POST['brand'];  
  $ProcurementDate = $_POST['prd'];    
  $DeliveryDate = $_POST['dd'];  
  $ItemType = $_POST['it'];
  $SupplierDetails = $_POST['sd'];  
  $CallLogDetails = $_POST['cld'];  
  $ContactOrder = $_POST['cono'];    
  $WarrentyPeriod = $_POST['wp'];  
  $AssetCode = $_POST['ac'];
  $BCNo = $_POST['bcn'];  
  $FileNo = $_POST['fn'];  
  $Financialyser= $_POST['finl'];    
  $Amount = $_POST['amount'];  
  $Quantity = $_POST['quan'];
  $AreaAllocation  = $_POST['aa'];


$sql="INSERT INTO asset ( SNo,Brand,ProcurementDate,DeliveryDate,ItemType,SupplierDetails,CallLogDetails,ContactOrder,WarrentyPeriod,AssetCode,BCNo,FileNo,Financialyser,Amount,Quantity,AreaAllocation)
VALUES ('$Sno',' $Brand','$ProcurementDate ','$DeliveryDate', '$ItemType','$SupplierDetails','$CallLogDetails','$ContactOrder','$WarrentyPeriod','$AssetCode','$BCNo','$FileNo','$Financialyser','$Amount ','$Quantity','$AreaAllocation' )";
$result = mysqli_query($con, $sql); 
if($result){
    echo "the row is created successfully";
}
else{
    echo "the row has not been created ";
}        



   ?>