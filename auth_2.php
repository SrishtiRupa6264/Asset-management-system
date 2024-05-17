<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<style>
th{
    background-color:black;
}
body{
    background-color:#008080;
}

</style>


<body>
    


<?php

$host="localhost";
$user="root";
$password="";
$db_name="project";

$con = mysqli_connect($host, $user, $password, $db_name);  
   if(mysqli_connect_errno()) {  
       die("Failed to connect with MySQL: ". mysqli_connect_error());  
   }
   $sql = "select * from asset"; 
   $result = mysqli_query($con, $sql);  

    
   
?>
<h1 align="center"><br><u>DETAILS</u></h1>
<br>


<table class="table table-striped table-dark">
<thead class="thead-dark">
    <tr>
        <th>SNo</th>
        <th>Brand</th>
        <th>ProcurementDate</th>
        <th>DeliveryDate</th>
        <th>ItemType</th>
        <th>SupplierDetails</th>
        <th>CallLogDetails</th>
        <th>ContactOrder</th>
        <th>WarrentyPeriod</th>
        <th>AssetCode</th>
        <th>BCNo</th>
        <th>FileNo</th>
        <th>Financialyser</th>
        <th>Amount</th>
        <th>Quantity</th>
        <th>AreaAllocation</th>
        
    </tr>
    </thead>
<?php

while($row = mysqli_fetch_assoc($result))

    {
    ?>    
        <tr>
          
            <td><?php echo $row['Sno'];?></td>
            <td><?php echo $row['Brand']; ?></td>
            <td><?php echo $row['ProcurementDate']; ?></td>
            <td><?php echo $row['DeliveryDate']; ?></td>
            <td><?php echo $row['ItemType']; ?></td>
            <td><?php echo $row['SupplierDetails']; ?></td>
            <td><?php echo $row['CallLogDetails']; ?></td>
            <td><?php echo $row['ContactOrder'];?></td>
            <td><?php echo $row['WarrentyPeriod']; ?></td>
            <td><?php echo $row['AssetCode']; ?></td>
            <td><?php echo $row['BCNo']; ?></td>
            <td><?php echo $row['FileNo']; ?></td>
            <td><?php echo $row['Financialyser'];?></td>
            <td><?php echo $row['Amount']; ?></td>
            <td><?php echo $row['Quantity']; ?></td>
            <td><?php echo $row['AreaAllocation']; ?></td>
            
            
        </tr>

    <?php  
    }
    ?>
    </table>
    </body>
    </html>
