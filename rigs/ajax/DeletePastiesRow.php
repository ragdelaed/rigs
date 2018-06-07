<?php

// check request
if(isset($_POST['auto_id']) && isset($_POST['auto_id']) != "")
{
    // include Database connection file
    include("db_connection.php");
    $auto_id = $_POST['auto_id'];
 

    if ($result = $db->query("DELETE FROM pasties WHERE auto_id = '$auto_id'")) {
        echo "deletion of id success".$auto-id;
        exit(mysqli_error($db));
    }
}
?>
