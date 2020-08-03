<?php
    $conn = new mysqli('localhost', 'root', '', 'bills');
    $query = '';
    $sqlScript = file('bills.sql');

    foreach ($sqlScript as $line){
        $startWith = substr(trim($line), 0, 2);
        $endWith = substr(trim($line), -1, 1);

        if (empty($line) || $startWith == '--' || $startWith == '/*' || $startWith == '//'){
            continue;
        }

        $query = $query . $line;
        if ($endWith == ';'){
            mysqli_query($conn, $query) or die('<div class="error-response sql-import-response">Problem executing sql query <b>' .$query. '</b></div>');
            $query = '';
        }
    }

?>