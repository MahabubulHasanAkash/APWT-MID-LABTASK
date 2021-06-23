<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell Procucts</title>
</head>

<body>
	
<a href="/home" > Home </a>
    <form method="post" enctype="multipart/form-data">

        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <fieldset>
            <legend>Sell Producs</legend>
            <table>
                <tr>
                    <td>Customer Name</td>
                    <td><input type="text" name="customer-name" "></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="phone" "></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input type="text" name="address"></td>
                </tr>
                <tr>
                    <td>Product Id</td>
                    <td><input type="text" name="id"></td>
                </tr>
                <tr>
                    <td>Product Name </td>
                    <td><input type="text" name="id"></td>
                </tr>
                <tr>
                    <td>Unit Price</td>
                    <td><input type="text" name="price"></td>
                </tr> 
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Sell"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>