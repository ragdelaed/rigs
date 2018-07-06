<?php
        // include Database connection file
        include("db_connection.php");
    $data='
                    <script>
                        function DeleteTwitterRow(auto_id) {
                            var conf = confirm("Are you sure, do you really want to delete this row?");
                            if (conf == true) {
                                console.log(auto_id);
                                $.post("ajax/DeleteTwitterRow.php", {
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
                      <table id="tweets_datatable" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>Username</th>
                            <th>Tweet</th>
                            <th>Time Stamp</th>
                            <th>Options</th>
                          </tr>
                         </thead>
                        <tbody>';
    $data .="\n";


    // if query results contains rows then fetch those rows
    if ($result = $db->query("select auto_id,username,url,tweet,timestamp from twitter order by timestamp ")) {
        $number = 1;
    while ($row = $result->fetch_assoc()) {
                $data .= '                          <tr>
                                <td>'.$row['username'].'</td>
                                <td><a href='.$row['url'].' target=_>'.$row['tweet'].'</a></td>
                                <td>'.$row['timestamp'].'</td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button onclick="DeleteTwitterRow('.$row['auto_id'].')" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button></td>
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
