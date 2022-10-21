<?php

include_once("config.php");

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM customers WHERE ID = $id");
if(!$result) {
    header("Location:index.php");
}

while($customer_data = mysqli_fetch_array($result)) {
    $name = $customer_data['NAME'];
    $email = $customer_data['EMAIL'];
    $phone = $customer_data['PHONE'];
}
?>

<html>
    <head>
        <title> Edit Customer </title>
    </head>

    <body>
        <a href="index.php"> Home </a>
        <br/><br/>

        <form name="update_user" method="post" action="edit_proccess.php">
            <table border="0">
                <tr>
                    <td> Name </td>
                    <td><input type="text" name="name" value=<?= $name ?>></td>
                </tr>
                <tr>
                    <td> Email </td>
                    <td><input type="text" name="email" value=<?php echo $email; ?>></td>
                </tr>
                <tr>
                    <td> Phone </td>
                    <td><input type="text" name="phone" value=<?php echo $phone; ?>></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
    </body>
</html>