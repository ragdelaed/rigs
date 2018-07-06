<?php
    include("db_connection.php");

    $data="";
    $rig_name=$_GET['rig'];


    // if query results contains rows then fetch those rows
    if ($result = $db->query("select FROM_UNIXTIME(timestamp/1000,'%Y-%M-%d %H:%i:%s') as Timestamp ,hash from rigs where rack_loc = '$rig_name' order by id limit 1;")) {
    while ($row = $result->fetch_assoc()) {
                $data =$row['hash'];
        }
    }
    else
    {
        // records now found
        $data .= $data;
    }

    if (empty($data)) {
        $data="zero";
    }

    echo $data;
?>

