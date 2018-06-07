<?php
        // include Database connection file
        include("db_connection.php");

        // Design initial table header



    // if query results contains rows then fetch those rows
    if ($result = $db->query("select count(*) as count from rig_data")) {
        $number = 1;
    while ($row = $result->fetch_assoc()) {
                $data =$row['count'];
                $number++;
        }
    }
    else
    {
        // records now found
        $data .= '<tr><td colspan="8">Records not found!</td></tr>';
    }

    if (empty($data)) {
        $data="zero";
    }

    echo $data;
?>

