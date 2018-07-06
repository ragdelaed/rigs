<?php

/* if started from commandline, wrap parameters to $_POST and $_GET */
if (!isset($_SERVER["HTTP_HOST"])) {
  parse_str($argv[1], $_GET);
  parse_str($argv[1], $_POST);
}


// check request
if(isset($_POST['URL']) && isset($_POST['URL']) != "")
{
    // include Database connection file
    include("db_connection.php");
    $URL = $_POST['URL'];
    echo "url is ".$URL;
 

    if ($result = $db->query("insert into rss_feed_urls (rss_feed_url) values ('$URL')")) {
        echo "success ".$URL;
        exit(mysqli_error($db));
    }
}
?>
