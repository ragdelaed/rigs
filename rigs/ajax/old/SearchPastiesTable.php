<?php
        // include Database connection file
        include("db_connection.php");
    $data='
                    <script>
                        function DeletePastiesRow(auto_id) {
                            var conf = confirm("Are you sure, do you really want to delete this row?");
                            if (conf == true) {
                                console.log(auto_id);
                                $.post("ajax/DeletePastiesRow.php", {
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
                      <table id="pasties_datatable" class="table table-striped table-bordered" width="100%">
                        <thead>
                          <tr>
                            <th>Matches</th>
                            <th>Site</th>
                            <th>ID</th>
                            <th>md5</th>
                            <th>URL</th>
                            <th>Time Stamp</th>
                            <th>Options</th>
                          </tr>
                         </thead>
                        <tbody>';
    $data .="\n";


    // if query results contains rows then fetch those rows
    if ($result = $db->query("select auto_id,site,id,md5,url,local_path,timestamp,matches from pasties where matches <> ''")) {
        $number = 1;
    while ($row = $result->fetch_assoc()) {
                $data .= '                          <tr>
                                <td>'.$row['matches'].'</td>
                                <td>'.$row['site'].'</td>
                                <td>'.$row['id'].'</td>
                                <td>'.$row['md5'].'</td>
                                <td><a href='.$row['url'].' target=_>URL  </td>
                                <td>'.$row['timestamp'].'</td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button onclick="DeletePastiesRow('.$row['auto_id'].')" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button></td>
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
