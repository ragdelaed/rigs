<?php
        // include Database connection file
        include("db_connection.php");

        // Design initial table header



    // if query results contains rows then fetch those rows
    if ($result = $db->query("select count(distinct rack_loc) as count from rigs where status rlike 'active' and  timestamp >= unix_timestamp(CURRENT_TIMESTAMP - INTERVAL 30 MINUTE) * 1000 order by rack_loc; ")) {
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

