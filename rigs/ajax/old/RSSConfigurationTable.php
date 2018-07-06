<?php
        // include Database connection file
        include("db_connection.php");

    $data.='
                      <table id="rss_configuration_datatable" class="table table-striped table-bordered" width="100%">
                        <thead>
                          <tr>
                            <th>Count</th>
                            <th>URL</th>
                            <th>Options</th>
                          </tr>
                         </thead>
                        <tbody>';
    $data .="\n";


    // if query results contains rows then fetch those rows
    // if ($result = $db->query("select rfu.id as ID,rss_feed_url as URL,count(source) as Count from rss_feed rf,rss_feed_urls rfu where rfu.rss_feed_url=rf.source group by ID")) {
    if ($result = $db->query("select id,rss_feed_url as URL,(select count(source) from rss_feed where source=URL ) as Count from rss_feed_urls")) {
        $number = 1;
    while ($row = $result->fetch_assoc()) {
                $data .= '                          <tr>
                                <td>'.$row['Count'].'  </td>
                                <td><a href='.$row['URL'].' target=_>'.$row['URL'].'  </td>
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
