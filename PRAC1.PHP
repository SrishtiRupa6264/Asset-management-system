<script>
    function getUniqueValuesFromColumn() {

var unique_col_values_dict = {}

allFilters = document.querySelectorAll(".table-filter")
allFilters.forEach((filter_i) => {
    col_index = filter_i.parentElement.getAttribute("col-index");
    // alert(col_index)
    const rows = document.querySelectorAll("#emp-table > tbody > tr")

    rows.forEach((row) => {
        cell_value = row.querySelector("td:nth-child("+col_index+")").innerHTML;
        // if the col index is already present in the dict
        if (col_index in unique_col_values_dict) {

            // if the cell value is already present in the array
            if (unique_col_values_dict[col_index].includes(cell_value)) {
                // alert(cell_value + " is already present in the array : " + unique_col_values_dict[col_index])

            } else {
                unique_col_values_dict[col_index].push(cell_value)
                // alert("Array after adding the cell value : " + unique_col_values_dict[col_index])

            }


        } else {
            unique_col_values_dict[col_index] = new Array(cell_value)
        }
    });

    
});

for(i in unique_col_values_dict) {
    alert("Column index : " + i + " has Unique values : \n" + unique_col_values_dict[i]);
}

updateSelectOptions(unique_col_values_dict)

};

// Add <option> tags to the desired columns based on the unique values

function updateSelectOptions(unique_col_values_dict) {
allFilters = document.querySelectorAll(".table-filter")

allFilters.forEach((filter_i) => {
    col_index = filter_i.parentElement.getAttribute('col-index')

    unique_col_values_dict[col_index].forEach((i) => {
        filter_i.innerHTML = filter_i.innerHTML + `\n<option value="${i}">${i}</option>`
    });

});
};


// Create filter_rows() function

// filter_value_dict {2 : Value selected, 4:value, 5: value}

function filter_rows() {
allFilters = document.querySelectorAll(".table-filter")
var filter_value_dict = {}

allFilters.forEach((filter_i) => {
    col_index = filter_i.parentElement.getAttribute('col-index')

    value = filter_i.value
    if (value != "all") {
        filter_value_dict[col_index] = value;
    }
});

var col_cell_value_dict = {};

const rows = document.querySelectorAll("#emp-table tbody tr");
rows.forEach((row) => {
    var display_row = true;

    allFilters.forEach((filter_i) => {
        col_index = filter_i.parentElement.getAttribute('col-index')
        col_cell_value_dict[col_index] = row.querySelector("td:nth-child(" + col_index+ ")").innerHTML
    })

    for (var col_i in filter_value_dict) {
        filter_value = filter_value_dict[col_i]
        row_cell_value = col_cell_value_dict[col_i]
        
        if (row_cell_value.indexOf(filter_value) == -1 && filter_value != "all") {
            display_row = false;
            break;
        }


    }

    if (display_row == true) {
        row.style.display = "table-row"

    } else {
        row.style.display = "none"

    }





})

}
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
    
</body>
</html>







<?php
$host="localhost";
$user="root";
$password="";
$db_name="project";

$con = mysqli_connect($host, $user, $password, $db_name);  
   if(mysqli_connect_errno()) {  
       die("Failed to connect with MySQL: ". mysqli_connect_error());  
   }
  

    
   
?>
<style>
    h1{
        color:black;
    }
body{
    background-color:#008080;
}

</style>
<h1 align="center"><br><u>DETAILS</u></h1>
<br>
<form action="PRAC1.php" method="post">
<table class="table table-striped table-dark">
    <tr>
        <th col-index = 1>Itemselected
        <select class="table-filter" name="SI" >
          <?php
           $sql = "select * from assetmaster"; 
           $result = mysqli_query($con, $sql);  
            while($row = mysqli_fetch_assoc($result))
          {  echo "<option value=".$row['SelectItem'].">"  .$row['SelectItem']."</option>";
          }
          ?>
          </select>
          
          
          
        </th>
        <th col-index = 2>SNo
        <select class="table-filter" name="sno" >
        <?php
           $sql = "select * from assetmaster"; 
           $result = mysqli_query($con, $sql);  
            while($row = mysqli_fetch_assoc($result))
          {  echo "<option value=".$row['SNo'].">"  .$row['SNo']."</option>";
          }
          ?>
          </select>
        </th>



        <th col-index = 3>IssuedDept
        <select class="table-filter" name="ID" >
        <?php
           $sql = "select * from assetmaster"; 
           $result = mysqli_query($con, $sql);  
            while($row = mysqli_fetch_assoc($result))
          {  echo "<option value=".$row['IssuedDept'].">"  .$row['IssuedDept']."</option>";
          }
          ?>
          </select>
                   
        </th>


        <th col-index =4 >IssuerName
        <select class="table-filter" name="IN">
        <?php
           $sql = "select * from assetmaster"; 
           $result = mysqli_query($con, $sql);  
            while($row = mysqli_fetch_assoc($result))
          {  echo "<option value=".$row['IssuerName'].">"  .$row['IssuerName']."</option>";
          }
          ?>
          </select>
                    
        </th>



        <th col-index =5 >AdditionalFlag
        <select class="table-filter"  name="AF">
        <?php
           $sql = "select * from assetmaster"; 
           $result = mysqli_query($con, $sql);  
            while($row = mysqli_fetch_assoc($result))
          {  echo "<option value=".$row['AdditionalFlag'].">"  .$row['AdditionalFlag']."</option>";
          }
          ?>
          </select>
        </th>


        <th col-index = 6>IssueDate
        <select class="table-filter" name="id" >
        <?php
           $sql = "select * from assetmaster"; 
           $result = mysqli_query($con, $sql);  
            while($row = mysqli_fetch_assoc($result))
          {  echo "<option value=".$row['IssueDate'].">"  .$row['IssueDate']."</option>";
          }
          ?>
          </select>


        </th>
        <th col-index = 7>AssetTransaction
        <select class="table-filter" name="AT" >
        <?php
           $sql = "select * from assetmaster"; 
           $result = mysqli_query($con, $sql);  
            while($row = mysqli_fetch_assoc($result))
          {  echo "<option value=".$row['AssetTransaction'].">"  .$row['AssetTransaction']."</option>";
          }
          ?>
          </select>
                    
        </th>
        
        
    </tr>
          <input type="submit" name= "submit">
        </table>

        
    </form>

    <?php

if(isset($_POST['SI'])){

          $SI = $_POST['SI'];
          $sno = $_POST['sno'];
          $ID=$_POST['ID'];
          $IN=$_POST['IN'];
          $AF=$_POST['AF'];
          $id=$_POST['id'];
          $AT=$_POST['AT'];
        }
  
          $sql1 = "select * from assetmaster where SelectItem ='$SI'  && SNo ='$sno' && IssuedDept='$ID' && IssuerName='$IN' && AdditionalFlag='$AF' && IssueDate='$id' && AssetTransaction='$AT' "; 
          $result2= mysqli_query($con, $sql1); 
       
        echo "<table class='table table-striped'>";
      
    ?>
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

<?php
        echo "</table>";
      
    ?>