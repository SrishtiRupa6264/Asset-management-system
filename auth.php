
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style>
   
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

h1{
    color:black
}
th{
    background-color:#008080	;
   
}
td{ background-color:white
    
}

 body{
    background-color:#f0e68c;
} 
</style>
<body><form  action="auth_1.php"  method="POST" >
    <h1 align="center" ><br><u>ASSET ENTRY</u><br><br></h1>
    <table style=" border:2px solid black; width:90%; margin:auto;" class="table table-bordered" >

    
        <tr >
            <th><label for="sno">S No.</label></th>
            <th><label for="brand">BRAND</label></th>
            <th><label for="prd">ProcurementDate</label></th>
            <th><label for="dd">DeliveryDate</label></th>
    
        </tr>
        <tr >
            <td><input type="text" id="sno" name="sno1"></td>
            <td><input type="text" id="brand" name="brand"></td>
            <td><input type="date" id="prd" name="prd"></td>
            <td><input type="date" id="dd" name="dd"></td>
        
        </tr>
        <tr>
            <th><label for="ItemType">ItemType</label></th>
            <th><label for="ItemType">SupplierDetails</label></th>
            <th><label for="ItemType">CallLogDetails</label></th>
            <th><label for="ItemType">ContactOrder</label></th>
       </tr>
       <tr>
            <td><label for="ItemType"></label><input type="text" id="it" name="it"></td>
            <td> <label for="SupplierDetails"></label><input type="text" id="sd" name="sd"></td>
            <td><label for ="CallLogDetails"></label><input type="text" id="cld "name="cld"></td>
            <td><label for="ContactOrder"></label><input type="text" id="cono" name="cono"></td>
        </tr>
        <tr>
            <th>WarrentyPeriod</th>
            <th>AssetCode</th>
            <th>BCNo</th>
            <th>FileNo</th>
       </tr>
       <tr>
            <td><label for="WarrentyPeriod"></label><input type="text" id="wp" name="wp"></td>
            <td> <label for="AssetCode"> </label><input type="text" id="ac" name="ac"></td>
            <td><label for="BCNo"></label><input type="text" id="bcn" name="bcn"></td>
            <td><label for="FileNo "></label><input type="text" id="fn" name="fn"></td>
        </tr>
        <tr>
            <th>Financialyser</th>
            <th>Amount</th>
            <th>Quantity</th>
            <th>AreaAllocation</th>
       </tr>
       <tr>
            <td><label for="Financialyser"> </label><input type="text" id="finl" name="finl"></td>
            <td> <label for="Amount"></label><input type="text" id="amount" name="amount"></td>
            <td><label for="Quantity"></label><input type="text" id="quan" name="quan"></td>
            <td> <label for="AreaAllocation"> </label><input type="text "id="aa "name="aa"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><button type ="submit">SUBMIT</button></td>
            <td></td>
            
      
        </tr>
</table>

</form>



    
</body>
</html>