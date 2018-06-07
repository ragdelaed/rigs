<?php
        // include Database connection file
        include("db_connection.php");
    $data='
                    <script>
                        function DeleteRSSRow(auto_id) {
                            var conf = confirm("Are you sure, do you really want to delete this row?");
                            if (conf == true) {
                                console.log(auto_id);
                                $.post("ajax/DeleteRSSRow.php", {
                                    auto_id: auto_id
                                },
                                function (data, status) {
                                    console.log(status);
                                }
                                );
                            location.reload();
                            }
                        }
                    </script>';

    $data.='
                      <table id="rss_datatable" class="table table-striped table-bordered" width="100%">
                        <thead>
                          <tr>
                            <th>Title</th>
                            <th>URL</th>
                            <th>Description</th>
                            <th>Updated Timestamp</th>
                            <th>Time Stamp</th>
                            <th>Options</th>
                          </tr>
                         </thead>
                        <tbody>';
    $data .="\n";


    // if query results contains rows then fetch those rows
    if ($result = $db->query("select id,title,link,description,from_unixtime(updated) as updated,source,from_unixtime(timestamp) as timestamp,disk_name from rss_feed order by id desc")) {
        $number = 1;
    while ($row = $result->fetch_assoc()) {
                $data .= '                          <tr>
                                <td>'.$row['title'].'</td>
                                <td><a href='.$row['link'].' target=_>URL  </td>
                                <td>'.$row['description'].'</td>
                                <td>'.$row['updated'].'</td>
                                <td>'.$row['timestamp'].'</td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button onclick="DeleteRSSRow('.$row['id'].')" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button></td>
                          </tr>';
                $data .="\n";
                $number++;
        }
    }
    else
    {
        // records now found
        $data .= '<tr><td colspan="8">Records not found!</td></tr>';
    }

    $data .= '                      </tbody>
                    </table>';
    echo $data;
?>
