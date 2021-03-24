
<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>

    <center>

        <form method="post" action="checkproducts.php"> 
        <fieldset>
            <legend>ADD PRODUCT</legend>

        <table>
            <tr>
                <td><label>Name</label></td>
                <td><input type="text" name="name"></td>
            </tr>
            <br>

            <tr>
                <td><label>Buying Price</label></td>
                <td><input type="text" name="bprice" required=""></td>
            </tr>
            <br>

            <tr>
                <td><label>Selling Price</label></td>
                <td><input type="text" name="sprice" required=""></td>
            </tr>
            <br>

            
            <tr>
            <td></td>
                    <td>
                        <input type="submit" name="Save" value="Save" required="">
                        
                    </td>
            </tr>


            
        </table>
    </fieldset>
</form>

           
 
</body>
</html>