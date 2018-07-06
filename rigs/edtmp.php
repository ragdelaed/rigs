<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>rigs </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/prettify.css" rel="stylesheet">
    <link href="css/tablecloth.css" rel="stylesheet">
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    
    <!-- Custom Theme Scripts -->
    
    <!-- Jquery JS file -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <script src="js/rigs_script.js"></script>
    <script src="js/tablecloth.js"></script>
    <script src="js/jquery.metadata.js"></script>
    <script src="js/jquery.tablesorter.min.js"></script>
    <script src="js/parser-network.min.js"></script>
    <script type="text/javascript" charset="utf-8">
    $("table").tablesorter({
            theme: "blue",
            headers: {
                    0: { sorter: "ip" }
            }
    });

            $("table").tablecloth({
              theme: "stats",
              striped: true,
              sortable: true,       
              condensed: true   
            });

          });
    </script>     
  </head>


    <body>
        <div class="x_panel">
        </div>
        <div class="x_panel">
            <table cellspacing="0" cellpadding="0">
        <tr>
          <th>version</th>
          <th>GPUs</th>
          <th>name</th>
          <th>status</th>
          <th>ip</th>
          <th>uptime</th>
          <th>CPU temp</th>
          <th>hash rate</th>
          <th>temps</th>
        </tr>

                <tr>
                  <td align='left'>1.2.5</td>
                  <td align='left'>5/5</td>
                  <td align='left'><a href='192.168.1.101' style='color: hsl(101, 87%, 21%); text-decoration: none'>ELD01</a></td>
                  <td align='left'> miner active</td>
                  <td align='left'>192.168.1.101</td>
                  <td align='left'>8.1575</td>
                  <td align='left'>44</td>
                  <td align='left'>121.68</td>
                  <td align='left'>70.00 72.00 69.00 69.00 71.00</td>
                </tr>
                <tr>
                  <td align='left'>1.2.5</td>
                  <td align='left'>5/5</td>
                  <td align='left'><a href='192.168.1.102' style='color: hsl(101, 87%, 21%); text-decoration: none'>ELD02</a></td>
                  <td align='left'> miner active</td>
                  <td align='left'>192.168.1.102</td>
                  <td align='left'>446.4017</td>
                  <td align='left'>49</td>
                  <td align='left'>130.66</td>
                  <td align='left'>67.00 65.00 81.00 68.00 66.00 70.00</td>
                </tr>
                <tr>
                  <td align='left'>1.2.5</td>
                  <td align='left'>5/5</td>
                  <td align='left'><a href='192.168.1.103' style='color: hsl(101, 87%, 21%); text-decoration: none'>ELD03</a></td>
                  <td align='left'> miner active</td>
                  <td align='left'>192.168.1.103</td>
                  <td align='left'>73.7114</td>
                  <td align='left'>44</td>
                  <td align='left'>108.91</td>
                  <td align='left'>60.00 68.00 70.00 65.00 65.00</td>
                </tr>
                <tr>
                  <td align='left'>1.2.5</td>
                  <td align='left'>5/5</td>
                  <td align='left'><a href='192.168.1.104' style='color: hsl(101, 87%, 21%); text-decoration: none'>ELD04</a></td>
                  <td align='left'> miner active</td>
                  <td align='left'>192.168.1.104</td>
                  <td align='left'>35.1133</td>
                  <td align='left'>58</td>
                  <td align='left'>108.92</td>
                  <td align='left'>70.00 71.00 65.00 70.00 69.00</td>
                </tr>
                <tr>
                  <td align='left'>1.2.9</td>
                  <td align='left'>5/5</td>
                  <td align='left'><a href='192.168.1.105' style='color: hsl(101, 87%, 21%); text-decoration: none'>ELD05</a></td>
                  <td align='left'> possible gpu/riser/power failure</td>
                  <td align='left'>192.168.1.105</td>
                  <td align='left'>0.1581</td>
                  <td align='left'>63</td>
                  <td align='left'>0.00</td>
                  <td align='left'>41.00 43.00 40.00 39.00 45.00 40.00</td>
                </tr>
                <tr>
                  <td align='left'>1.2.9</td>
                  <td align='left'>5/5</td>
                  <td align='left'><a href='192.168.1.110' style='color: hsl(101, 87%, 21%); text-decoration: none'>TMD01</a></td>
                  <td align='left'> miner active</td>
                  <td align='left'>192.168.1.110</td>
                  <td align='left'>446.6100</td>
                  <td align='left'>41</td>
                  <td align='left'>146.03</td>
                  <td align='left'>68.00 69.00 69.00 67.00 66.00 60.00</td>
                </tr>
                <tr>
                  <td align='left'>1.2.9</td>
                  <td align='left'>5/5</td>
                  <td align='left'><a href='192.168.1.108' style='color: hsl(101, 87%, 21%); text-decoration: none'>TMD02</a></td>
                  <td align='left'> miner active</td>
                  <td align='left'>192.168.1.108</td>
                  <td align='left'>446.4697</td>
                  <td align='left'>75</td>
                  <td align='left'>130.97</td>
                  <td align='left'>63.00 63.00 63.00 56.00 64.00 69.00</td>
                </tr>
                <tr>
                  <td align='left'>1.2.9</td>
                  <td align='left'>5/5</td>
                  <td align='left'><a href='192.168.1.107' style='color: hsl(101, 87%, 21%); text-decoration: none'>TMD03</a></td>
                  <td align='left'> miner active</td>
                  <td align='left'>192.168.1.107</td>
                  <td align='left'>422.8825</td>
                  <td align='left'>75</td>
                  <td align='left'>130.41</td>
                  <td align='left'>76.00 70.00 68.00 65.00 70.00 71.00</td>
                </tr>
                <tr>
                  <td align='left'>1.2.9</td>
                  <td align='left'>5/5</td>
                  <td align='left'><a href='192.168.1.109' style='color: hsl(101, 87%, 21%); text-decoration: none'>JLD01</a></td>
                  <td align='left'> miner active</td>
                  <td align='left'>192.168.1.109</td>
                  <td align='left'>73.6400</td>
                  <td align='left'>41</td>
                  <td align='left'>143.42</td>
                  <td align='left'>66.00 74.00 68.00 65.00 69.00 58.00</td>
                </tr>
                <tr>
                  <td align='left'>1.2.9</td>
                  <td align='left'>5/5</td>
                  <td align='left'><a href='192.168.1.106' style='color: hsl(101, 87%, 21%); text-decoration: none'>JLD02</a></td>
                  <td align='left'> miner active</td>
                  <td align='left'>192.168.1.106</td>
                  <td align='left'>73.6356</td>
                  <td align='left'>53</td>
                  <td align='left'>130.88</td>
                  <td align='left'>64.00 60.00 65.00 74.00 65.00 63.00</td>
                </tr>
                <tr>
                  <td align='left'>1.2.9</td>
                  <td align='left'>5/5</td>
                  <td align='left'><a href='192.168.0.10' style='color: hsl(101, 87%, 21%); text-decoration: none'>R1_10</a></td>
                  <td align='left'> miner active</td>
                  <td align='left'>192.168.0.10</td>
                  <td align='left'>11.3247</td>
                  <td align='left'>49</td>
                  <td align='left'>146.43</td>
                  <td align='left'>71.00 66.00 72.00 68.00 69.00 63.00</td>
                </tr>
                <tr>
                  <td align='left'>1.2.9</td>
                  <td align='left'>5/5</td>
                  <td align='left'><a href='192.168.0.11' style='color: hsl(101, 87%, 21%); text-decoration: none'>R1_11</a></td>
                  <td align='left'> miner active</td>
                  <td align='left'>192.168.0.11</td>
                  <td align='left'>76.4808</td>
                  <td align='left'>46</td>
                  <td align='left'>146.37</td>
                  <td align='left'>72.00 71.00 72.00 70.00 71.00 67.00</td>
                </tr>
                <tr>
                  <td align='left'>1.2.5</td>
                  <td align='left'>5/5</td>
                  <td align='left'><a href='192.168.0.12' style='color: hsl(101, 87%, 21%); text-decoration: none'>R1_12</a></td>
                  <td align='left'> miner active</td>
                  <td align='left'>192.168.0.12</td>
                  <td align='left'>448.1333</td>
                  <td align='left'>54</td>
                  <td align='left'>139.74</td>
                  <td align='left'>69.00 65.00 72.00 66.00 73.00 61.00</td>
                </tr>
                <tr>
                  <td align='left'>1.2.5</td>
                  <td align='left'>5/5</td>
                  <td align='left'><a href='192.168.0.13' style='color: hsl(101, 87%, 21%); text-decoration: none'>R1_13</a></td>
                  <td align='left'> miner active</td>
                  <td align='left'>192.168.0.13</td>
                  <td align='left'>7.8233</td>
                  <td align='left'>44</td>
                  <td align='left'>135.55</td>
                  <td align='left'>64.00 60.00 63.00 65.00 61.00 61.00</td>
                </tr>
                <tr>
                  <td align='left'>1.2.5</td>
                  <td align='left'>5/5</td>
                  <td align='left'><a href='192.168.0.14' style='color: hsl(101, 87%, 21%); text-decoration: none'>R1_14</a></td>
                  <td align='left'> miner active</td>
                  <td align='left'>192.168.0.14</td>
                  <td align='left'>448.1011</td>
                  <td align='left'>45</td>
                  <td align='left'>134.99</td>
                  <td align='left'>67.00 66.00 66.00 69.00 70.00 62.00</td>
                </tr>
                <tr>
                  <td align='left'>1.2.5</td>
                  <td align='left'>5/5</td>
                  <td align='left'><a href='192.168.0.15' style='color: hsl(101, 87%, 21%); text-decoration: none'>R1_15</a></td>
                  <td align='left'> miner active</td>
                  <td align='left'>192.168.0.15</td>
                  <td align='left'>108.3067</td>
                  <td align='left'>49</td>
                  <td align='left'>135.53</td>
                  <td align='left'>65.00 61.00 67.00 65.00 66.00 57.00</td>
                </tr>
                <tr>
                  <td align='left'>1.2.5</td>
                  <td align='left'>5/5</td>
                  <td align='left'><a href='192.168.0.16' style='color: hsl(101, 87%, 21%); text-decoration: none'>R1_16</a></td>
                  <td align='left'> miner active</td>
                  <td align='left'>192.168.0.16</td>
                  <td align='left'>20.1306</td>
                  <td align='left'>44</td>
                  <td align='left'>138.51</td>
                  <td align='left'>64.00 56.00 61.00 62.00 57.00 59.00</td>
                </tr>
                <tr>
                  <td align='left'>1.2.5</td>
                  <td align='left'>5/5</td>
                  <td align='left'><a href='192.168.0.17' style='color: hsl(101, 87%, 21%); text-decoration: none'>R1_17</a></td>
                  <td align='left'> miner active</td>
                  <td align='left'>192.168.0.17</td>
                  <td align='left'>260.1547</td>
                  <td align='left'>45</td>
                  <td align='left'>143.06</td>
                  <td align='left'>62.00 56.00 61.00 58.00 58.00 64.00</td>
                </tr>
                <tr>
                  <td align='left'>1.2.5</td>
                  <td align='left'>5/5</td>
                  <td align='left'><a href='192.168.0.18' style='color: hsl(101, 87%, 21%); text-decoration: none'>R1_18</a></td>
                  <td align='left'> one or more gpus overheated</td>
                  <td align='left'>192.168.0.18</td>
                  <td align='left'>0.1544</td>
                  <td align='left'>42</td>
                  <td align='left'>104.96</td>
                  <td align='left'>64.00 57.00 42.00 51.00 41.00 39.00</td>
                </tr>
                <tr>
                  <td align='left'>1.2.5</td>
                  <td align='left'>5/5</td>
                  <td align='left'><a href='192.168.0.19' style='color: hsl(101, 87%, 21%); text-decoration: none'>R1_19</a></td>
                  <td align='left'> miner commanded to start</td>
                  <td align='left'>192.168.0.19</td>
                  <td align='left'>0.0522</td>
                  <td align='left'>42</td>
                  <td align='left'>0.00</td>
                  <td align='left'>42.00 42.00</td>
                </tr>
            </table>
        </div>
    </body>
</html>

