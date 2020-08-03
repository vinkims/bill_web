<?php
    require_once 'config.php';

    if (isset($_GET['company'])){
        $company = $_GET['company'];

        $sql = "SELECT * FROM `company` WHERE `company` = '$company' ";

        $records = $conn -> query($sql);

        //sum query
        $sum = "SELECT SUM(cost) FROM `company` WHERE `company` = '$company' ";
        $sumcost = $conn -> query($sum);

    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Company Invoice</title>
    </head>
    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td{
            padding: 15px
        }
    </style>
    <body>
        <h2>Invoice</h2>
        Company: <?php echo $company; ?><br>
        <p></p><p></p>
        <table>
            <thead>
                <tr>
                    <td>Employee ID</td>
                    <td>Number of Hours</td>
                    <td>Unit Price</td>
                    <td>Cost</td>
                </tr>
            </thead>
            <tbody>
                <?php if ($records -> num_rows > 0){ ?>
                    <?php while($row = $records -> fetch_assoc()){ ?>
                        <tr>
                            <td><?php echo strip_tags($row['emp_id']); ?></td>
                            <td><?php echo strip_tags($row['hours_worked']); ?></td>
                            <td><?php echo strip_tags($row['unit_price']); ?></td>
                            <td><?php echo strip_tags($row['cost']); ?> </td>
                        </tr>
                    <?php } ?>
                <?php } ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Total</td>
                    <td>
                        <?php
                            foreach($sumcost as $row)
                            echo $row['SUM(cost)'];
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>