<?php
$host="localhost";
$user="root";
$password="";
$db_name="project";

$con = mysqli_connect($host, $user, $password, $db_name);  
   if(mysqli_connect_errno()) {  
       die("Failed to connect with MySQL: ". mysqli_connect_error());  
   } 
   $sql = "select * from asset ";  
   $result = mysqli_query($con, $sql);  
   
   

?>



<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<style type="text/css">
    body{
        background-color:#f0e68c;
    }
    h1{
        color:black;
    }
    th{
        color:black;
    }
    
  
</style>

   



<h1 align="center" ><u>Issue Entry</u></h1>
<br>

<form style="margin:20px" method="POST" action="auth_4.php">
    
 
    <table class="table table-bordered">
      <thead style="background-color:#008080" class= "thead-dark">  
    <tr>

            <th>SelectItem</th>
            <th>SerialNo</th>
            <th>IssuedDept</th>
            <th>IssuerName</th>
            <th>AdditionalFlag</th>
            <th>IssueDate</th>
            <th>AssetTransaction</th>
            <th></th>
            
        </tr>
</thead>

        <tbody id="tbody">
            
        </tbody>
    </table>
 
    <button type="button" onclick="addItem();">Add Item</button>
    <input type="submit" name="submit" value="submit">
</form>


<script>
 

    var items = 0;
    function addItem() {
        items++;
        
 
        var html = "<tr>";   
            html += "<td><select  name='itemName[]' id=\"roll;\"><?php  
          while($row = mysqli_fetch_assoc($result))
          {
         
           echo "<option value = ".$row['Brand'].">"  .$row['Brand']."</option>";
          } ?></select></td>";
            html += "<td><input type='text' name='itemQuantity[]'></td>";
            html += "<td><input type='text' name='itemQuantity1[]'></td>";
            html += "<td><input type='text' name='itemQuantity2[]'></td>";
            html += "<td><input type='text' name='itemQuantity3[]'></td>";
            html += "<td><input type='date' name='itemQuantity4[]'></td>";
            html += "<td><input type='text' name='itemQuantity5[]'></td>";
            html += "<td><button type='button' onclick='deleteRow(this);'>Delete</button></td>"
        html += "</tr>";
 
        var row = document.getElementById("tbody").insertRow();
        row.innerHTML = html;
    }
 
function deleteRow(button) {
    items--
    button.parentElement.parentElement.remove();
    // first parentElement will be td and second will be tr.
}
</script>

