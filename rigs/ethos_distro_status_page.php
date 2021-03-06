<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="generator" content="HTML Tidy for HTML5 for Linux version 5.2.0">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>dlirzc ethOS</title>
  <link href="/assets/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/tablecloth.css" rel="stylesheet">
  <link href="css/prettify.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="/favicon.png">
  <style>
  td{ white-space: nowrap; word-spacing: -0.5px; letter-spacing: -0.2px}
  .hasTooltip span {
    display: none;
    color: #000;
    text-decoration: none;
    padding-left: 5px;
    padding-right: 5px;
  }
  .hasTooltip:hover span {
    display: block;
    position: absolute;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 10px;
        margin-top:10px;
  }

  .blink {
  animation: blinker 1s linear infinite;
  }

  @keyframes blinker {
  50% {
    opacity: 0;
  }
  }

  body {
    background-image: url("/background.png");
  }
  </style><?php include "script_includes.html"; ?>
  <script src="/assets/js/jquery-3.1.1.min.js">
  </script>
  <script src="/assets/bootstrap-3.3.7-dist/js/bootstrap.min.js">
  </script>
  <script src="/assets/js/jquery.metadata.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.4/js/jquery.tablesorter.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.4/js/parsers/parser-network.min.js">
  </script>
  <script src="/assets/js/jquery.tablecloth.js">
  </script>
  <script type="text/javascript" charset="utf-8">
      $(document).ready(function() {

  $("table").tablesorter({
        theme: "blue",
        headers: {
                0: { sorter: "ipAddress" }
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
  <style type="text/css">
  div.c107 {width: 99%}
  table.c106 {background:#CCC; width:100%; margin-bottom: 0px;}
  div.c105 {float:left}
  table.c104 {width: 300px; margin-bottom:0px;}
  div.c103 {display:inline; color: hsl(92, 100%, 30%);}
  span.c102 {color: hsl(-31, 100%, 30%);}
  span.c101 {color: hsl(227, 100%, 30%);}
  div.c100 {display:inline; color: hsl(128, 100%, 30%);}
  div.c99 {color: hsl(164, 100%, 30%);; display:inline}
  div.c98 {color: hsl(196, 100%, 25%);; display:inline}
  span.c97 {color: hsl(76, 100%, 30%);}
  span.c96 {color: hsl(211, 100%, 30%);}
  div.c95 {color: hsl(242, 100%, 30%);; display:inline}
  div.c94 {color: hsl(244, 100%, 30%);; display:inline}
  div.c93 {color: hsl(246, 100%, 30%);; display:inline}
  div.c92 {color: hsl(243, 100%, 30%);; display:inline}
  div.c91 {display:inline; color: hsl(107, 100%, 30%);}
  span.c90 {color: hsl(102, 100%, 30%);}
  span.c89 {color: hsl(159, 100%, 30%);}
  div.c88 {text-decoration: underline; display:inline; color: hsl(144, 95%, 22%)}
  div.c87 {color: hsl(255, 100%, 30%);; display:inline}
  div.c86 {color: hsl(57, 100%, 30%);; display:inline}
  span.c85 {color: hsl(31, 100%, 30%);}
  span.c84 {color: hsl(134, 100%, 30%);}
  div.c83 {color: hsl(251, 100%, 30%);; display:inline}
  div.c82 {color: hsl(256, 100%, 30%);; display:inline}
  div.c81 {color: hsl(268, 100%, 30%);; display:inline}
  div.c80 {color: hsl(270, 100%, 30%);; display:inline}
  div.c79 {color: hsl(240, 100%, 30%);; display:inline}
  div.c78 {display:inline; color: hsl(102, 100%, 30%);}
  div.c77 {color: hsl(147, 100%, 30%);; display:inline}
  div.c76 {color: hsl(68, 100%, 30%);; display:inline}
  div.c75 {color: hsl(185, 100%, 25%);; display:inline}
  span.c74 {color: hsl(107, 100%, 30%);}
  span.c73 {color: hsl(155, 100%, 30%);}
  span.c72 {color: hsl(242, 100%, 30%);}
  div.c71 {text-decoration: underline; display:inline; color: hsl(42, 91%, 23%)}
  div.c70 {color: hsl(249, 100%, 30%);; display:inline}
  div.c69 {display:inline; color: hsl(163, 100%, 30%);}
  div.c68 {display:inline; color: hsl(184, 100%, 30%);}
  div.c67 {display:inline; color: hsl(117, 100%, 30%);}
  div.c66 {display:inline; color: hsl(26, 100%, 30%);}
  div.c65 {color: hsl(85, 100%, 30%);; display:inline}
  div.c64 {color: hsl(62, 100%, 30%);; display:inline}
  div.c63 {color: hsl(125, 100%, 30%);; display:inline}
  div.c62 {color: hsl(108, 100%, 30%);; display:inline}
  div.c61 {color: hsl(34, 100%, 30%);; display:inline}
  span.c60 {color: hsl(15, 100%, 30%);}
  span.c59 {color: hsl(216, 100%, 30%);}
  div.c58 {display:inline; color: hsl(138, 100%, 30%);}
  div.c57 {display:inline; color: hsl(173, 100%, 30%);}
  div.c56 {color: hsl(224, 100%, 25%);; display:inline}
  span.c55 {color: hsl(61, 100%, 30%);}
  div.c54 {display:inline; color: hsl(148, 100%, 30%);}
  div.c53 {color: hsl(96, 100%, 30%);; display:inline}
  div.c52 {color: hsl(119, 100%, 30%);; display:inline}
  div.c51 {color: hsl(28, 100%, 30%);; display:inline}
  div.c50 {color: hsl(223, 100%, 25%);; display:inline}
  span.c49 {color: hsl(138, 100%, 30%);}
  span.c48 {color: hsl(156, 100%, 30%);}
  div.c47 {color: hsl(312, 100%, 30%);; display:inline}
  div.c46 {color: hsl(220, 100%, 30%);; display:inline}
  div.c45 {display:inline; color: hsl(143, 100%, 30%);}
  div.c44 {display:inline; color: hsl(153, 100%, 30%);}
  div.c43 {display:inline; color: hsl(133, 100%, 30%);}
  div.c42 {color: hsl(74, 100%, 30%);; display:inline}
  div.c41 {color: hsl(102, 100%, 30%);; display:inline}
  div.c40 {color: hsl(113, 100%, 30%);; display:inline}
  span.c39 {color: hsl(217, 100%, 30%);}
  span.c38 {color: hsl(112, 100%, 30%);}
  span.c37 {color: hsl(221, 100%, 30%);}
  span.c36 {color: hsl(246, 100%, 30%);}
  span.c35 {color: hsl(240, 100%, 30%);}
  a.c34 {color: hsl(34, 89%, 22%); text-decoration: none}
  div.c33 {color: hsl(319, 100%, 30%);; display:inline}
  div.c32 {color: hsl(239, 100%, 30%);; display:inline}
  div.c31 {color: hsl(193, 100%, 30%);; display:inline}
  div.c30 {color: hsl(306, 100%, 30%);; display:inline}
  div.c29 {display:inline; color: hsl(112, 100%, 30%);}
  div.c28 {display:inline; color: hsl(122, 100%, 30%);}
  div.c27 {display:inline; color: hsl(158, 100%, 30%);}
  div.c26 {display:inline; color: hsl(20, 100%, 30%);}
  div.c25 {color: hsl(91, 100%, 30%);; display:inline}
  div.c24 {color: hsl(79, 100%, 30%);; display:inline}
  a.c23 {text-align: left}
  div.c22 {color: hsl(222, 100%, 25%);; display:inline}
  div.c21 {color: hsl(225, 100%, 25%);; display:inline}
  span.c20 {color: hsl(255, 100%, 30%);}
  span.c19 {color: hsl(127, 100%, 30%);}
  span.c18 {color: hsl(237, 100%, 30%);}
  span.c17 {color: hsl(249, 100%, 30%);}
  span.c16 {color: hsl(241, 100%, 30%);}
  div.c15 {display: inline; color: #090}
  div.c14 {display: inline; color: #00a}
  div.c13 {text-decoration: underline; display:inline; color: hsl(149, 93%, 23%)}
  div.c12 {display:inline;font-family: monospace; color: #000}
  div.c11 {display:inline; color: #000}
  div.c10 {display:inline; font-family: monospace;}
  a.c9 {color: hsl(101, 87%, 21%); text-decoration: none}
  a.c8 {color:black}
  div.c7 { display:inline; color: hsl(100, 100%, 25%);}
  div.c6 {display: inline; color: hsl(162, 93%, 21%)}
  span.c5 {color: #009}
  span.c4 {color: #c00;}
  th.c3 {font-weight: normal}
  td.c2 {font-weight: bold}
  div.c1 {color: hsl(97.01, 100%, 30%);; display:inline}
  </style>
</head>
<body>
  <div class="container row span12 c107">
    <table cellspacing="1" cellpadding="3" class="tablehead c106">
      <caption>
        <div class="c105">
          <table class="c104">
            <tr>
              <td>
                <a href="/?night=yes" title="save">night mode</a>
              </td>
              <td>
                <a href="http://ethosdistro.com/graphs/global.php?panel=6af48c&amp;type=all_gpus">57/57 gpus</a> 100.0%
              </td>
              <td>
                <a href="http://ethosdistro.com/graphs/global.php?panel=6af48c&amp;type=avg_temp">
                <div class="c1">
                  67.88
                </div>avg temp (C)</a>
              </td>
              <td>May 30 2018 11:21:42 UTC</td>
              <td>
                <a href="http://mining.gpushack.com/">gpuShack</a> · <a href="http://ethosdistro.com/kb/">Support</a> · <a href="http://ethosdistro.com/">ethOS</a>
              </td>
            </tr>
            <tr>
              <td>
                <a href="/" title="save">day mode</a>
              </td>
              <td>10/10 rigs</td>
              <td>
                <a class="hasTooltip" href="http://ethosdistro.com/graphs/global.php?panel=6af48c&amp;type=all_hash">1280.6 total hash<span><br></span>
                <table>
                  <tr>
                    <td class="c2">miner</td>
                    <td class="c2">hash</td>
                    <td class="c2">up GPUs</td>
                    <td class="c2">GPUs</td>
                    <td class="c2">up rigs</td>
                    <td class="c2">rigs</td>
                    <td class="c2">hash/GPU</td>
                    <td class="c2">hash/rig</td>
                  </tr>
                  <tr>
                    <td>claymore</td>
                    <td align="right">1281</td>
                    <td align="right">57</td>
                    <td align="right">57</td>
                    <td align="right">10</td>
                    <td align="right">10</td>
                    <td align="right">22.5</td>
                    <td align="right">128.1</td>
                  </tr>
                </table></a>
              </td>
              <td>Latest Version: 1.3.1</td>
              <td>
                <a href="http://6af48c.ethosdistro.com/?json=yes">API</a> · <a href="http://6af48c.ethosdistro.com/?ailments=mining">Ailments</a> · <a href="http://6af48c.ethosdistro.com/?search=192.168">IP Search</a> · <a href="http://6af48c.ethosdistro.com/?ips=yes">IPs</a> · <a href="http://6af48c.ethosdistro.com/?bios=yes">GPU bioses</a>
              </td>
            </tr>
            <thead>
              <tr class="colhead">
                <th align="left" class="headerSortable c3">
                  <a href="#" class="hasTooltip">V<span>ethOS version and running miner</span></a>
                </th>
                <th align="left" class="headerSortable c3">
                  <a href="#" class="hasTooltip">D<span>GPU Driver</span></a>
                </th>
                <th align="left" class="headerSortable c3">
                  <a href="#" class="hasTooltip">M<span>current running miner</span></a>
                </th>
                <th align="left" class="headerSortable c3">
                  <a href="#" class="hasTooltip">G<span>live GPUs / detected GPUs, hover to get GPU model names</span></a>
                </th>
                <th align="left" class="headerSortable c3">
                  <a href="#" class="hasTooltip">name<span>rig name, (R) for 'remote config enabled' and (L) for 'using local config', hover over for more info</span></a>
                </th>
                <th align="right" class="headerSortable c3">
                  <a href="#" class="hasTooltip">a<span>ailment, condition, event that affects rig, hover over for more info</span></a>
                </th>
                <th align="right" class="headerSortable c3">
                  <a href="#" class="hasTooltip">loc<span>location of rig, check ethosdistro.com/pool.txt for sample config</span></a>
                </th>
                <th align="right" class="headerSortable c3">
                  <a href="#" class="hasTooltip">rig admin<span>rig IP address and admin terminal, IP will be odd color if pool info is different, hover over to see local pool info</span></a>
                </th>
                <th align="right" class="headerSortable c3">
                  <a href="#" class="hasTooltip">p<span>elapsed time since rig lasted pinged your stats panel (last reachable)</span></a>
                </th>
                <th align="right" class="headerSortable c3">
                  <a href="#" class="hasTooltip">b<span>elapsed time since rig booted (rig uptime)</span></a>
                </th>
                <th align="right" class="headerSortable c3">
                  <a href="#" class="hasTooltip">m<span>elapsed time since miner has started (running miner)</span></a>
                </th>
                <th align="right" class="headerSortable c3">
                  <a href="#" class="hasTooltip">rx<span>10 minute average of kbps received by rig (may indicate rig compromise if value is very high and rig port is open)</span></a>
                </th>
                <th align="right" class="headerSortable c3">
                  <a href="#" class="hasTooltip">tx<span>10 minute average of kbps send by rig (may indicate rig compromise if value is very high and rig port is open)</span></a>
                </th>
                <th align="right" class="headerSortable c3">
                  <a href="#" class="hasTooltip">L<span>5 minute load average (sysload)</span></a>
                </th>
                <th align="right" class="headerSortable c3">
                  <a href="#" class="hasTooltip">C<span>cpu temperature (in C)</span></a>
                </th>
                <th align="right" class="headerSortable c3">
                  <a href="#" class="hasTooltip">R<span>amount of system ram (in gigabytes)</span></a>
                </th>
                <th align="right" class="headerSortable c3">
                  <a href="#" class="hasTooltip">F<span>total free space (in gigabytes)</span></a>
                </th>
                <th align="right" class="headerSortable c3">
                  <a href="#" class="hasTooltip">H<span>total hashrate</span></a>
                </th>
                <th align="right" class="headerSortable c3">
                  <a href="#" class="hasTooltip">hashes<span>hashrate per GPU, hover over for more detailed hashrate, and for dualminer hashes (if enabled via ethos config)</span></a>
                </th>
                <th align="right" class="headerSortable c3">
                  <a href="#" class="hasTooltip">temps<span>temperature of GPUs (in C), click on temps to see historical data</span></a>
                </th>
                <th align="right" class="headerSortable c3">
                  <a href="#" class="hasTooltip">ptune<span>FGLRX = powertune, AMDGPU = dpm state, NVIDIA = performance level state, hover to see gpu voltages</span></a>
                </th>
                <th align="right" class="headerSortable c3">
                  <a href="#" class="hasTooltip">volts<span>gpu volts (currently only available for FGLRX and AMDGPU)</span></a>
                </th>
                <th align="right" class="headerSortable c3">
                  <a href="#" class="hasTooltip">watts<span>gpu estimated watts (currently only available for NVIDIA and AMDGPU)</span></a>
                </th>
                <th align="right" class="headerSortable c3">
                  <a href="#" class="hasTooltip">fans<span>GPU fan rpms (in K-rpm), click on fan rpms to see historical data, hover to see percents</span></a>
                </th>
                <th align="right" class="headerSortable c3">
                  <a href="#" class="hasTooltip">core<span>gpu core clocks (in ghz), hover to get default GPU core clocks</span></a>
                </th>
                <th align="right" class="headerSortable c3">
                  <a href="#" class="hasTooltip">mem<span>gpu memory clocks (in ghz), hover to get default GPU mem clocks</span></a>
                </th>
              </tr>
            </thead>
            <tr>
              <td class="c2" align="left"><span class="blink c4">1.2.5</span></td>
              <td align="left"><span class="c5">A</span></td>
              <td align="left">
                <a class="hasTooltip">
                <div class="c6">
                  cl
                </div><span>claymore v10.2</span></a>
              </td>
              <td align="left">
                <a href="#" class="hasTooltip c8">
                <div class="c7">
                  5/5
                </div><span>4gb · 01 ellesmere rx 480 115-d000pi0-100 samsung (115-d000pi0-100) · polaris10<br>
                4gb · 02 ellesmere rx 480 115-d000pi0-100 samsung (115-d000pi0-100) · polaris10<br>
                4gb · 03 ellesmere rx 480 115-d000pi0-100 samsung (115-d000pi0-100) · polaris10<br>
                4gb · 04 ellesmere rx 480 115-d000pi0-100 samsung (115-d000pi0-100) · polaris10<br>
                4gb · 05 ellesmere rx 480 115-d000pi0-100 samsung (115-d000pi0-100) · polaris10</span></a>
              </td>
              <td align="left">
                <div class="c10">
                  <a href="#" class="hasTooltip c9">e6e8e5<span>121.5 hash: miner active<br>
                  TB85 ()<br>
                  USB Flash Drive 4C530001061126103263<br>
                  Realtek Semiconductor Co., Ltd. RTL8111/8168/8411 PCI Express Gigabit Ethernet Controller (rev 0c)<br>
                  4.8.17-ethos49<br>
                  Intel(R) Celeron(R) CPU G1840 @ 2.80GHz<br>
                  Intel(R) Celeron(R) CPU G1840 @ 2.80GHz</span></a>
                </div>
                <div class="hasTooltip c12">
                  <div class="c11">
                    R
                  </div><span>(R) for 'remote config enabled' and (L) for 'using local config'</span>
                </div>
              </td>
              <td align="right"></td>
              <td align="right">eld01</td>
              <td align="right">
                <a target="_blank" class="hasTooltip" href="http://192.168.1.101/">
                <div class="ip_address c13">
                  192.168.1.101
                </div><span>stratumproxy enabled<br>
                proxywallet ...F0<br>
                proxypool1 pool-usa.ethosdistro.com:5001<br>
                proxypool2 pool-eu.ethosdistro.com:5001<br></span></a>
              </td>
              <td align="right">
                <a class="hasTooltip">
                <div class="c14">
                  m2
                </div><span>May 30 2018 11:19:59 UTC<br>
                0 days, 0 hours, 1 mins, 43 sec</span></a>
              </td>
              <td align="right">
                <a class="hasTooltip">
                <div class="c15">
                  h44
                </div><span>May 28 2018 14:32:04 UTC<br>
                1 days, 20 hours, 49 mins, 38 sec</span></a>
              </td>
              <td align="right">
                <a class="hasTooltip">
                <div class="c15">
                  h44
                </div><span>May 28 2018 14:33:15 UTC<br>
                1 days, 20 hours, 48 mins, 27 sec</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=e6e8e5&amp;type=load_rx_tx&amp;panel=6af48c"><span class="c16">0.5</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=e6e8e5&amp;type=load_rx_tx&amp;panel=6af48c"><span class="c17">0.2</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=e6e8e5&amp;type=load_rx_tx&amp;panel=6af48c"><span class="c18">0.3</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=e6e8e5&amp;type=cpu_temp&amp;panel=6af48c"><span class="c19">45</span></a>
              </td>
              <td align="right">4</td>
              <td align="right"><span class="c20">4</span></td>
              <td align="right">
                <a href="/graphs/?rig=e6e8e5&amp;type=hash&amp;panel=6af48c">121</a>
              </td>
              <td align="right">
                <a class="hasTooltip c23" href="/graphs/?rig=e6e8e5&amp;type=miner_hashes&amp;panel=6af48c">
                <div class="c21">
                  24
                </div>
                <div class="c21">
                  24
                </div>
                <div class="c21">
                  24
                </div>
                <div class="c21">
                  24
                </div>
                <div class="c22">
                  24
                </div>
                <div class="c21">
                  <span>24.34</span>
                </div>
                <div class="c21">
                  <span>24.34</span>
                </div>
                <div class="c21">
                  <span>24.33</span>
                </div>
                <div class="c21">
                  <span>24.34</span>
                </div>
                <div class="c22">
                  <span>24.12</span>
                </div></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=e6e8e5&amp;type=temp&amp;panel=6af48c">
                <div class="c24">
                  71
                </div>
                <div class="c24">
                  71
                </div>
                <div class="c25">
                  69
                </div>
                <div class="c25">
                  69
                </div>
                <div class="c24">
                  71
                </div></a>
              </td>
              <td align="right">
                <a href="#" class="hasTooltip">
                <div class="c26">
                  4
                </div>
                <div class="c26">
                  4
                </div>
                <div class="c26">
                  4
                </div>
                <div class="c26">
                  4
                </div>
                <div class="c26">
                  4
                </div>
                <div class="c26">
                  <span>4</span>
                </div>
                <div class="c26">
                  <span>4</span>
                </div>
                <div class="c26">
                  <span>4</span>
                </div>
                <div class="c26">
                  <span>4</span>
                </div>
                <div class="c26">
                  <span>4</span>
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=e6e8e5&amp;type=voltage&amp;panel=6af48c">
                <div class="c27">
                  0.99
                </div>
                <div class="c28">
                  1.06
                </div>
                <div class="c27">
                  0.99
                </div>
                <div class="c27">
                  0.99
                </div>
                <div class="c29">
                  1.08
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=e6e8e5&amp;type=watts&amp;panel=6af48c">
                <div class="c30"></div>
                <div class="c30"></div>(default)<br>
                <div class="c30"></div>(minimum)<br>
                <div class="c30"></div>(maximum)</a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=e6e8e5&amp;type=fanrpm&amp;panel=6af48c">
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div><span>percents: 84 84 84 84 84<br>
                k-rpms:</span>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=e6e8e5&amp;type=core&amp;panel=6af48c">
                <div class="c32">
                  1.18
                </div>
                <div class="c32">
                  1.18
                </div>
                <div class="c32">
                  1.18
                </div>
                <div class="c32">
                  1.18
                </div>
                <div class="c32">
                  1.18
                </div>
                <div class="c33">
                  <span>1.30</span>
                </div>
                <div class="c33">
                  <span>1.30</span>
                </div>
                <div class="c33">
                  <span>1.30</span>
                </div>
                <div class="c33">
                  <span>1.30</span>
                </div>
                <div class="c33">
                  <span>1.30</span>
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=e6e8e5&amp;type=mem&amp;panel=6af48c">
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div></a>
              </td>
            </tr>
            <tr>
              <td class="c2" align="left"><span class="blink c4">1.2.5</span></td>
              <td align="left"><span class="c5">A</span></td>
              <td align="left">
                <a class="hasTooltip">
                <div class="c6">
                  cl
                </div><span>claymore v9.8</span></a>
              </td>
              <td align="left">
                <a href="#" class="hasTooltip c8">
                <div class="c7">
                  5/5
                </div><span>4gb · 01 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · h5gc4h24ajr<br>
                4gb · 02 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · h5gc4h24ajr<br>
                4gb · 05 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · h5gc4h24ajr<br>
                4gb · 08 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · h5gc4h24ajr<br>
                4gb · 09 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · h5gc4h24ajr</span></a>
              </td>
              <td align="left">
                <div class="c10">
                  <a href="#" class="hasTooltip c34">699203<span>108.8 hash: miner active<br>
                  990FXA-UD3 R5 ()<br>
                  Ultra Fit 4C530001020223118520<br>
                  Realtek Semiconductor Co., Ltd. RTL8111/8168/8411 PCI Express Gigabit Ethernet Controller (rev 0c)<br>
                  4.8.17-ethos49<br>
                  AMD Sempron(tm) 145 Processor</span></a>
                </div>
                <div class="hasTooltip c12">
                  <div class="c11">
                    R
                  </div><span>(R) for 'remote config enabled' and (L) for 'using local config'</span>
                </div>
              </td>
              <td align="right"></td>
              <td align="right">eld02</td>
              <td align="right">
                <a target="_blank" class="hasTooltip" href="http://192.168.1.102/">
                <div class="ip_address c13">
                  192.168.1.102
                </div><span>stratumproxy enabled<br>
                proxywallet ...F0<br>
                proxypool1 pool-usa.ethosdistro.com:5001<br>
                proxypool2 pool-eu.ethosdistro.com:5001<br></span></a>
              </td>
              <td align="right">
                <a class="hasTooltip">
                <div class="c14">
                  s74
                </div><span>May 30 2018 11:20:28 UTC<br>
                0 days, 0 hours, 1 mins, 14 sec</span></a>
              </td>
              <td align="right">
                <a class="hasTooltip">
                <div class="c14">
                  d24
                </div><span>May 05 2018 11:46:30 UTC<br>
                24 days, 23 hours, 35 mins, 12 sec</span></a>
              </td>
              <td align="right">
                <a class="hasTooltip">
                <div class="c14">
                  d24
                </div><span>May 05 2018 11:47:27 UTC<br>
                24 days, 23 hours, 34 mins, 15 sec</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=699203&amp;type=load_rx_tx&amp;panel=6af48c"><span class="c35">0.6</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=699203&amp;type=load_rx_tx&amp;panel=6af48c"><span class="c36">0.4</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=699203&amp;type=load_rx_tx&amp;panel=6af48c"><span class="c37">0.5</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=699203&amp;type=cpu_temp&amp;panel=6af48c"><span class="c38">48</span></a>
              </td>
              <td align="right">4</td>
              <td align="right"><span class="c39">3</span></td>
              <td align="right">
                <a href="/graphs/?rig=699203&amp;type=hash&amp;panel=6af48c">109</a>
              </td>
              <td align="right">
                <a class="hasTooltip c23" href="/graphs/?rig=699203&amp;type=miner_hashes&amp;panel=6af48c">
                <div class="c21">
                  22
                </div>
                <div class="c21">
                  22
                </div>
                <div class="c21">
                  22
                </div>
                <div class="c21">
                  22
                </div>
                <div class="c21">
                  22
                </div>
                <div class="c21">
                  <span>21.77</span>
                </div>
                <div class="c21">
                  <span>21.76</span>
                </div>
                <div class="c21">
                  <span>21.78</span>
                </div>
                <div class="c21">
                  <span>21.76</span>
                </div>
                <div class="c21">
                  <span>21.76</span>
                </div></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=699203&amp;type=temp&amp;panel=6af48c">
                <div class="c25">
                  69
                </div>
                <div class="c40">
                  65
                </div>
                <div class="c24">
                  71
                </div>
                <div class="c41">
                  67
                </div>
                <div class="c42">
                  72
                </div></a>
              </td>
              <td align="right">
                <a href="#" class="hasTooltip">
                <div class="c26">
                  4
                </div>
                <div class="c26">
                  4
                </div>
                <div class="c26">
                  4
                </div>
                <div class="c26">
                  4
                </div>
                <div class="c26">
                  4
                </div>
                <div class="c26">
                  <span>4</span>
                </div>
                <div class="c26">
                  <span>4</span>
                </div>
                <div class="c26">
                  <span>4</span>
                </div>
                <div class="c26">
                  <span>4</span>
                </div>
                <div class="c26">
                  <span>4</span>
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=699203&amp;type=voltage&amp;panel=6af48c">
                <div class="c27">
                  0.99
                </div>
                <div class="c43">
                  1.04
                </div>
                <div class="c44">
                  1.00
                </div>
                <div class="c45">
                  1.02
                </div>
                <div class="c27">
                  0.99
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=699203&amp;type=watts&amp;panel=6af48c">
                <div class="c30"></div>
                <div class="c30"></div>(default)<br>
                <div class="c30"></div>(minimum)<br>
                <div class="c30"></div>(maximum)</a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=699203&amp;type=fanrpm&amp;panel=6af48c">
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div><span>percents: 84 84 84 84 84<br>
                k-rpms:</span>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=699203&amp;type=core&amp;panel=6af48c">
                <div class="c46">
                  1.15
                </div>
                <div class="c46">
                  1.15
                </div>
                <div class="c46">
                  1.15
                </div>
                <div class="c46">
                  1.15
                </div>
                <div class="c46">
                  1.15
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=699203&amp;type=mem&amp;panel=6af48c">
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div></a>
              </td>
            </tr>
            <tr>
              <td class="c2" align="left"><span class="blink c4">1.2.5</span></td>
              <td align="left"><span class="c5">A</span></td>
              <td align="left">
                <a class="hasTooltip">
                <div class="c6">
                  cl
                </div><span>claymore v9.8</span></a>
              </td>
              <td align="left">
                <a href="#" class="hasTooltip c8">
                <div class="c7">
                  6/6
                </div><span>4gb · 01 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · h5gc4h24ajr<br>
                4gb · 02 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · h5gc4h24ajr<br>
                4gb · 05 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · h5gc4h24ajr<br>
                4gb · 06 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · h5gc4h24ajr<br>
                4gb · 09 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · h5gc4h24ajr<br>
                4gb · 0a ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · h5gc4h24ajr</span></a>
              </td>
              <td align="left">
                <div class="c10">
                  <a href="#" class="hasTooltip c34">66f26b<span>130.2 hash: miner active<br>
                  990FXA-UD3 R5 ()<br>
                  Cruzer Glide 200426056307BE514FA9<br>
                  Realtek Semiconductor Co., Ltd. RTL8111/8168/8411 PCI Express Gigabit Ethernet Controller (rev 0c)<br>
                  4.8.17-ethos49<br>
                  AMD Sempron(tm) 145 Processor</span></a>
                </div>
                <div class="hasTooltip c12">
                  <div class="c11">
                    R
                  </div><span>(R) for 'remote config enabled' and (L) for 'using local config'</span>
                </div>
              </td>
              <td align="right"></td>
              <td align="right">eld03</td>
              <td align="right">
                <a target="_blank" class="hasTooltip" href="http://192.168.1.103/">
                <div class="ip_address c13">
                  192.168.1.103
                </div><span>stratumproxy enabled<br>
                proxywallet ...F0<br>
                proxypool1 pool-usa.ethosdistro.com:5001<br>
                proxypool2 pool-eu.ethosdistro.com:5001<br></span></a>
              </td>
              <td align="right">
                <a class="hasTooltip">
                <div class="c14">
                  s80
                </div><span>May 30 2018 11:20:22 UTC<br>
                0 days, 0 hours, 1 mins, 20 sec</span></a>
              </td>
              <td align="right">
                <a class="hasTooltip">
                <div class="c14">
                  d40
                </div><span>Apr 19 2018 14:44:33 UTC<br>
                40 days, 20 hours, 37 mins, 9 sec</span></a>
              </td>
              <td align="right">
                <a class="hasTooltip">
                <div class="c14">
                  d12
                </div><span>May 17 2018 22:39:22 UTC<br>
                12 days, 12 hours, 42 mins, 20 sec</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=66f26b&amp;type=load_rx_tx&amp;panel=6af48c"><span class="c35">0.6</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=66f26b&amp;type=load_rx_tx&amp;panel=6af48c"><span class="c36">0.3</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=66f26b&amp;type=load_rx_tx&amp;panel=6af48c"><span class="c48">1.6</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=66f26b&amp;type=cpu_temp&amp;panel=6af48c"><span class="c49">43</span></a>
              </td>
              <td align="right">4</td>
              <td align="right"><span class="c39">3</span></td>
              <td align="right">
                <a href="/graphs/?rig=66f26b&amp;type=hash&amp;panel=6af48c">130</a>
              </td>
              <td align="right">
                <a class="hasTooltip c23" href="/graphs/?rig=66f26b&amp;type=miner_hashes&amp;panel=6af48c">
                <div class="c50">
                  22
                </div>
                <div class="c21">
                  22
                </div>
                <div class="c50">
                  22
                </div>
                <div class="c21">
                  22
                </div>
                <div class="c21">
                  22
                </div>
                <div class="c50">
                  22
                </div>
                <div class="c50">
                  <span>21.67</span>
                </div>
                <div class="c21">
                  <span>21.74</span>
                </div>
                <div class="c50">
                  <span>21.67</span>
                </div>
                <div class="c21">
                  <span>21.76</span>
                </div>
                <div class="c21">
                  <span>21.74</span>
                </div>
                <div class="c50">
                  <span>21.65</span>
                </div></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=66f26b&amp;type=temp&amp;panel=6af48c">
                <div class="c51">
                  80
                </div>
                <div class="c41">
                  67
                </div>
                <div class="c25">
                  69
                </div>
                <div class="c40">
                  65
                </div>
                <div class="c52">
                  64
                </div>
                <div class="c53">
                  68
                </div></a>
              </td>
              <td align="right">
                <a href="#" class="hasTooltip">
                <div class="c26">
                  4
                </div>
                <div class="c26">
                  4
                </div>
                <div class="c26">
                  4
                </div>
                <div class="c26">
                  4
                </div>
                <div class="c26">
                  4
                </div>
                <div class="c26">
                  4
                </div>
                <div class="c26">
                  <span>4</span>
                </div>
                <div class="c26">
                  <span>4</span>
                </div>
                <div class="c26">
                  <span>4</span>
                </div>
                <div class="c26">
                  <span>4</span>
                </div>
                <div class="c26">
                  <span>4</span>
                </div>
                <div class="c26">
                  <span>4</span>
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=66f26b&amp;type=voltage&amp;panel=6af48c">
                <div class="c54">
                  1.01
                </div>
                <div class="c43">
                  1.04
                </div>
                <div class="c45">
                  1.02
                </div>
                <div class="c54">
                  1.01
                </div>
                <div class="c45">
                  1.02
                </div>
                <div class="c27">
                  0.99
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=66f26b&amp;type=watts&amp;panel=6af48c">
                <div class="c30"></div>
                <div class="c30"></div>(default)<br>
                <div class="c30"></div>(minimum)<br>
                <div class="c30"></div>(maximum)</a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=66f26b&amp;type=fanrpm&amp;panel=6af48c">
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div><span>percents: 84 84 84 84 84 84<br>
                k-rpms:</span>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=66f26b&amp;type=core&amp;panel=6af48c">
                <div class="c46">
                  1.15
                </div>
                <div class="c46">
                  1.15
                </div>
                <div class="c46">
                  1.15
                </div>
                <div class="c46">
                  1.15
                </div>
                <div class="c46">
                  1.15
                </div>
                <div class="c46">
                  1.15
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=66f26b&amp;type=mem&amp;panel=6af48c">
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div></a>
              </td>
            </tr>
            <tr>
              <td class="c2" align="left"><span class="blink c4">1.2.5</span></td>
              <td align="left"><span class="c5">A</span></td>
              <td align="left">
                <a class="hasTooltip">
                <div class="c6">
                  cl
                </div><span>claymore v9.8</span></a>
              </td>
              <td align="left">
                <a href="#" class="hasTooltip c8">
                <div class="c7">
                  5/5
                </div><span>4gb · 01 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · h5gc4h24ajr<br>
                4gb · 02 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · h5gc4h24ajr<br>
                4gb · 05 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · h5gc4h24ajr<br>
                4gb · 08 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · h5gc4h24ajr<br>
                4gb · 09 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · h5gc4h24ajr</span></a>
              </td>
              <td align="left">
                <div class="c10">
                  <a href="#" class="hasTooltip c34">699224<span>108.9 hash: miner active<br>
                  990FXA-UD3 R5 ()<br>
                  Ultra Fit 4C530001150223119030<br>
                  Realtek Semiconductor Co., Ltd. RTL8111/8168/8411 PCI Express Gigabit Ethernet Controller (rev 0c)<br>
                  4.8.17-ethos49<br>
                  AMD Sempron(tm) 145 Processor</span></a>
                </div>
                <div class="hasTooltip c12">
                  <div class="c11">
                    R
                  </div><span>(R) for 'remote config enabled' and (L) for 'using local config'</span>
                </div>
              </td>
              <td align="right"></td>
              <td align="right">eld04</td>
              <td align="right">
                <a target="_blank" class="hasTooltip" href="http://192.168.1.104/">
                <div class="ip_address c13">
                  192.168.1.104
                </div><span>stratumproxy enabled<br>
                proxywallet ...F0<br>
                proxypool1 pool-usa.ethosdistro.com:5001<br>
                proxypool2 pool-eu.ethosdistro.com:5001<br></span></a>
              </td>
              <td align="right">
                <a class="hasTooltip">
                <div class="c14">
                  s28
                </div><span>May 30 2018 11:21:14 UTC<br>
                0 days, 0 hours, 0 mins, 28 sec</span></a>
              </td>
              <td align="right">
                <a class="hasTooltip">
                <div class="c14">
                  d10
                </div><span>May 19 2018 11:43:27 UTC<br>
                10 days, 23 hours, 38 mins, 15 sec</span></a>
              </td>
              <td align="right">
                <a class="hasTooltip">
                <div class="c14">
                  d4
                </div><span>May 25 2018 22:41:11 UTC<br>
                4 days, 12 hours, 40 mins, 31 sec</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=699224&amp;type=load_rx_tx&amp;panel=6af48c"><span class="c35">0.6</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=699224&amp;type=load_rx_tx&amp;panel=6af48c"><span class="c36">0.4</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=699224&amp;type=load_rx_tx&amp;panel=6af48c"><span class="c37">0.5</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=699224&amp;type=cpu_temp&amp;panel=6af48c"><span class="c55">58</span></a>
              </td>
              <td align="right">4</td>
              <td align="right"><span class="c39">3</span></td>
              <td align="right">
                <a href="/graphs/?rig=699224&amp;type=hash&amp;panel=6af48c">109</a>
              </td>
              <td align="right">
                <a class="hasTooltip c23" href="/graphs/?rig=699224&amp;type=miner_hashes&amp;panel=6af48c">
                <div class="c56">
                  22
                </div>
                <div class="c21">
                  22
                </div>
                <div class="c21">
                  22
                </div>
                <div class="c22">
                  22
                </div>
                <div class="c21">
                  22
                </div>
                <div class="c56">
                  <span>21.79</span>
                </div>
                <div class="c21">
                  <span>21.81</span>
                </div>
                <div class="c21">
                  <span>21.82</span>
                </div>
                <div class="c22">
                  <span>21.65</span>
                </div>
                <div class="c21">
                  <span>21.80</span>
                </div></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=699224&amp;type=temp&amp;panel=6af48c">
                <div class="c25">
                  69
                </div>
                <div class="c25">
                  69
                </div>
                <div class="c40">
                  65
                </div>
                <div class="c25">
                  69
                </div>
                <div class="c53">
                  68
                </div></a>
              </td>
              <td align="right">
                <a href="#" class="hasTooltip">
                <div class="c26">
                  4
                </div>
                <div class="c26">
                  4
                </div>
                <div class="c26">
                  4
                </div>
                <div class="c26">
                  4
                </div>
                <div class="c26">
                  4
                </div>
                <div class="c26">
                  <span>4</span>
                </div>
                <div class="c26">
                  <span>4</span>
                </div>
                <div class="c26">
                  <span>4</span>
                </div>
                <div class="c26">
                  <span>4</span>
                </div>
                <div class="c26">
                  <span>4</span>
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=699224&amp;type=voltage&amp;panel=6af48c">
                <div class="c27">
                  0.99
                </div>
                <div class="c57">
                  0.96
                </div>
                <div class="c58">
                  1.03
                </div>
                <div class="c27">
                  0.99
                </div>
                <div class="c58">
                  1.03
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=699224&amp;type=watts&amp;panel=6af48c">
                <div class="c30"></div>
                <div class="c30"></div>(default)<br>
                <div class="c30"></div>(minimum)<br>
                <div class="c30"></div>(maximum)</a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=699224&amp;type=fanrpm&amp;panel=6af48c">
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div><span>percents: 84 84 84 84 84<br>
                k-rpms:</span>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=699224&amp;type=core&amp;panel=6af48c">
                <div class="c46">
                  1.15
                </div>
                <div class="c46">
                  1.15
                </div>
                <div class="c46">
                  1.15
                </div>
                <div class="c46">
                  1.15
                </div>
                <div class="c46">
                  1.15
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=699224&amp;type=mem&amp;panel=6af48c">
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div></a>
              </td>
            </tr>
            <tr>
              <td class="c2" align="left"><span class="blink c4">1.2.9</span></td>
              <td align="left"><span class="c5">A</span></td>
              <td align="left">
                <a class="hasTooltip">
                <div class="c6">
                  cl
                </div><span>claymore v10.2</span></a>
              </td>
              <td align="left">
                <a href="#" class="hasTooltip c8">
                <div class="c7">
                  6/6
                </div><span>4gb · 01 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · polaris10<br>
                4gb · 02 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · polaris10<br>
                4gb · 05 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · polaris10<br>
                4gb · 06 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · polaris10<br>
                4gb · 09 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · polaris10<br>
                4gb · 0a ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · polaris10</span></a>
              </td>
              <td align="left">
                <div class="c10">
                  <a href="#" class="hasTooltip c34">64eb5a<span>130.8 hash: miner active<br>
                  990FXA-UD3 R5 ()<br>
                  DataTraveler SE9 000FEAFAAB63CCA0B7F42431<br>
                  Realtek Semiconductor Co., Ltd. RTL8111/8168/8411 PCI Express Gigabit Ethernet Controller (rev 0c)<br>
                  4.8.17-ethos49<br>
                  1 x AMD Sempron(tm) 145 Processor</span></a>
                </div>
                <div class="hasTooltip c12">
                  <div class="c11">
                    L
                  </div><span>(R) for 'remote config enabled' and (L) for 'using local config'</span>
                </div>
              </td>
              <td align="right"></td>
              <td align="right">eld05</td>
              <td align="right">
                <a target="_blank" class="hasTooltip" href="http://192.168.1.105/">
                <div class="ip_address c13">
                  192.168.1.105
                </div><span>stratumproxy enabled<br>
                proxywallet ...F0<br>
                proxypool1 pool-usa.ethosdistro.com:5001<br>
                proxypool2 pool-eu.ethosdistro.com:5001<br></span></a>
              </td>
              <td align="right">
                <a class="hasTooltip">
                <div class="c14">
                  s14
                </div><span>May 30 2018 11:21:28 UTC<br>
                0 days, 0 hours, 0 mins, 14 sec</span></a>
              </td>
              <td align="right">
                <a class="hasTooltip">
                <div class="c14">
                  d3
                </div><span>May 27 2018 00:35:20 UTC<br>
                3 days, 10 hours, 46 mins, 22 sec</span></a>
              </td>
              <td align="right">
                <a class="hasTooltip">
                <div class="c14">
                  d3
                </div><span>May 27 2018 00:36:58 UTC<br>
                3 days, 10 hours, 44 mins, 44 sec</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=64eb5a&amp;type=load_rx_tx&amp;panel=6af48c"><span class="c16">0.6</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=64eb5a&amp;type=load_rx_tx&amp;panel=6af48c"><span class="c36">0.3</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=64eb5a&amp;type=load_rx_tx&amp;panel=6af48c"><span class="c59">0.6</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=64eb5a&amp;type=cpu_temp&amp;panel=6af48c"><span class="c60">67</span></a>
              </td>
              <td align="right"></td>
              <td align="right"><span class="c20">4</span></td>
              <td align="right">
                <a href="/graphs/?rig=64eb5a&amp;type=hash&amp;panel=6af48c">131</a>
              </td>
              <td align="right">
                <a class="hasTooltip c23" href="/graphs/?rig=64eb5a&amp;type=miner_hashes&amp;panel=6af48c">
                <div class="c21">
                  22
                </div>
                <div class="c21">
                  22
                </div>
                <div class="c21">
                  22
                </div>
                <div class="c21">
                  22
                </div>
                <div class="c22">
                  22
                </div>
                <div class="c21">
                  22
                </div>
                <div class="c21">
                  <span>21.82</span>
                </div>
                <div class="c21">
                  <span>21.81</span>
                </div>
                <div class="c21">
                  <span>21.81</span>
                </div>
                <div class="c21">
                  <span>21.82</span>
                </div>
                <div class="c22">
                  <span>21.68</span>
                </div>
                <div class="c21">
                  <span>21.82</span>
                </div></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=64eb5a&amp;type=temp&amp;panel=6af48c">
                <div class="c40">
                  65
                </div>
                <div class="c61">
                  79
                </div>
                <div class="c62">
                  66
                </div>
                <div class="c63">
                  63
                </div>
                <div class="c64">
                  74
                </div>
                <div class="c65">
                  70
                </div></a>
              </td>
              <td align="right">
                <a href="#" class="hasTooltip">
                <div class="c66">
                  5
                </div>
                <div class="c66">
                  5
                </div>
                <div class="c66">
                  5
                </div>
                <div class="c66">
                  5
                </div>
                <div class="c66">
                  5
                </div>
                <div class="c66">
                  5
                </div>
                <div class="c66">
                  <span>5</span>
                </div>
                <div class="c66">
                  <span>5</span>
                </div>
                <div class="c66">
                  <span>5</span>
                </div>
                <div class="c66">
                  <span>5</span>
                </div>
                <div class="c66">
                  <span>5</span>
                </div>
                <div class="c66">
                  <span>5</span>
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=64eb5a&amp;type=voltage&amp;panel=6af48c">
                <div class="c45">
                  1.02
                </div>
                <div class="c28">
                  1.06
                </div>
                <div class="c45">
                  1.02
                </div>
                <div class="c67">
                  1.07
                </div>
                <div class="c68">
                  0.94
                </div>
                <div class="c69">
                  0.98
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=64eb5a&amp;type=watts&amp;panel=6af48c">
                <div class="c30"></div>
                <div class="c30"></div>(default)<br>
                <div class="c30"></div>(minimum)<br>
                <div class="c30"></div>(maximum)</a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=64eb5a&amp;type=fanrpm&amp;panel=6af48c">
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div><span>percents: 84 84 84 84 84 84<br>
                k-rpms:</span>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=64eb5a&amp;type=core&amp;panel=6af48c">
                <div class="c70">
                  1.19
                </div>
                <div class="c70">
                  1.19
                </div>
                <div class="c70">
                  1.19
                </div>
                <div class="c70">
                  1.19
                </div>
                <div class="c70">
                  1.19
                </div>
                <div class="c70">
                  1.19
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=64eb5a&amp;type=mem&amp;panel=6af48c">
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div></a>
              </td>
            </tr>
            <tr>
              <td class="c2" align="left"><span class="blink c4">1.2.9</span></td>
              <td align="left"><span class="c5">A</span></td>
              <td align="left">
                <a class="hasTooltip">
                <div class="c6">
                  cl
                </div><span>claymore v10.2</span></a>
              </td>
              <td align="left">
                <a href="#" class="hasTooltip c8">
                <div class="c7">
                  6/6
                </div><span>4gb · 01 ellesmere rx 480 115-d000pi0-100 samsung (115-d000pi0-100) · polaris10<br>
                4gb · 02 ellesmere rx 480 115-d000pi0-100 samsung (115-d000pi0-100) · polaris10<br>
                4gb · 03 ellesmere rx 480 115-d000pi0-100 sk hynix (115-d000pi0-100) · polaris10<br>
                4gb · 04 ellesmere rx 480 115-d000pi0-100 samsung (115-d000pi0-100) · polaris10<br>
                4gb · 05 ellesmere rx 480 115-d000pi0-100 samsung (115-d000pi0-100) · polaris10<br>
                4gb · 06 ellesmere rx 480 115-d000pi0-100 samsung (115-d000pi0-100) · polaris10</span></a>
              </td>
              <td align="left">
                <div class="c10">
                  <a href="#" class="hasTooltip c9">e6e52a<span>143.7 hash: miner active<br>
                  TB85 ()<br>
                  KINGSTON SSDNOW 30GB 40JM107ZM83Z<br>
                  Realtek Semiconductor Co., Ltd. RTL8111/8168/8411 PCI Express Gigabit Ethernet Controller (rev 0c)<br>
                  4.8.17-ethos49<br>
                  Intel(R) Celeron(R) CPU G1840 @ 2.80GHz<br>
                  Intel(R) Celeron(R) CPU G1840 @ 2.80GHz</span></a>
                </div>
                <div class="hasTooltip c12">
                  <div class="c11">
                    L
                  </div><span>(R) for 'remote config enabled' and (L) for 'using local config'</span>
                </div>
              </td>
              <td align="right"></td>
              <td align="right">jld01</td>
              <td align="right">
                <a target="_blank" class="hasTooltip" href="http://192.168.1.109/">
                <div class="ip_address c71">
                  192.168.1.109
                </div><span>stratumproxy enabled<br>
                proxywallet ...49<br>
                proxypool1 eth-eu1.nanopool.org:9999<br>
                proxypool2 pool-usa.ethosdistro.com:5001<br></span></a>
              </td>
              <td align="right">
                <a class="hasTooltip">
                <div class="c14">
                  m2
                </div><span>May 30 2018 11:19:58 UTC<br>
                0 days, 0 hours, 1 mins, 44 sec</span></a>
              </td>
              <td align="right">
                <a class="hasTooltip">
                <div class="c14">
                  d2
                </div><span>May 27 2018 15:46:50 UTC<br>
                2 days, 19 hours, 34 mins, 52 sec</span></a>
              </td>
              <td align="right">
                <a class="hasTooltip">
                <div class="c14">
                  d2
                </div><span>May 27 2018 15:47:53 UTC<br>
                2 days, 19 hours, 33 mins, 49 sec</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=e6e52a&amp;type=load_rx_tx&amp;panel=6af48c"><span class="c72">0.5</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=e6e52a&amp;type=load_rx_tx&amp;panel=6af48c"><span class="c17">0.2</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=e6e52a&amp;type=load_rx_tx&amp;panel=6af48c"><span class="c73">1.6</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=e6e52a&amp;type=cpu_temp&amp;panel=6af48c"><span class="c74">49</span></a>
              </td>
              <td align="right">4</td>
              <td align="right"><span class="c20">4</span></td>
              <td align="right">
                <a href="/graphs/?rig=e6e52a&amp;type=hash&amp;panel=6af48c">144</a>
              </td>
              <td align="right">
                <a class="hasTooltip c23" href="/graphs/?rig=e6e52a&amp;type=miner_hashes&amp;panel=6af48c">
                <div class="c56">
                  24
                </div>
                <div class="c21">
                  24
                </div>
                <div class="c75">
                  22
                </div>
                <div class="c21">
                  24
                </div>
                <div class="c21">
                  24
                </div>
                <div class="c21">
                  24
                </div>
                <div class="c56">
                  <span>24.34</span>
                </div>
                <div class="c21">
                  <span>24.37</span>
                </div>
                <div class="c75">
                  <span>21.85</span>
                </div>
                <div class="c21">
                  <span>24.35</span>
                </div>
                <div class="c21">
                  <span>24.38</span>
                </div>
                <div class="c21">
                  <span>24.36</span>
                </div></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=e6e52a&amp;type=temp&amp;panel=6af48c">
                <div class="c40">
                  65
                </div>
                <div class="c76">
                  73
                </div>
                <div class="c53">
                  68
                </div>
                <div class="c40">
                  65
                </div>
                <div class="c65">
                  70
                </div>
                <div class="c77">
                  59
                </div></a>
              </td>
              <td align="right">
                <a href="#" class="hasTooltip">
                <div class="c66">
                  5
                </div>
                <div class="c66">
                  5
                </div>
                <div class="c66">
                  5
                </div>
                <div class="c66">
                  5
                </div>
                <div class="c66">
                  5
                </div>
                <div class="c66">
                  5
                </div>
                <div class="c66">
                  <span>5</span>
                </div>
                <div class="c66">
                  <span>5</span>
                </div>
                <div class="c66">
                  <span>5</span>
                </div>
                <div class="c66">
                  <span>5</span>
                </div>
                <div class="c66">
                  <span>5</span>
                </div>
                <div class="c66">
                  <span>5</span>
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=e6e52a&amp;type=voltage&amp;panel=6af48c">
                <div class="c78">
                  1.10
                </div>
                <div class="c28">
                  1.06
                </div>
                <div class="c67">
                  1.07
                </div>
                <div class="c43">
                  1.04
                </div>
                <div class="c45">
                  1.02
                </div>
                <div class="c43">
                  1.04
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=e6e52a&amp;type=watts&amp;panel=6af48c">
                <div class="c30"></div>
                <div class="c30"></div>(default)<br>
                <div class="c30"></div>(minimum)<br>
                <div class="c30"></div>(maximum)</a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=e6e52a&amp;type=fanrpm&amp;panel=6af48c">
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div><span>percents: 84 84 84 84 84 84<br>
                k-rpms:</span>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=e6e52a&amp;type=core&amp;panel=6af48c">
                <div class="c79">
                  1.18
                </div>
                <div class="c80">
                  1.22
                </div>
                <div class="c81">
                  1.22
                </div>
                <div class="c82">
                  1.20
                </div>
                <div class="c80">
                  1.22
                </div>
                <div class="c83">
                  1.19
                </div>
                <div class="c33">
                  <span>1.30</span>
                </div>
                <div class="c33">
                  <span>1.30</span>
                </div>
                <div class="c33">
                  <span>1.30</span>
                </div>
                <div class="c33">
                  <span>1.30</span>
                </div>
                <div class="c33">
                  <span>1.30</span>
                </div>
                <div class="c33">
                  <span>1.30</span>
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=e6e52a&amp;type=mem&amp;panel=6af48c">
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div></a>
              </td>
            </tr>
            <tr>
              <td class="c2" align="left"><span class="blink c4">1.2.9</span></td>
              <td align="left"><span class="c5">A</span></td>
              <td align="left">
                <a class="hasTooltip">
                <div class="c6">
                  cl
                </div><span>claymore v10.2</span></a>
              </td>
              <td align="left">
                <a href="#" class="hasTooltip c8">
                <div class="c7">
                  6/6
                </div><span>4gb · 01 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · polaris10<br>
                4gb · 02 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · polaris10<br>
                4gb · 05 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · polaris10<br>
                4gb · 06 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · polaris10<br>
                4gb · 09 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · polaris10<br>
                4gb · 0a ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · polaris10</span></a>
              </td>
              <td align="left">
                <div class="c10">
                  <a href="#" class="hasTooltip c34">e0d831<span>130.9 hash: miner active<br>
                  990FXA-UD3 R5 ()<br>
                  Cruzer Glide 200426057107BE514FAD<br>
                  Realtek Semiconductor Co., Ltd. RTL8111/8168/8411 PCI Express Gigabit Ethernet Controller (rev 0c)<br>
                  4.8.17-ethos49<br>
                  1 x AMD Sempron(tm) 145 Processor</span></a>
                </div>
                <div class="hasTooltip c12">
                  <div class="c11">
                    L
                  </div><span>(R) for 'remote config enabled' and (L) for 'using local config'</span>
                </div>
              </td>
              <td align="right"></td>
              <td align="right">jld02</td>
              <td align="right">
                <a target="_blank" class="hasTooltip" href="http://192.168.1.106/">
                <div class="ip_address c71">
                  192.168.1.106
                </div><span>stratumproxy enabled<br>
                proxywallet ...49<br>
                proxypool1 eth-eu1.nanopool.org:9999<br>
                proxypool2 pool-usa.ethosdistro.com:5001<br></span></a>
              </td>
              <td align="right">
                <a class="hasTooltip">
                <div class="c14">
                  m2
                </div><span>May 30 2018 11:20:09 UTC<br>
                0 days, 0 hours, 1 mins, 33 sec</span></a>
              </td>
              <td align="right">
                <a class="hasTooltip">
                <div class="c14">
                  d17
                </div><span>May 13 2018 10:57:11 UTC<br>
                17 days, 0 hours, 24 mins, 31 sec</span></a>
              </td>
              <td align="right">
                <a class="hasTooltip">
                <div class="c14">
                  d17
                </div><span>May 13 2018 10:58:11 UTC<br>
                17 days, 0 hours, 23 mins, 31 sec</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=e0d831&amp;type=load_rx_tx&amp;panel=6af48c"><span class="c16">0.6</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=e0d831&amp;type=load_rx_tx&amp;panel=6af48c"><span class="c36">0.4</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=e0d831&amp;type=load_rx_tx&amp;panel=6af48c"><span class="c84">1.9</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=e0d831&amp;type=cpu_temp&amp;panel=6af48c"><span class="c85">64</span></a>
              </td>
              <td align="right">4</td>
              <td align="right"><span class="c20">4</span></td>
              <td align="right">
                <a href="/graphs/?rig=e0d831&amp;type=hash&amp;panel=6af48c">131</a>
              </td>
              <td align="right">
                <a class="hasTooltip c23" href="/graphs/?rig=e0d831&amp;type=miner_hashes&amp;panel=6af48c">
                <div class="c21">
                  22
                </div>
                <div class="c21">
                  22
                </div>
                <div class="c21">
                  22
                </div>
                <div class="c21">
                  22
                </div>
                <div class="c21">
                  22
                </div>
                <div class="c21">
                  22
                </div>
                <div class="c21">
                  <span>21.82</span>
                </div>
                <div class="c21">
                  <span>21.82</span>
                </div>
                <div class="c21">
                  <span>21.83</span>
                </div>
                <div class="c21">
                  <span>21.82</span>
                </div>
                <div class="c21">
                  <span>21.83</span>
                </div>
                <div class="c21">
                  <span>21.82</span>
                </div></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=e0d831&amp;type=temp&amp;panel=6af48c">
                <div class="c65">
                  70
                </div>
                <div class="c63">
                  63
                </div>
                <div class="c41">
                  67
                </div>
                <div class="c86">
                  75
                </div>
                <div class="c24">
                  71
                </div>
                <div class="c53">
                  68
                </div></a>
              </td>
              <td align="right">
                <a href="#" class="hasTooltip">
                <div class="c66">
                  5
                </div>
                <div class="c66">
                  5
                </div>
                <div class="c66">
                  5
                </div>
                <div class="c66">
                  5
                </div>
                <div class="c66">
                  5
                </div>
                <div class="c66">
                  5
                </div>
                <div class="c66">
                  <span>5</span>
                </div>
                <div class="c66">
                  <span>5</span>
                </div>
                <div class="c66">
                  <span>5</span>
                </div>
                <div class="c66">
                  <span>5</span>
                </div>
                <div class="c66">
                  <span>5</span>
                </div>
                <div class="c66">
                  <span>5</span>
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=e0d831&amp;type=voltage&amp;panel=6af48c">
                <div class="c43">
                  1.04
                </div>
                <div class="c43">
                  1.04
                </div>
                <div class="c29">
                  1.08
                </div>
                <div class="c29">
                  1.08
                </div>
                <div class="c78">
                  1.10
                </div>
                <div class="c29">
                  1.08
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=e0d831&amp;type=watts&amp;panel=6af48c">
                <div class="c30"></div>
                <div class="c30"></div>(default)<br>
                <div class="c30"></div>(minimum)<br>
                <div class="c30"></div>(maximum)</a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=e0d831&amp;type=fanrpm&amp;panel=6af48c">
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div><span>percents: 84 84 84 84 84 84<br>
                k-rpms:</span>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=e0d831&amp;type=core&amp;panel=6af48c">
                <div class="c87">
                  1.20
                </div>
                <div class="c87">
                  1.20
                </div>
                <div class="c87">
                  1.20
                </div>
                <div class="c87">
                  1.20
                </div>
                <div class="c87">
                  1.20
                </div>
                <div class="c87">
                  1.20
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=e0d831&amp;type=mem&amp;panel=6af48c">
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div></a>
              </td>
            </tr>
            <tr>
              <td class="c2" align="left"><span class="blink c4">1.2.9</span></td>
              <td align="left"><span class="c5">A</span></td>
              <td align="left">
                <a class="hasTooltip">
                <div class="c6">
                  cl
                </div><span>claymore v10.2</span></a>
              </td>
              <td align="left">
                <a href="#" class="hasTooltip c8">
                <div class="c7">
                  6/6
                </div><span>4gb · 01 ellesmere rx 480 115-d000pi0-100 samsung (115-d000pi0-100) · polaris10<br>
                4gb · 02 ellesmere rx 480 115-d000pi0-100 samsung (115-d000pi0-100) · polaris10<br>
                4gb · 03 ellesmere rx 480 115-d000pi0-100 samsung (115-d000pi0-100) · polaris10<br>
                4gb · 04 ellesmere rx 480 115-d000pi0-100 samsung (115-d000pi0-100) · polaris10<br>
                4gb · 05 ellesmere rx 480 115-d000pi0-100 samsung (115-d000pi0-100) · polaris10<br>
                4gb · 06 ellesmere rx 480 115-d000pi0-100 samsung (115-d000pi0-100) · polaris10</span></a>
              </td>
              <td align="left">
                <div class="c10">
                  <a href="#" class="hasTooltip c9">e6e481<span>146.1 hash: miner active<br>
                  TB85 ()<br>
                  KINGSTON SSDNOW 30GB 70PA50LCK04K<br>
                  Realtek Semiconductor Co., Ltd. RTL8111/8168/8411 PCI Express Gigabit Ethernet Controller (rev 0c)<br>
                  4.8.17-ethos49<br>
                  Intel(R) Celeron(R) CPU G1840 @ 2.80GHz<br>
                  Intel(R) Celeron(R) CPU G1840 @ 2.80GHz</span></a>
                </div>
                <div class="hasTooltip c12">
                  <div class="c11">
                    L
                  </div><span>(R) for 'remote config enabled' and (L) for 'using local config'</span>
                </div>
              </td>
              <td align="right"></td>
              <td align="right">tmd01</td>
              <td align="right">
                <a target="_blank" class="hasTooltip" href="http://192.168.1.110/">
                <div class="ip_address c88">
                  192.168.1.110
                </div><span>stratumproxy enabled<br>
                proxywallet ...6c<br>
                proxypool1 eth-eu1.nanopool.org:9999<br>
                proxypool2 pool-usa.ethosdistro.com:5001<br></span></a>
              </td>
              <td align="right">
                <a class="hasTooltip">
                <div class="c14">
                  m2
                </div><span>May 30 2018 11:19:58 UTC<br>
                0 days, 0 hours, 1 mins, 44 sec</span></a>
              </td>
              <td align="right">
                <a class="hasTooltip">
                <div class="c14">
                  d6
                </div><span>May 23 2018 23:57:46 UTC<br>
                6 days, 11 hours, 23 mins, 56 sec</span></a>
              </td>
              <td align="right">
                <a class="hasTooltip">
                <div class="c14">
                  d6
                </div><span>May 23 2018 23:58:47 UTC<br>
                6 days, 11 hours, 22 mins, 55 sec</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=e6e481&amp;type=load_rx_tx&amp;panel=6af48c"><span class="c16">0.6</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=e6e481&amp;type=load_rx_tx&amp;panel=6af48c"><span class="c36">0.3</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=e6e481&amp;type=load_rx_tx&amp;panel=6af48c"><span class="c89">1.5</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=e6e481&amp;type=cpu_temp&amp;panel=6af48c"><span class="c90">50</span></a>
              </td>
              <td align="right">4</td>
              <td align="right"><span class="c20">4</span></td>
              <td align="right">
                <a href="/graphs/?rig=e6e481&amp;type=hash&amp;panel=6af48c">146</a>
              </td>
              <td align="right">
                <a class="hasTooltip c23" href="/graphs/?rig=e6e481&amp;type=miner_hashes&amp;panel=6af48c">
                <div class="c21">
                  24
                </div>
                <div class="c21">
                  24
                </div>
                <div class="c21">
                  24
                </div>
                <div class="c21">
                  24
                </div>
                <div class="c21">
                  24
                </div>
                <div class="c21">
                  24
                </div>
                <div class="c21">
                  <span>24.35</span>
                </div>
                <div class="c21">
                  <span>24.35</span>
                </div>
                <div class="c21">
                  <span>24.33</span>
                </div>
                <div class="c21">
                  <span>24.35</span>
                </div>
                <div class="c21">
                  <span>24.34</span>
                </div>
                <div class="c21">
                  <span>24.35</span>
                </div></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=e6e481&amp;type=temp&amp;panel=6af48c">
                <div class="c41">
                  67
                </div>
                <div class="c25">
                  69
                </div>
                <div class="c53">
                  68
                </div>
                <div class="c62">
                  66
                </div>
                <div class="c40">
                  65
                </div>
                <div class="c77">
                  59
                </div></a>
              </td>
              <td align="right">
                <a href="#" class="hasTooltip">
                <div class="c66">
                  5
                </div>
                <div class="c66">
                  5
                </div>
                <div class="c66">
                  5
                </div>
                <div class="c66">
                  5
                </div>
                <div class="c66">
                  5
                </div>
                <div class="c66">
                  5
                </div>
                <div class="c66">
                  <span>5</span>
                </div>
                <div class="c66">
                  <span>5</span>
                </div>
                <div class="c66">
                  <span>5</span>
                </div>
                <div class="c66">
                  <span>5</span>
                </div>
                <div class="c66">
                  <span>5</span>
                </div>
                <div class="c66">
                  <span>5</span>
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=e6e481&amp;type=voltage&amp;panel=6af48c">
                <div class="c67">
                  1.07
                </div>
                <div class="c29">
                  1.08
                </div>
                <div class="c67">
                  1.07
                </div>
                <div class="c91">
                  1.09
                </div>
                <div class="c78">
                  1.10
                </div>
                <div class="c67">
                  1.07
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=e6e481&amp;type=watts&amp;panel=6af48c">
                <div class="c30"></div>
                <div class="c30"></div>(default)<br>
                <div class="c30"></div>(minimum)<br>
                <div class="c30"></div>(maximum)</a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=e6e481&amp;type=fanrpm&amp;panel=6af48c">
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div><span>percents: 84 84 84 84 84 84<br>
                k-rpms:</span>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=e6e481&amp;type=core&amp;panel=6af48c">
                <div class="c92">
                  1.18
                </div>
                <div class="c93">
                  1.19
                </div>
                <div class="c94">
                  1.18
                </div>
                <div class="c94">
                  1.18
                </div>
                <div class="c79">
                  1.18
                </div>
                <div class="c95">
                  1.18
                </div>
                <div class="c33">
                  <span>1.30</span>
                </div>
                <div class="c33">
                  <span>1.30</span>
                </div>
                <div class="c33">
                  <span>1.30</span>
                </div>
                <div class="c33">
                  <span>1.30</span>
                </div>
                <div class="c33">
                  <span>1.30</span>
                </div>
                <div class="c33">
                  <span>1.30</span>
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=e6e481&amp;type=mem&amp;panel=6af48c">
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div></a>
              </td>
            </tr>
            <tr>
              <td class="c2" align="left"><span class="blink c4">1.2.9</span></td>
              <td align="left"><span class="c5">A</span></td>
              <td align="left">
                <a class="hasTooltip">
                <div class="c6">
                  cl
                </div><span>claymore v10.2</span></a>
              </td>
              <td align="left">
                <a href="#" class="hasTooltip c8">
                <div class="c7">
                  6/6
                </div><span>4gb · 01 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · polaris10<br>
                4gb · 02 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · polaris10<br>
                4gb · 05 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · polaris10<br>
                4gb · 06 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · polaris10<br>
                4gb · 09 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · polaris10<br>
                4gb · 0a ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · polaris10</span></a>
              </td>
              <td align="left">
                <div class="c10">
                  <a href="#" class="hasTooltip c34">66f273<span>129.7 hash: miner active<br>
                  990FXA-UD3 R5 ()<br>
                  SSD SATAIII 16GB i<br>
                  Realtek Semiconductor Co., Ltd. RTL8111/8168/8411 PCI Express Gigabit Ethernet Controller (rev 0c)<br>
                  4.8.17-ethos49<br>
                  AMD Sempron(tm) 145 Processor</span></a>
                </div>
                <div class="hasTooltip c12">
                  <div class="c11">
                    L
                  </div><span>(R) for 'remote config enabled' and (L) for 'using local config'</span>
                </div>
              </td>
              <td align="right"></td>
              <td align="right">tmd02</td>
              <td align="right">
                <a target="_blank" class="hasTooltip" href="http://192.168.1.108/">
                <div class="ip_address c88">
                  192.168.1.108
                </div><span>stratumproxy enabled<br>
                proxywallet ...6c<br>
                proxypool1 eth-eu1.nanopool.org:9999<br>
                proxypool2 pool-usa.ethosdistro.com:5001<br></span></a>
              </td>
              <td align="right">
                <a class="hasTooltip">
                <div class="c14">
                  s67
                </div><span>May 30 2018 11:20:35 UTC<br>
                0 days, 0 hours, 1 mins, 7 sec</span></a>
              </td>
              <td align="right">
                <a class="hasTooltip">
                <div class="c14">
                  d40
                </div><span>Apr 19 2018 14:50:07 UTC<br>
                40 days, 20 hours, 31 mins, 35 sec</span></a>
              </td>
              <td align="right">
                <a class="hasTooltip">
                <div class="c14">
                  d40
                </div><span>Apr 19 2018 14:51:03 UTC<br>
                40 days, 20 hours, 30 mins, 39 sec</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=66f273&amp;type=load_rx_tx&amp;panel=6af48c"><span class="c16">0.6</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=66f273&amp;type=load_rx_tx&amp;panel=6af48c"><span class="c36">0.3</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=66f273&amp;type=load_rx_tx&amp;panel=6af48c"><span class="c96">0.7</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=66f273&amp;type=cpu_temp&amp;panel=6af48c"><span class="c97">55</span></a>
              </td>
              <td align="right">2</td>
              <td align="right"><span class="c20">4</span></td>
              <td align="right">
                <a href="/graphs/?rig=66f273&amp;type=hash&amp;panel=6af48c">129</a>
              </td>
              <td align="right">
                <a class="hasTooltip c23" href="/graphs/?rig=66f273&amp;type=miner_hashes&amp;panel=6af48c">
                <div class="c21">
                  22
                </div>
                <div class="c98">
                  20
                </div>
                <div class="c21">
                  22
                </div>
                <div class="c21">
                  22
                </div>
                <div class="c21">
                  22
                </div>
                <div class="c21">
                  22
                </div>
                <div class="c21">
                  <span>21.78</span>
                </div>
                <div class="c98">
                  <span>20.27</span>
                </div>
                <div class="c21">
                  <span>21.77</span>
                </div>
                <div class="c21">
                  <span>21.79</span>
                </div>
                <div class="c21">
                  <span>21.78</span>
                </div>
                <div class="c21">
                  <span>21.78</span>
                </div></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=66f273&amp;type=temp&amp;panel=6af48c">
                <div class="c63">
                  63
                </div>
                <div class="c63">
                  63
                </div>
                <div class="c63">
                  63
                </div>
                <div class="c99">
                  56
                </div>
                <div class="c52">
                  64
                </div>
                <div class="c41">
                  67
                </div></a>
              </td>
              <td align="right">
                <a href="#" class="hasTooltip">
                <div class="c66">
                  5
                </div>
                <div class="c66">
                  5
                </div>
                <div class="c66">
                  5
                </div>
                <div class="c66">
                  5
                </div>
                <div class="c66">
                  5
                </div>
                <div class="c66">
                  5
                </div>
                <div class="c66">
                  <span>5</span>
                </div>
                <div class="c66">
                  <span>5</span>
                </div>
                <div class="c66">
                  <span>5</span>
                </div>
                <div class="c66">
                  <span>5</span>
                </div>
                <div class="c66">
                  <span>5</span>
                </div>
                <div class="c66">
                  <span>5</span>
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=66f273&amp;type=voltage&amp;panel=6af48c">
                <div class="c28">
                  1.06
                </div>
                <div class="c67">
                  1.07
                </div>
                <div class="c58">
                  1.03
                </div>
                <div class="c43">
                  1.04
                </div>
                <div class="c100">
                  1.05
                </div>
                <div class="c45">
                  1.02
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=66f273&amp;type=watts&amp;panel=6af48c">
                <div class="c30"></div>
                <div class="c30"></div>(default)<br>
                <div class="c30"></div>(minimum)<br>
                <div class="c30"></div>(maximum)</a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=66f273&amp;type=fanrpm&amp;panel=6af48c">
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div><span>percents: 84 84 84 84 84 84<br>
                k-rpms:</span>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=66f273&amp;type=core&amp;panel=6af48c">
                <div class="c87">
                  1.20
                </div>
                <div class="c87">
                  1.20
                </div>
                <div class="c87">
                  1.20
                </div>
                <div class="c87">
                  1.20
                </div>
                <div class="c87">
                  1.20
                </div>
                <div class="c87">
                  1.20
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=66f273&amp;type=mem&amp;panel=6af48c">
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div></a>
              </td>
            </tr>
            <tr>
              <td class="c2" align="left"><span class="blink c4">1.2.9</span></td>
              <td align="left"><span class="c5">A</span></td>
              <td align="left">
                <a class="hasTooltip">
                <div class="c6">
                  cl
                </div><span>claymore v10.2</span></a>
              </td>
              <td align="left">
                <a href="#" class="hasTooltip c8">
                <div class="c7">
                  6/6
                </div><span>4gb · 01 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · polaris10<br>
                4gb · 02 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · polaris10<br>
                4gb · 05 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · polaris10<br>
                4gb · 06 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · polaris10<br>
                4gb · 09 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · polaris10<br>
                4gb · 0a ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) · polaris10</span></a>
              </td>
              <td align="left">
                <div class="c10">
                  <a href="#" class="hasTooltip c34">e11f03<span>130.6 hash: miner active<br>
                  990FXA-UD3 R5 ()<br>
                  Cruzer Glide 200426057207BE514FAD<br>
                  Realtek Semiconductor Co., Ltd. RTL8111/8168/8411 PCI Express Gigabit Ethernet Controller (rev 0c)<br>
                  4.8.17-ethos49<br>
                  1 x AMD Sempron(tm) 145 Processor</span></a>
                </div>
                <div class="hasTooltip c12">
                  <div class="c11">
                    L
                  </div><span>(R) for 'remote config enabled' and (L) for 'using local config'</span>
                </div>
              </td>
              <td align="right"></td>
              <td align="right">tmd03</td>
              <td align="right">
                <a target="_blank" class="hasTooltip" href="http://192.168.1.107/">
                <div class="ip_address c88">
                  192.168.1.107
                </div><span>stratumproxy enabled<br>
                proxywallet ...6c<br>
                proxypool1 eth-eu1.nanopool.org:9999<br>
                proxypool2 pool-usa.ethosdistro.com:5001<br></span></a>
              </td>
              <td align="right">
                <a class="hasTooltip">
                <div class="c14">
                  s33
                </div><span>May 30 2018 11:21:09 UTC<br>
                0 days, 0 hours, 0 mins, 33 sec</span></a>
              </td>
              <td align="right">
                <a class="hasTooltip">
                <div class="c14">
                  d40
                </div><span>Apr 19 2018 14:48:49 UTC<br>
                40 days, 20 hours, 32 mins, 53 sec</span></a>
              </td>
              <td align="right">
                <a class="hasTooltip">
                <div class="c14">
                  d40
                </div><span>Apr 19 2018 14:50:18 UTC<br>
                40 days, 20 hours, 31 mins, 24 sec</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=e11f03&amp;type=load_rx_tx&amp;panel=6af48c"><span class="c16">0.6</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=e11f03&amp;type=load_rx_tx&amp;panel=6af48c"><span class="c36">0.3</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=e11f03&amp;type=load_rx_tx&amp;panel=6af48c"><span class="c101">0.4</span></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=e11f03&amp;type=cpu_temp&amp;panel=6af48c"><span class="c102">76</span></a>
              </td>
              <td align="right">4</td>
              <td align="right"><span class="c20">4</span></td>
              <td align="right">
                <a href="/graphs/?rig=e11f03&amp;type=hash&amp;panel=6af48c">131</a>
              </td>
              <td align="right">
                <a class="hasTooltip c23" href="/graphs/?rig=e11f03&amp;type=miner_hashes&amp;panel=6af48c">
                <div class="c21">
                  22
                </div>
                <div class="c21">
                  22
                </div>
                <div class="c21">
                  22
                </div>
                <div class="c21">
                  22
                </div>
                <div class="c21">
                  22
                </div>
                <div class="c21">
                  22
                </div>
                <div class="c21">
                  <span>21.76</span>
                </div>
                <div class="c21">
                  <span>21.75</span>
                </div>
                <div class="c21">
                  <span>21.76</span>
                </div>
                <div class="c21">
                  <span>21.76</span>
                </div>
                <div class="c21">
                  <span>21.76</span>
                </div>
                <div class="c21">
                  <span>21.77</span>
                </div></a>
              </td>
              <td align="right">
                <a href="/graphs/?rig=e11f03&amp;type=temp&amp;panel=6af48c">
                <div class="c86">
                  75
                </div>
                <div class="c65">
                  70
                </div>
                <div class="c53">
                  68
                </div>
                <div class="c40">
                  65
                </div>
                <div class="c25">
                  69
                </div>
                <div class="c65">
                  70
                </div></a>
              </td>
              <td align="right">
                <a href="#" class="hasTooltip">
                <div class="c66">
                  5
                </div>
                <div class="c66">
                  5
                </div>
                <div class="c66">
                  5
                </div>
                <div class="c66">
                  5
                </div>
                <div class="c66">
                  5
                </div>
                <div class="c66">
                  5
                </div>
                <div class="c66">
                  <span>5</span>
                </div>
                <div class="c66">
                  <span>5</span>
                </div>
                <div class="c66">
                  <span>5</span>
                </div>
                <div class="c66">
                  <span>5</span>
                </div>
                <div class="c66">
                  <span>5</span>
                </div>
                <div class="c66">
                  <span>5</span>
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=e11f03&amp;type=voltage&amp;panel=6af48c">
                <div class="c58">
                  1.03
                </div>
                <div class="c103">
                  1.12
                </div>
                <div class="c67">
                  1.07
                </div>
                <div class="c103">
                  1.12
                </div>
                <div class="c100">
                  1.05
                </div>
                <div class="c91">
                  1.09
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=e11f03&amp;type=watts&amp;panel=6af48c">
                <div class="c30"></div>
                <div class="c30"></div>(default)<br>
                <div class="c30"></div>(minimum)<br>
                <div class="c30"></div>(maximum)</a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=e11f03&amp;type=fanrpm&amp;panel=6af48c">
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div>
                <div class="c31">
                  4
                </div><span>percents: 84 84 84 84 84 84<br>
                k-rpms:</span>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div>
                <div class="c31">
                  <span>3.8</span>
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=e11f03&amp;type=core&amp;panel=6af48c">
                <div class="c87">
                  1.20
                </div>
                <div class="c87">
                  1.20
                </div>
                <div class="c87">
                  1.20
                </div>
                <div class="c87">
                  1.20
                </div>
                <div class="c87">
                  1.20
                </div>
                <div class="c87">
                  1.20
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div>
                <div class="c47">
                  <span>1.29</span>
                </div></a>
              </td>
              <td align="right">
                <a class="hasTooltip" href="/graphs/?rig=e11f03&amp;type=mem&amp;panel=6af48c">
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  1.75
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div>
                <div class="c33">
                  <span>1.75</span>
                </div></a>
              </td>
            </tr>
          </table>
        </div>
      </caption>
    </table>
  </div>
</body>
</html>
