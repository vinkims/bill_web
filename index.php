<?php
    require 'config.php';

    
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
        input{
            border: 0px solid;
            background-color: transparent;
        }
    </style>
    <body>
        <p></p>
        <form method="POST" action="index.php">
            <label>Company:</label>
            <input type = "text" name = "company"  placeholder="<input company here>" required><br>
        </form>
        <p></p>
        <table>
            <thead>
                <tr>
                    <td>Employee ID</td>
                    <td>Number of Hours</td>
                    <td>Unit Price</td>
                    <td>Cost</td>
                </tr>
            </thead>
        </table>
    </body>
</html>