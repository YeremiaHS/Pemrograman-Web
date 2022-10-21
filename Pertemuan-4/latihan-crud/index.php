<?php

include_once("config.php");

$query = "SELECT * FROM customers ORDER BY ID DESC";
$result = mysqli_query($conn, $query);

?>

<html>
    <head>
        <title> HOMEPAGE </title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>

    <body>
        <a href="add.php" class="btn btn-primary"> Add new customer </a> <br/><br/>
        <table width='80%' border=1 class="table table-striped">
            <thead>
                <tr>
                    <th> Name </th>
                    <th> Phone </th>
                    <th> Email </th>
                    <th> Join Date </th>
                    <th> Last Update </th>
                    <th> Action </th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($result ->num_rows > 0):
                ?>
                <?php while ($customer_data = mysqli_fetch_array($result)): ?>
                    <tr>
                        <td> <?php echo $customer_data['NAME']?></td>
                        <td> <?php echo $customer_data['PHONE']?></td>
                        <td> <?php echo $customer_data['EMAIL']?></td>
                        <td> <?= $customer_data['CREATED']?></td>
                        <td> <?= $customer_data['UPDATED']?></td>
                        <td>
                        <a href='edit.php?id=<?=$customer_data["ID"]?>'> Edit </a>  | <a href='delete.php?id=<?=$customer_data["ID"]?>'> Delete </a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="6" rowspan="1" headers="" align="center"> Data customer tidak ditemukan!</td>
                        </tr>
                    <?php endif; ?>    

                    <?php mysqli_free_result($result); ?>
            </tbody>
        </table>

        <?php
        if (isset($_GET["message"])) {
            $message = $_GET["message"];
            echo "<script type='text/javascript'>alert('$message');";
            echo "window.location='index.php'</script>";
        }
        ?>
    </body>
</html>