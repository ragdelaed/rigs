<?php

/* if started from commandline, wrap parameters to $_POST and $_GET */
if (!isset($_SERVER["HTTP_HOST"])) {
  parse_str($argv[1], $_GET);
  parse_str($argv[1], $_POST);
}


// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    // include Database connection file
    include("db_connection.php");
    $id = $_POST['id'];
 

    if ($result = $db->query("DELETE FROM rss_feed_urls WHERE id = '$id'")) {
        echo "deletion of id success ".$id;
        exit(mysqli_error($db));
    }
}
?>
