<?php
    require 'config.php';

    $sql1 = "SELECT * FROM `company` ";

    $records = $conn -> query($sql1);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Bilable rate summary</title>
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
        <h1>Billable rate summary</h1>
        <p></p>
        <table>
            <thead>
                <tr>
                    <td>Employee ID</td>
                    <td>Company</td>
                    <td>Start Time</td>
                    <td>End Time</td>
                    <td>Number of Hours</td>
                    <td>Unit Price</td>
                </tr>
            </thead>
            <tbody>
                <?php if ($records ->num_rows > 0){ ?>
                    <?php while ($row = $records -> fetch_assoc() ){ ?>
                        <tr>
                            <td><?php echo strip_tags($row['emp_id']); ?></td>
                            <td><?php echo strip_tags($row['company']); ?></td>
                            <td><?php echo strip_tags($row['start_time']); ?></td>
                            <td><?php echo strip_tags($row['end_time']); ?></td>
                            <td><?php echo strip_tags($row['hours_worked']); ?></td>
                            <td><?php echo strip_tags($row['unit_price']); ?></td>
                        </tr>
                    <?php } ?>

                <?php } ?>
            </tbody>
        </table>
        <p>Enter company name to generate invoice</p>
        <form method="GET" action="company.php">
            <label>Company:</label>
            <input type = "text" name = "company" id = "company" required><br>
            <button type="submit" name="submit">Submit</button>
        </form>
    </body>
</html>

<?php
    $conn ->close();
?>