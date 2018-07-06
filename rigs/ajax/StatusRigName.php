<?php
        // include Database connection file
        include("db_connection.php");

$data="";
        // Design initial table header
    $rig_name=$_GET['rig'];


    // if query results contains rows then fetch those rows
    if ($result = $db->query("select rack_loc from rigs where rack_loc=$rig_name")) {
        $number = 1;
    while ($row = $result->fetch_assoc()) {
                $data =$row['rack_loc'];
                $number++;
        }
    }
    else
    {
        // records now found
        $data .= $rig_name;
    }

    if (empty($data)) {
        $data="zero";
    }

    echo $data;
?>

