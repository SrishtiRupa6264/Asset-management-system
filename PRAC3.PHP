<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

th{
    background-color:#008080	;
    width:25%;
    font-size: 20px;
}
td{ background-color:#008080
    font-size: 30px;
}

table.center {
  margin-left: auto; 
  margin-right: auto;
}
body{
    background-color:#d8bfd8;
}
</style>
<body>
    <h1 align="center">ASSET ENTRY<br><br></h1>
    <table style="width:100% " >

    
        <tr >
            <th>SNo.</th>
            <th>Brand</th>
            <th>ProcurementDate</th>
            <th>DeliveryDate</th>
    
        </tr>
        <tr >
            <td><lable for="S.no"> </lable><input type="text" id="sno" name="sno"></td>
            <td><lable for="Brand "></lable><input type="text" id="brand" name="brand"></td>
            <td><lable for="ProcurementDate"></lable><input type="date" id="prd name="prd></td>
            <td><lable for="DeliveryDate"> </lable><input type="date" id="dd" name="dd"></td>
        
        </tr>

    </table>
    <br>
    <br>
    <table style="width:100% " >
       <tr>
            <th>ItemType</th>
            <th>SupplierDetails</th>
            <th>CallLogDetails</th>
            <th>ContactOrder</th>
       </tr>
       <tr>
            <td><lable for="ItemType"></lable><input type="text" id="it" name="it"></td>
            <td> <lable for="SupplierDetails"></lable><input type="text" id="sd" name="sd"></td>
            <td><lable for ="CallLogDetails"></lable><input type="text" id="cld "name="cld"></td>
            <td><lable for="ContactOrder"></lable><input type="text" id="cono" name="cono"></td>
        </tr>
    </table>
    <br>
    <br>
    <table style="width:100% " >
       <tr>
            <th>WarrentyPeriod</th>
            <th>AssetCode</th>
            <th>BCNo</th>
            <th>FileNo</th>
       </tr>
       <tr>
            <td><lable for="WarrentyPeriod"></lable><input type="text" id="wp" name="wp"></td>
            <td> <lable for="AssetCode"> </lable><input type="text" id="ac" name="ac"></td>
            <td><lable for="BCNo"></lable><input type="text" id="bcn" name="bcn"></td>
            <td><lable for="FileNo "></lable><input type="text" id="fn" name="fn"></td>
        </tr>
    </table>
    <br>
    <br>

    <table style="width:100% " >
       <tr>
            <th>Financialyser</th>
            <th>Amount</th>
            <th>Quantity</th>
            <th>AreaAllocation</th>
       </tr>
       <tr>
            <td><lable for="Financialyser"> </lable><input type="text" id="finl" name="finl"></td>
            <td> <lable for="Amount"></lable><input type="text" id="amount" name="amount"></td>
            <td><lable for="Quantity"></lable><input type="text" id="quan" name="quan"></td>
            <td> <lable for="AreaAllocation"> </lable><input type="text "id="aa "name="aa"></td>
        </tr>
</table>



    
</body>
</html>