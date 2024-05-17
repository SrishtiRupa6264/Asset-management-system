<style type="text/css">
    table {
        width: 100%;
        border-collapse: collapse;
    }
    table tr td,
    table tr th {
        border: 1px solid black;
        padding: 25px;
    }
</style>

<form method="POST" action="">
    
 
    <table>
        <tr>

            <th>roll no</th>
            <th>name</th>
        </tr>
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
            html += "<td><input type='text' name='itemName[]'></td>";
            html += "<td><input type='text' name='itemQuantity[]'></td>";
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

<?php
 
    $conn = mysqli_connect("localhost", "root", "", "project");
 
  
        // $customerName = $_POST["customerName"];
 
        // $sql = "INSERT INTO invoices (customerName) VALUES ('$customerName')";
        // mysqli_query($conn, $sql);
        // $invoiceId = mysqli_insert_id($conn);
 
        for ($a = 0; $a < count($_POST["itemName"]); $a++)
        {
            $sql = " INSERT INTO student (roll, name12 ) VALUES ('"  .$_POST["itemName"][$a]. " ' ,' ". $_POST["itemQuantity"][$a]. " ' )";
            mysqli_query($conn, $sql);
        }
 
     
 
?>