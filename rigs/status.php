<!DOCTYPE html> <html lang="en">    <head>
    <meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6af48c ethOS</title>
    <link href="/assets/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet"><link href="/assets/css/tablecloth.css" rel="stylesheet">
    <link href="/assets/css/prettify.css" rel="stylesheet"> <link rel="icon" type="image/png" href="/favicon.png">
	<style>td{ white-space: nowrap; word-spacing: -0.5px; letter-spacing: -0.2px}
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
</style><script src="/assets/js/jquery-3.1.1.min.js"></script>
    <script src="/assets/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery.metadata.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.4/js/jquery.tablesorter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.4/js/parsers/parser-network.min.js"></script>
    <script src="/assets/js/jquery.tablecloth.js"></script>
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



</head><body><div class="container" style="width: 99%">
      <div class="row" style="width: 100%">
        <div class="span12" style="width: 100%">
          <table cellspacing="1" cellpadding="3" class="tablehead" style="background:#CCC; width:100%; margin-bottom: 0px;">
                <caption>
                <div><div style="float:left"><table style="width: 300px; margin-bottom:0px;">
                        <tr>
				<td> 
<a href="/?night=yes" title="save">night mode</a></td>
                                <td><a href="http://ethosdistro.com/graphs/global.php?panel=6af48c&type=all_gpus">57/57 gpus</a> 100.0% </td>
				<td><a href="http://ethosdistro.com/graphs/global.php?panel=6af48c&type=avg_temp"><div style="color: hsl(97.01, 100%, 30%);; display:inline">67.88</div> avg temp (C)</a></td>
				 <td>May 30 2018 11:21:42 UTC</td>
				<td><a href="http://mining.gpushack.com/">gpuShack</a> &middot; <a href="http://ethosdistro.com/kb/">Support</a> &middot; <a href="http://ethosdistro.com/">ethOS</a>
			

                        </tr>
                        <tr>
				<td> <a href="/" title="save">day mode</a></td>
                                <td>10/10 rigs </td>

                                <td><a class="hasTooltip" href="http://ethosdistro.com/graphs/global.php?panel=6af48c&type=all_hash">1280.6 total hash<span><br /><table><tr>
			<td><b>miner</b></td>
			<td><b>hash</b></td>
			<td><b>up GPUs</b></td>
			<td><b>GPUs</b></td>
                        <td><b>up rigs</b></td>
                        <td><b>rigs</b></td>
			<td><b>hash/GPU</b></td>
			<td><b>hash/rig</b></td>
	
		</tr><tr>
				<td>claymore</td>
				<td align="right">1281</td>
				<td align="right">57</td>
				<td align="right">57</td>
                                <td align="right">10</td>
                                <td align="right">10</td>
				<td align="right">22.5</td>
                                <td align="right">128.1</td>

			</tr></table></span></a></td>
<td>Latest Version: 1.3.1</td>
				<td><a href="http://6af48c.ethosdistro.com/?json=yes">API</a> &middot; <a href="http://6af48c.ethosdistro.com/?ailments=mining">Ailments</a> &middot; <a href="http://6af48c.ethosdistro.com/?search=192.168">IP Search</a> &middot; <a href="http://6af48c.ethosdistro.com/?ips=yes">IPs</a> &middot; <a href="http://6af48c.ethosdistro.com/?bios=yes">GPU bioses</td>
                        </tr> 

	
	

        </div><thead><tr class="colhead"><th align="left" class="headerSortable" style="font-weight: normal"><a href="#" class="hasTooltip">V<span>ethOS version and running miner</span></a></th>
<th align="left" class="headerSortable" style="font-weight: normal"><a href="#" class="hasTooltip">D<span>GPU Driver</span></a></th>
<th align="left" class="headerSortable" style="font-weight: normal"><a href="#" class="hasTooltip">M<span>current running miner</span></a></th>
<th align="left" class="headerSortable" style="font-weight: normal"><a href="#" class="hasTooltip">G<span>live GPUs / detected GPUs, hover to get GPU model names</span></a></th>
<th align="left" class="headerSortable" style="font-weight: normal"><a href="#" class="hasTooltip">name<span>rig name, (R) for 'remote config enabled' and (L) for 'using local config', hover over for more info</span></a></th>
<th align="right" class="headerSortable" style="font-weight: normal"><a href="#" class="hasTooltip">a<span>ailment, condition, event that affects rig, hover over for more info</span></a></th>
<th align="right" class="headerSortable" style="font-weight: normal"><a href="#" class="hasTooltip">loc<span>location of rig, check ethosdistro.com/pool.txt for sample config</span></a></th>
<th align="right" class="headerSortable" style="font-weight: normal"><a href="#" class="hasTooltip">rig admin<span>rig IP address and admin terminal, IP will be odd color if pool info is different, hover over to see local pool info</span></a></th>
<th align="right" class="headerSortable" style="font-weight: normal"><a href="#" class="hasTooltip">p<span>elapsed time since rig lasted pinged your stats panel (last reachable)</span></a></th>
<th align="right" class="headerSortable" style="font-weight: normal"><a href="#" class="hasTooltip">b<span>elapsed time since rig booted (rig uptime)</span></a></th>
<th align="right" class="headerSortable" style="font-weight: normal"><a href="#" class="hasTooltip">m<span>elapsed time since miner has started (running miner)</span></a></th>
<th align="right" class="headerSortable" style="font-weight: normal"><a href="#" class="hasTooltip">rx<span>10 minute average of kbps received by rig (may indicate rig compromise if value is very high and rig port is open)</span></a></th>
<th align="right" class="headerSortable" style="font-weight: normal"><a href="#" class="hasTooltip">tx<span>10 minute average of kbps send by rig (may indicate rig compromise if value is very high and rig port is open)</span></a></th>
<th align="right" class="headerSortable" style="font-weight: normal"><a href="#" class="hasTooltip">L<span>5 minute load average (sysload)</span></a></th>
<th align="right" class="headerSortable" style="font-weight: normal"><a href="#" class="hasTooltip">C<span>cpu temperature (in C)</span></a></th>
<th align="right" class="headerSortable" style="font-weight: normal"><a href="#" class="hasTooltip">R<span>amount of system ram (in gigabytes)</span></a></th>
<th align="right" class="headerSortable" style="font-weight: normal"><a href="#" class="hasTooltip">F<span>total free space (in gigabytes)</span></a></th>
<th align="right" class="headerSortable" style="font-weight: normal"><a href="#" class="hasTooltip">H<span>total hashrate</span></a></th>
<th align="right" class="headerSortable" style="font-weight: normal"><a href="#" class="hasTooltip">hashes<span>hashrate per GPU, hover over for more detailed hashrate, and for dualminer hashes (if enabled via ethos config)</span></a></th>
<th align="right" class="headerSortable" style="font-weight: normal"><a href="#" class="hasTooltip">temps<span>temperature of GPUs (in C), click on temps to see historical data</span></a></th>
<th align="right" class="headerSortable" style="font-weight: normal"><a href="#" class="hasTooltip">ptune<span>FGLRX = powertune, AMDGPU = dpm state, NVIDIA = performance level state, hover to see gpu voltages</span></a></th>
<th align="right" class="headerSortable" style="font-weight: normal"><a href="#" class="hasTooltip">volts<span>gpu volts (currently only available for FGLRX and AMDGPU)</span></a></th>
<th align="right" class="headerSortable" style="font-weight: normal"><a href="#" class="hasTooltip">watts<span>gpu estimated watts (currently only available for NVIDIA and AMDGPU)</span></a></th>
<th align="right" class="headerSortable" style="font-weight: normal"><a href="#" class="hasTooltip">fans<span>GPU fan rpms (in K-rpm), click on fan rpms to see historical data, hover to see percents</span></a></th>
<th align="right" class="headerSortable" style="font-weight: normal"><a href="#" class="hasTooltip">core<span>gpu core clocks (in ghz), hover to get default GPU core clocks</span></a></th>
<th align="right" class="headerSortable" style="font-weight: normal"><a href="#" class="hasTooltip">mem<span>gpu memory clocks (in ghz), hover to get default GPU mem clocks</span></a></th>
</tr></thead><td align="left"><b><span style="color: #c00;" class="blink">1.2.5</span></b></td>
<td align="left"><span style="color: #009">A</span></td>
<td align="left"><a class="hasTooltip"><div style="display: inline; color: hsl(162, 93%, 21%)">cl</div><span>claymore v10.2</span></a></td>
<td align="left"><a href="#" class="hasTooltip" style="color:black"><div style=" display:inline; color: hsl(100, 100%, 25%);">5/5</div><span>4gb &middot; 01 ellesmere rx 480 115-d000pi0-100 samsung (115-d000pi0-100) &middot; polaris10<br />4gb &middot; 02 ellesmere rx 480 115-d000pi0-100 samsung (115-d000pi0-100) &middot; polaris10<br />4gb &middot; 03 ellesmere rx 480 115-d000pi0-100 samsung (115-d000pi0-100) &middot; polaris10<br />4gb &middot; 04 ellesmere rx 480 115-d000pi0-100 samsung (115-d000pi0-100) &middot; polaris10<br />4gb &middot; 05 ellesmere rx 480 115-d000pi0-100 samsung (115-d000pi0-100) &middot; polaris10</span></a></td>
<td align="left"><div style="display:inline; font-family: monospace;">
                                        <a href="#" class="hasTooltip" style="color: hsl(101, 87%, 21%); text-decoration: none">e6e8e5<span>121.5 hash: miner active<br />TB85 ()<br />USB Flash Drive 4C530001061126103263<br />Realtek Semiconductor Co., Ltd. RTL8111/8168/8411 PCI Express Gigabit Ethernet Controller (rev 0c)<br />4.8.17-ethos49<br />Intel(R) Celeron(R) CPU G1840 @ 2.80GHz<br />
Intel(R) Celeron(R) CPU G1840 @ 2.80GHz</span></div><div class="hasTooltip" style="display:inline;font-family: monospace; color: #000"> <div style="display:inline; color: #000">R</div><span>(R) for 'remote config enabled' and (L) for 'using local config'</span></div></td>
<td align="right"></td>
<td align="right">eld01</td>
<td align="right"><a target=_blank class="hasTooltip" href="http://192.168.1.101/">
						<div style="text-decoration: underline; display:inline; color: hsl(149, 93%, 23%)" class="ip_address">
						192.168.1.101</div>
						<span>stratumproxy enabled<br />
proxywallet ...F0<br />
proxypool1 pool-usa.ethosdistro.com:5001<br />
proxypool2 pool-eu.ethosdistro.com:5001<br />
</span>
						</a></td>
<td align="right"><a class="hasTooltip"><div style="display: inline; color: #00a">m2</div><span>May 30 2018 11:19:59 UTC<br />0 days, 0 hours, 1 mins, 43 sec</span></a></td>
<td align="right"><a class="hasTooltip"><div style="display: inline; color: #090">h44</div><span>May 28 2018 14:32:04 UTC<br />1 days, 20 hours, 49 mins, 38 sec</span></a></td>
<td align="right"><a class="hasTooltip"><div style="display: inline; color: #090">h44</div><span>May 28 2018 14:33:15 UTC<br />1 days, 20 hours, 48 mins, 27 sec</span></a></td>
<td align="right"><a href="/graphs/?rig=e6e8e5&type=load_rx_tx&panel=6af48c"><span style="color: hsl(241, 100%, 30%);">0.5</span></a></td>
<td align="right"><a href="/graphs/?rig=e6e8e5&type=load_rx_tx&panel=6af48c"><span style="color: hsl(249, 100%, 30%);">0.2</span></a></td>
<td align="right"><a href="/graphs/?rig=e6e8e5&type=load_rx_tx&panel=6af48c"><span style="color: hsl(237, 100%, 30%);">0.3</span></a></td>
<td align="right"><a href="/graphs/?rig=e6e8e5&type=cpu_temp&panel=6af48c"><span style="color: hsl(127, 100%, 30%);">45</span></a></td>
<td align="right">4</td>
<td align="right"><span style="color: hsl(255, 100%, 30%);">4</span></td>
<td align="right"><a href="/graphs/?rig=e6e8e5&type=hash&panel=6af48c">121</a></td>
<td align="right">
					<a class="hasTooltip" align="left" href="/graphs/?rig=e6e8e5&type=miner_hashes&panel=6af48c">
				<div style="color: hsl(225, 100%, 25%);; display:inline">24</div> <div style="color: hsl(225, 100%, 25%);; display:inline">24</div> <div style="color: hsl(225, 100%, 25%);; display:inline">24</div> <div style="color: hsl(225, 100%, 25%);; display:inline">24</div> <div style="color: hsl(222, 100%, 25%);; display:inline">24</div>
					<span><div style="color: hsl(225, 100%, 25%);; display:inline">24.34</div> <div style="color: hsl(225, 100%, 25%);; display:inline">24.34</div> <div style="color: hsl(225, 100%, 25%);; display:inline">24.33</div> <div style="color: hsl(225, 100%, 25%);; display:inline">24.34</div> <div style="color: hsl(222, 100%, 25%);; display:inline">24.12</div></span></a></td>
<td align="right"><a href="/graphs/?rig=e6e8e5&type=temp&panel=6af48c"><div style="color: hsl(79, 100%, 30%);; display:inline">71</div> <div style="color: hsl(79, 100%, 30%);; display:inline">71</div> <div style="color: hsl(91, 100%, 30%);; display:inline">69</div> <div style="color: hsl(91, 100%, 30%);; display:inline">69</div> <div style="color: hsl(79, 100%, 30%);; display:inline">71</div> </a></td>
<td align="right"><a href="#" class="hasTooltip"><div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <span><div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <div style="display:inline; color: hsl(20, 100%, 30%);">4</div> </span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=e6e8e5&type=voltage&panel=6af48c"><div style="display:inline; color: hsl(158, 100%, 30%);">0.99</div> <div style="display:inline; color: hsl(122, 100%, 30%);">1.06</div> <div style="display:inline; color: hsl(158, 100%, 30%);">0.99</div> <div style="display:inline; color: hsl(158, 100%, 30%);">0.99</div> <div style="display:inline; color: hsl(112, 100%, 30%);">1.08</div> </a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=e6e8e5&type=watts&panel=6af48c">
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div> <span align="left">
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div>  (default)
				<br />
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div>  (minimum)
				<br />
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div>  (maximum)
				</span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=e6e8e5&type=fanrpm&panel=6af48c"><div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <span>percents: 84 84 84 84 84<br />k-rpms: <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> </span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=e6e8e5&type=core&panel=6af48c"><div style="color: hsl(239, 100%, 30%);; display:inline">1.18</div> <div style="color: hsl(239, 100%, 30%);; display:inline">1.18</div> <div style="color: hsl(239, 100%, 30%);; display:inline">1.18</div> <div style="color: hsl(239, 100%, 30%);; display:inline">1.18</div> <div style="color: hsl(239, 100%, 30%);; display:inline">1.18</div> <span><div style="color: hsl(319, 100%, 30%);; display:inline">1.30</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.30</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.30</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.30</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.30</div> </span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=e6e8e5&type=mem&panel=6af48c"><div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <span><div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> </span></a></td>
</tr><td align="left"><b><span style="color: #c00;" class="blink">1.2.5</span></b></td>
<td align="left"><span style="color: #009">A</span></td>
<td align="left"><a class="hasTooltip"><div style="display: inline; color: hsl(162, 93%, 21%)">cl</div><span>claymore v9.8</span></a></td>
<td align="left"><a href="#" class="hasTooltip" style="color:black"><div style=" display:inline; color: hsl(100, 100%, 25%);">5/5</div><span>4gb &middot; 01 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; h5gc4h24ajr<br />4gb &middot; 02 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; h5gc4h24ajr<br />4gb &middot; 05 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; h5gc4h24ajr<br />4gb &middot; 08 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; h5gc4h24ajr<br />4gb &middot; 09 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; h5gc4h24ajr</span></a></td>
<td align="left"><div style="display:inline; font-family: monospace;">
                                        <a href="#" class="hasTooltip" style="color: hsl(34, 89%, 22%); text-decoration: none">699203<span>108.8 hash: miner active<br />990FXA-UD3 R5 ()<br />Ultra Fit 4C530001020223118520<br />Realtek Semiconductor Co., Ltd. RTL8111/8168/8411 PCI Express Gigabit Ethernet Controller (rev 0c)<br />4.8.17-ethos49<br />AMD Sempron(tm) 145 Processor</span></div><div class="hasTooltip" style="display:inline;font-family: monospace; color: #000"> <div style="display:inline; color: #000">R</div><span>(R) for 'remote config enabled' and (L) for 'using local config'</span></div></td>
<td align="right"></td>
<td align="right">eld02</td>
<td align="right"><a target=_blank class="hasTooltip" href="http://192.168.1.102/">
						<div style="text-decoration: underline; display:inline; color: hsl(149, 93%, 23%)" class="ip_address">
						192.168.1.102</div>
						<span>stratumproxy enabled<br />
proxywallet ...F0<br />
proxypool1 pool-usa.ethosdistro.com:5001<br />
proxypool2 pool-eu.ethosdistro.com:5001<br />
</span>
						</a></td>
<td align="right"><a class="hasTooltip"><div style="display: inline; color: #00a">s74</div><span>May 30 2018 11:20:28 UTC<br />0 days, 0 hours, 1 mins, 14 sec</span></a></td>
<td align="right"><a class="hasTooltip"><div style="display: inline; color: #00a">d24</div><span>May 05 2018 11:46:30 UTC<br />24 days, 23 hours, 35 mins, 12 sec</span></a></td>
<td align="right"><a class="hasTooltip"><div style="display: inline; color: #00a">d24</div><span>May 05 2018 11:47:27 UTC<br />24 days, 23 hours, 34 mins, 15 sec</span></a></td>
<td align="right"><a href="/graphs/?rig=699203&type=load_rx_tx&panel=6af48c"><span style="color: hsl(240, 100%, 30%);">0.6</span></a></td>
<td align="right"><a href="/graphs/?rig=699203&type=load_rx_tx&panel=6af48c"><span style="color: hsl(246, 100%, 30%);">0.4</span></a></td>
<td align="right"><a href="/graphs/?rig=699203&type=load_rx_tx&panel=6af48c"><span style="color: hsl(221, 100%, 30%);">0.5</span></a></td>
<td align="right"><a href="/graphs/?rig=699203&type=cpu_temp&panel=6af48c"><span style="color: hsl(112, 100%, 30%);">48</span></a></td>
<td align="right">4</td>
<td align="right"><span style="color: hsl(217, 100%, 30%);">3</span></td>
<td align="right"><a href="/graphs/?rig=699203&type=hash&panel=6af48c">109</a></td>
<td align="right">
					<a class="hasTooltip" align="left" href="/graphs/?rig=699203&type=miner_hashes&panel=6af48c">
				<div style="color: hsl(225, 100%, 25%);; display:inline">22</div> <div style="color: hsl(225, 100%, 25%);; display:inline">22</div> <div style="color: hsl(225, 100%, 25%);; display:inline">22</div> <div style="color: hsl(225, 100%, 25%);; display:inline">22</div> <div style="color: hsl(225, 100%, 25%);; display:inline">22</div>
					<span><div style="color: hsl(225, 100%, 25%);; display:inline">21.77</div> <div style="color: hsl(225, 100%, 25%);; display:inline">21.76</div> <div style="color: hsl(225, 100%, 25%);; display:inline">21.78</div> <div style="color: hsl(225, 100%, 25%);; display:inline">21.76</div> <div style="color: hsl(225, 100%, 25%);; display:inline">21.76</div></span></a></td>
<td align="right"><a href="/graphs/?rig=699203&type=temp&panel=6af48c"><div style="color: hsl(91, 100%, 30%);; display:inline">69</div> <div style="color: hsl(113, 100%, 30%);; display:inline">65</div> <div style="color: hsl(79, 100%, 30%);; display:inline">71</div> <div style="color: hsl(102, 100%, 30%);; display:inline">67</div> <div style="color: hsl(74, 100%, 30%);; display:inline">72</div> </a></td>
<td align="right"><a href="#" class="hasTooltip"><div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <span><div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <div style="display:inline; color: hsl(20, 100%, 30%);">4</div> </span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=699203&type=voltage&panel=6af48c"><div style="display:inline; color: hsl(158, 100%, 30%);">0.99</div> <div style="display:inline; color: hsl(133, 100%, 30%);">1.04</div> <div style="display:inline; color: hsl(153, 100%, 30%);">1.00</div> <div style="display:inline; color: hsl(143, 100%, 30%);">1.02</div> <div style="display:inline; color: hsl(158, 100%, 30%);">0.99</div> </a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=699203&type=watts&panel=6af48c">
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div> <span align="left">
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div>  (default)
				<br />
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div>  (minimum)
				<br />
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div>  (maximum)
				</span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=699203&type=fanrpm&panel=6af48c"><div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <span>percents: 84 84 84 84 84<br />k-rpms: <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> </span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=699203&type=core&panel=6af48c"><div style="color: hsl(220, 100%, 30%);; display:inline">1.15</div> <div style="color: hsl(220, 100%, 30%);; display:inline">1.15</div> <div style="color: hsl(220, 100%, 30%);; display:inline">1.15</div> <div style="color: hsl(220, 100%, 30%);; display:inline">1.15</div> <div style="color: hsl(220, 100%, 30%);; display:inline">1.15</div> <span><div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> <div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> <div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> <div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> <div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> </span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=699203&type=mem&panel=6af48c"><div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <span><div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> </span></a></td>
</tr><td align="left"><b><span style="color: #c00;" class="blink">1.2.5</span></b></td>
<td align="left"><span style="color: #009">A</span></td>
<td align="left"><a class="hasTooltip"><div style="display: inline; color: hsl(162, 93%, 21%)">cl</div><span>claymore v9.8</span></a></td>
<td align="left"><a href="#" class="hasTooltip" style="color:black"><div style=" display:inline; color: hsl(100, 100%, 25%);">6/6</div><span>4gb &middot; 01 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; h5gc4h24ajr<br />4gb &middot; 02 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; h5gc4h24ajr<br />4gb &middot; 05 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; h5gc4h24ajr<br />4gb &middot; 06 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; h5gc4h24ajr<br />4gb &middot; 09 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; h5gc4h24ajr<br />4gb &middot; 0a ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; h5gc4h24ajr</span></a></td>
<td align="left"><div style="display:inline; font-family: monospace;">
                                        <a href="#" class="hasTooltip" style="color: hsl(34, 89%, 22%); text-decoration: none">66f26b<span>130.2 hash: miner active<br />990FXA-UD3 R5 ()<br />Cruzer Glide 200426056307BE514FA9<br />Realtek Semiconductor Co., Ltd. RTL8111/8168/8411 PCI Express Gigabit Ethernet Controller (rev 0c)<br />4.8.17-ethos49<br />AMD Sempron(tm) 145 Processor</span></div><div class="hasTooltip" style="display:inline;font-family: monospace; color: #000"> <div style="display:inline; color: #000">R</div><span>(R) for 'remote config enabled' and (L) for 'using local config'</span></div></td>
<td align="right"></td>
<td align="right">eld03</td>
<td align="right"><a target=_blank class="hasTooltip" href="http://192.168.1.103/">
						<div style="text-decoration: underline; display:inline; color: hsl(149, 93%, 23%)" class="ip_address">
						192.168.1.103</div>
						<span>stratumproxy enabled<br />
proxywallet ...F0<br />
proxypool1 pool-usa.ethosdistro.com:5001<br />
proxypool2 pool-eu.ethosdistro.com:5001<br />
</span>
						</a></td>
<td align="right"><a class="hasTooltip"><div style="display: inline; color: #00a">s80</div><span>May 30 2018 11:20:22 UTC<br />0 days, 0 hours, 1 mins, 20 sec</span></a></td>
<td align="right"><a class="hasTooltip"><div style="display: inline; color: #00a">d40</div><span>Apr 19 2018 14:44:33 UTC<br />40 days, 20 hours, 37 mins, 9 sec</span></a></td>
<td align="right"><a class="hasTooltip"><div style="display: inline; color: #00a">d12</div><span>May 17 2018 22:39:22 UTC<br />12 days, 12 hours, 42 mins, 20 sec</span></a></td>
<td align="right"><a href="/graphs/?rig=66f26b&type=load_rx_tx&panel=6af48c"><span style="color: hsl(240, 100%, 30%);">0.6</span></a></td>
<td align="right"><a href="/graphs/?rig=66f26b&type=load_rx_tx&panel=6af48c"><span style="color: hsl(246, 100%, 30%);">0.3</span></a></td>
<td align="right"><a href="/graphs/?rig=66f26b&type=load_rx_tx&panel=6af48c"><span style="color: hsl(156, 100%, 30%);">1.6</span></a></td>
<td align="right"><a href="/graphs/?rig=66f26b&type=cpu_temp&panel=6af48c"><span style="color: hsl(138, 100%, 30%);">43</span></a></td>
<td align="right">4</td>
<td align="right"><span style="color: hsl(217, 100%, 30%);">3</span></td>
<td align="right"><a href="/graphs/?rig=66f26b&type=hash&panel=6af48c">130</a></td>
<td align="right">
					<a class="hasTooltip" align="left" href="/graphs/?rig=66f26b&type=miner_hashes&panel=6af48c">
				<div style="color: hsl(223, 100%, 25%);; display:inline">22</div> <div style="color: hsl(225, 100%, 25%);; display:inline">22</div> <div style="color: hsl(223, 100%, 25%);; display:inline">22</div> <div style="color: hsl(225, 100%, 25%);; display:inline">22</div> <div style="color: hsl(225, 100%, 25%);; display:inline">22</div> <div style="color: hsl(223, 100%, 25%);; display:inline">22</div>
					<span><div style="color: hsl(223, 100%, 25%);; display:inline">21.67</div> <div style="color: hsl(225, 100%, 25%);; display:inline">21.74</div> <div style="color: hsl(223, 100%, 25%);; display:inline">21.67</div> <div style="color: hsl(225, 100%, 25%);; display:inline">21.76</div> <div style="color: hsl(225, 100%, 25%);; display:inline">21.74</div> <div style="color: hsl(223, 100%, 25%);; display:inline">21.65</div></span></a></td>
<td align="right"><a href="/graphs/?rig=66f26b&type=temp&panel=6af48c"><div style="color: hsl(28, 100%, 30%);; display:inline">80</div> <div style="color: hsl(102, 100%, 30%);; display:inline">67</div> <div style="color: hsl(91, 100%, 30%);; display:inline">69</div> <div style="color: hsl(113, 100%, 30%);; display:inline">65</div> <div style="color: hsl(119, 100%, 30%);; display:inline">64</div> <div style="color: hsl(96, 100%, 30%);; display:inline">68</div> </a></td>
<td align="right"><a href="#" class="hasTooltip"><div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <span><div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <div style="display:inline; color: hsl(20, 100%, 30%);">4</div> </span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=66f26b&type=voltage&panel=6af48c"><div style="display:inline; color: hsl(148, 100%, 30%);">1.01</div> <div style="display:inline; color: hsl(133, 100%, 30%);">1.04</div> <div style="display:inline; color: hsl(143, 100%, 30%);">1.02</div> <div style="display:inline; color: hsl(148, 100%, 30%);">1.01</div> <div style="display:inline; color: hsl(143, 100%, 30%);">1.02</div> <div style="display:inline; color: hsl(158, 100%, 30%);">0.99</div> </a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=66f26b&type=watts&panel=6af48c">
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div> <span align="left">
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div>  (default)
				<br />
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div>  (minimum)
				<br />
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div>  (maximum)
				</span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=66f26b&type=fanrpm&panel=6af48c"><div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <span>percents: 84 84 84 84 84 84<br />k-rpms: <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> </span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=66f26b&type=core&panel=6af48c"><div style="color: hsl(220, 100%, 30%);; display:inline">1.15</div> <div style="color: hsl(220, 100%, 30%);; display:inline">1.15</div> <div style="color: hsl(220, 100%, 30%);; display:inline">1.15</div> <div style="color: hsl(220, 100%, 30%);; display:inline">1.15</div> <div style="color: hsl(220, 100%, 30%);; display:inline">1.15</div> <div style="color: hsl(220, 100%, 30%);; display:inline">1.15</div> <span><div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> <div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> <div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> <div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> <div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> <div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> </span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=66f26b&type=mem&panel=6af48c"><div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <span><div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> </span></a></td>
</tr><td align="left"><b><span style="color: #c00;" class="blink">1.2.5</span></b></td>
<td align="left"><span style="color: #009">A</span></td>
<td align="left"><a class="hasTooltip"><div style="display: inline; color: hsl(162, 93%, 21%)">cl</div><span>claymore v9.8</span></a></td>
<td align="left"><a href="#" class="hasTooltip" style="color:black"><div style=" display:inline; color: hsl(100, 100%, 25%);">5/5</div><span>4gb &middot; 01 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; h5gc4h24ajr<br />4gb &middot; 02 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; h5gc4h24ajr<br />4gb &middot; 05 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; h5gc4h24ajr<br />4gb &middot; 08 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; h5gc4h24ajr<br />4gb &middot; 09 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; h5gc4h24ajr</span></a></td>
<td align="left"><div style="display:inline; font-family: monospace;">
                                        <a href="#" class="hasTooltip" style="color: hsl(34, 89%, 22%); text-decoration: none">699224<span>108.9 hash: miner active<br />990FXA-UD3 R5 ()<br />Ultra Fit 4C530001150223119030<br />Realtek Semiconductor Co., Ltd. RTL8111/8168/8411 PCI Express Gigabit Ethernet Controller (rev 0c)<br />4.8.17-ethos49<br />AMD Sempron(tm) 145 Processor</span></div><div class="hasTooltip" style="display:inline;font-family: monospace; color: #000"> <div style="display:inline; color: #000">R</div><span>(R) for 'remote config enabled' and (L) for 'using local config'</span></div></td>
<td align="right"></td>
<td align="right">eld04</td>
<td align="right"><a target=_blank class="hasTooltip" href="http://192.168.1.104/">
						<div style="text-decoration: underline; display:inline; color: hsl(149, 93%, 23%)" class="ip_address">
						192.168.1.104</div>
						<span>stratumproxy enabled<br />
proxywallet ...F0<br />
proxypool1 pool-usa.ethosdistro.com:5001<br />
proxypool2 pool-eu.ethosdistro.com:5001<br />
</span>
						</a></td>
<td align="right"><a class="hasTooltip"><div style="display: inline; color: #00a">s28</div><span>May 30 2018 11:21:14 UTC<br />0 days, 0 hours, 0 mins, 28 sec</span></a></td>
<td align="right"><a class="hasTooltip"><div style="display: inline; color: #00a">d10</div><span>May 19 2018 11:43:27 UTC<br />10 days, 23 hours, 38 mins, 15 sec</span></a></td>
<td align="right"><a class="hasTooltip"><div style="display: inline; color: #00a">d4</div><span>May 25 2018 22:41:11 UTC<br />4 days, 12 hours, 40 mins, 31 sec</span></a></td>
<td align="right"><a href="/graphs/?rig=699224&type=load_rx_tx&panel=6af48c"><span style="color: hsl(240, 100%, 30%);">0.6</span></a></td>
<td align="right"><a href="/graphs/?rig=699224&type=load_rx_tx&panel=6af48c"><span style="color: hsl(246, 100%, 30%);">0.4</span></a></td>
<td align="right"><a href="/graphs/?rig=699224&type=load_rx_tx&panel=6af48c"><span style="color: hsl(221, 100%, 30%);">0.5</span></a></td>
<td align="right"><a href="/graphs/?rig=699224&type=cpu_temp&panel=6af48c"><span style="color: hsl(61, 100%, 30%);">58</span></a></td>
<td align="right">4</td>
<td align="right"><span style="color: hsl(217, 100%, 30%);">3</span></td>
<td align="right"><a href="/graphs/?rig=699224&type=hash&panel=6af48c">109</a></td>
<td align="right">
					<a class="hasTooltip" align="left" href="/graphs/?rig=699224&type=miner_hashes&panel=6af48c">
				<div style="color: hsl(224, 100%, 25%);; display:inline">22</div> <div style="color: hsl(225, 100%, 25%);; display:inline">22</div> <div style="color: hsl(225, 100%, 25%);; display:inline">22</div> <div style="color: hsl(222, 100%, 25%);; display:inline">22</div> <div style="color: hsl(225, 100%, 25%);; display:inline">22</div>
					<span><div style="color: hsl(224, 100%, 25%);; display:inline">21.79</div> <div style="color: hsl(225, 100%, 25%);; display:inline">21.81</div> <div style="color: hsl(225, 100%, 25%);; display:inline">21.82</div> <div style="color: hsl(222, 100%, 25%);; display:inline">21.65</div> <div style="color: hsl(225, 100%, 25%);; display:inline">21.80</div></span></a></td>
<td align="right"><a href="/graphs/?rig=699224&type=temp&panel=6af48c"><div style="color: hsl(91, 100%, 30%);; display:inline">69</div> <div style="color: hsl(91, 100%, 30%);; display:inline">69</div> <div style="color: hsl(113, 100%, 30%);; display:inline">65</div> <div style="color: hsl(91, 100%, 30%);; display:inline">69</div> <div style="color: hsl(96, 100%, 30%);; display:inline">68</div> </a></td>
<td align="right"><a href="#" class="hasTooltip"><div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <span><div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <div style="display:inline; color: hsl(20, 100%, 30%);">4</div> <div style="display:inline; color: hsl(20, 100%, 30%);">4</div> </span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=699224&type=voltage&panel=6af48c"><div style="display:inline; color: hsl(158, 100%, 30%);">0.99</div> <div style="display:inline; color: hsl(173, 100%, 30%);">0.96</div> <div style="display:inline; color: hsl(138, 100%, 30%);">1.03</div> <div style="display:inline; color: hsl(158, 100%, 30%);">0.99</div> <div style="display:inline; color: hsl(138, 100%, 30%);">1.03</div> </a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=699224&type=watts&panel=6af48c">
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div> <span align="left">
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div>  (default)
				<br />
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div>  (minimum)
				<br />
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div>  (maximum)
				</span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=699224&type=fanrpm&panel=6af48c"><div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <span>percents: 84 84 84 84 84<br />k-rpms: <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> </span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=699224&type=core&panel=6af48c"><div style="color: hsl(220, 100%, 30%);; display:inline">1.15</div> <div style="color: hsl(220, 100%, 30%);; display:inline">1.15</div> <div style="color: hsl(220, 100%, 30%);; display:inline">1.15</div> <div style="color: hsl(220, 100%, 30%);; display:inline">1.15</div> <div style="color: hsl(220, 100%, 30%);; display:inline">1.15</div> <span><div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> <div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> <div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> <div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> <div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> </span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=699224&type=mem&panel=6af48c"><div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <span><div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> </span></a></td>
</tr><td align="left"><b><span style="color: #c00;" class="blink">1.2.9</span></b></td>
<td align="left"><span style="color: #009">A</span></td>
<td align="left"><a class="hasTooltip"><div style="display: inline; color: hsl(162, 93%, 21%)">cl</div><span>claymore v10.2</span></a></td>
<td align="left"><a href="#" class="hasTooltip" style="color:black"><div style=" display:inline; color: hsl(100, 100%, 25%);">6/6</div><span>4gb &middot; 01 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; polaris10<br />4gb &middot; 02 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; polaris10<br />4gb &middot; 05 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; polaris10<br />4gb &middot; 06 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; polaris10<br />4gb &middot; 09 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; polaris10<br />4gb &middot; 0a ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; polaris10</span></a></td>
<td align="left"><div style="display:inline; font-family: monospace;">
                                        <a href="#" class="hasTooltip" style="color: hsl(34, 89%, 22%); text-decoration: none">64eb5a<span>130.8 hash: miner active<br />990FXA-UD3 R5 ()<br />DataTraveler SE9 000FEAFAAB63CCA0B7F42431<br />Realtek Semiconductor Co., Ltd. RTL8111/8168/8411 PCI Express Gigabit Ethernet Controller (rev 0c)<br />4.8.17-ethos49<br />1 x AMD Sempron(tm) 145 Processor</span></div><div class="hasTooltip" style="display:inline;font-family: monospace; color: #000"> <div style="display:inline; color: #000">L</div><span>(R) for 'remote config enabled' and (L) for 'using local config'</span></div></td>
<td align="right"></td>
<td align="right">eld05</td>
<td align="right"><a target=_blank class="hasTooltip" href="http://192.168.1.105/">
						<div style="text-decoration: underline; display:inline; color: hsl(149, 93%, 23%)" class="ip_address">
						192.168.1.105</div>
						<span>stratumproxy enabled<br />
proxywallet ...F0<br />
proxypool1 pool-usa.ethosdistro.com:5001<br />
proxypool2 pool-eu.ethosdistro.com:5001<br />
</span>
						</a></td>
<td align="right"><a class="hasTooltip"><div style="display: inline; color: #00a">s14</div><span>May 30 2018 11:21:28 UTC<br />0 days, 0 hours, 0 mins, 14 sec</span></a></td>
<td align="right"><a class="hasTooltip"><div style="display: inline; color: #00a">d3</div><span>May 27 2018 00:35:20 UTC<br />3 days, 10 hours, 46 mins, 22 sec</span></a></td>
<td align="right"><a class="hasTooltip"><div style="display: inline; color: #00a">d3</div><span>May 27 2018 00:36:58 UTC<br />3 days, 10 hours, 44 mins, 44 sec</span></a></td>
<td align="right"><a href="/graphs/?rig=64eb5a&type=load_rx_tx&panel=6af48c"><span style="color: hsl(241, 100%, 30%);">0.6</span></a></td>
<td align="right"><a href="/graphs/?rig=64eb5a&type=load_rx_tx&panel=6af48c"><span style="color: hsl(246, 100%, 30%);">0.3</span></a></td>
<td align="right"><a href="/graphs/?rig=64eb5a&type=load_rx_tx&panel=6af48c"><span style="color: hsl(216, 100%, 30%);">0.6</span></a></td>
<td align="right"><a href="/graphs/?rig=64eb5a&type=cpu_temp&panel=6af48c"><span style="color: hsl(15, 100%, 30%);">67</span></a></td>
<td align="right"></td>
<td align="right"><span style="color: hsl(255, 100%, 30%);">4</span></td>
<td align="right"><a href="/graphs/?rig=64eb5a&type=hash&panel=6af48c">131</a></td>
<td align="right">
					<a class="hasTooltip" align="left" href="/graphs/?rig=64eb5a&type=miner_hashes&panel=6af48c">
				<div style="color: hsl(225, 100%, 25%);; display:inline">22</div> <div style="color: hsl(225, 100%, 25%);; display:inline">22</div> <div style="color: hsl(225, 100%, 25%);; display:inline">22</div> <div style="color: hsl(225, 100%, 25%);; display:inline">22</div> <div style="color: hsl(222, 100%, 25%);; display:inline">22</div> <div style="color: hsl(225, 100%, 25%);; display:inline">22</div>
					<span><div style="color: hsl(225, 100%, 25%);; display:inline">21.82</div> <div style="color: hsl(225, 100%, 25%);; display:inline">21.81</div> <div style="color: hsl(225, 100%, 25%);; display:inline">21.81</div> <div style="color: hsl(225, 100%, 25%);; display:inline">21.82</div> <div style="color: hsl(222, 100%, 25%);; display:inline">21.68</div> <div style="color: hsl(225, 100%, 25%);; display:inline">21.82</div></span></a></td>
<td align="right"><a href="/graphs/?rig=64eb5a&type=temp&panel=6af48c"><div style="color: hsl(113, 100%, 30%);; display:inline">65</div> <div style="color: hsl(34, 100%, 30%);; display:inline">79</div> <div style="color: hsl(108, 100%, 30%);; display:inline">66</div> <div style="color: hsl(125, 100%, 30%);; display:inline">63</div> <div style="color: hsl(62, 100%, 30%);; display:inline">74</div> <div style="color: hsl(85, 100%, 30%);; display:inline">70</div> </a></td>
<td align="right"><a href="#" class="hasTooltip"><div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <span><div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> </span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=64eb5a&type=voltage&panel=6af48c"><div style="display:inline; color: hsl(143, 100%, 30%);">1.02</div> <div style="display:inline; color: hsl(122, 100%, 30%);">1.06</div> <div style="display:inline; color: hsl(143, 100%, 30%);">1.02</div> <div style="display:inline; color: hsl(117, 100%, 30%);">1.07</div> <div style="display:inline; color: hsl(184, 100%, 30%);">0.94</div> <div style="display:inline; color: hsl(163, 100%, 30%);">0.98</div> </a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=64eb5a&type=watts&panel=6af48c">
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div> <span align="left">
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div>  (default)
				<br />
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div>  (minimum)
				<br />
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div>  (maximum)
				</span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=64eb5a&type=fanrpm&panel=6af48c"><div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <span>percents: 84 84 84 84 84 84<br />k-rpms: <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> </span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=64eb5a&type=core&panel=6af48c"><div style="color: hsl(249, 100%, 30%);; display:inline">1.19</div> <div style="color: hsl(249, 100%, 30%);; display:inline">1.19</div> <div style="color: hsl(249, 100%, 30%);; display:inline">1.19</div> <div style="color: hsl(249, 100%, 30%);; display:inline">1.19</div> <div style="color: hsl(249, 100%, 30%);; display:inline">1.19</div> <div style="color: hsl(249, 100%, 30%);; display:inline">1.19</div> <span><div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> <div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> <div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> <div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> <div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> <div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> </span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=64eb5a&type=mem&panel=6af48c"><div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <span><div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> </span></a></td>
</tr><td align="left"><b><span style="color: #c00;" class="blink">1.2.9</span></b></td>
<td align="left"><span style="color: #009">A</span></td>
<td align="left"><a class="hasTooltip"><div style="display: inline; color: hsl(162, 93%, 21%)">cl</div><span>claymore v10.2</span></a></td>
<td align="left"><a href="#" class="hasTooltip" style="color:black"><div style=" display:inline; color: hsl(100, 100%, 25%);">6/6</div><span>4gb &middot; 01 ellesmere rx 480 115-d000pi0-100 samsung (115-d000pi0-100) &middot; polaris10<br />4gb &middot; 02 ellesmere rx 480 115-d000pi0-100 samsung (115-d000pi0-100) &middot; polaris10<br />4gb &middot; 03 ellesmere rx 480 115-d000pi0-100 sk hynix (115-d000pi0-100) &middot; polaris10<br />4gb &middot; 04 ellesmere rx 480 115-d000pi0-100 samsung (115-d000pi0-100) &middot; polaris10<br />4gb &middot; 05 ellesmere rx 480 115-d000pi0-100 samsung (115-d000pi0-100) &middot; polaris10<br />4gb &middot; 06 ellesmere rx 480 115-d000pi0-100 samsung (115-d000pi0-100) &middot; polaris10</span></a></td>
<td align="left"><div style="display:inline; font-family: monospace;">
                                        <a href="#" class="hasTooltip" style="color: hsl(101, 87%, 21%); text-decoration: none">e6e52a<span>143.7 hash: miner active<br />TB85 ()<br />KINGSTON SSDNOW 30GB 40JM107ZM83Z<br />Realtek Semiconductor Co., Ltd. RTL8111/8168/8411 PCI Express Gigabit Ethernet Controller (rev 0c)<br />4.8.17-ethos49<br />Intel(R) Celeron(R) CPU G1840 @ 2.80GHz<br />
Intel(R) Celeron(R) CPU G1840 @ 2.80GHz</span></div><div class="hasTooltip" style="display:inline;font-family: monospace; color: #000"> <div style="display:inline; color: #000">L</div><span>(R) for 'remote config enabled' and (L) for 'using local config'</span></div></td>
<td align="right"></td>
<td align="right">jld01</td>
<td align="right"><a target=_blank class="hasTooltip" href="http://192.168.1.109/">
						<div style="text-decoration: underline; display:inline; color: hsl(42, 91%, 23%)" class="ip_address">
						192.168.1.109</div>
						<span>stratumproxy enabled<br />
proxywallet ...49<br />
proxypool1 eth-eu1.nanopool.org:9999<br />
proxypool2 pool-usa.ethosdistro.com:5001<br />
</span>
						</a></td>
<td align="right"><a class="hasTooltip"><div style="display: inline; color: #00a">m2</div><span>May 30 2018 11:19:58 UTC<br />0 days, 0 hours, 1 mins, 44 sec</span></a></td>
<td align="right"><a class="hasTooltip"><div style="display: inline; color: #00a">d2</div><span>May 27 2018 15:46:50 UTC<br />2 days, 19 hours, 34 mins, 52 sec</span></a></td>
<td align="right"><a class="hasTooltip"><div style="display: inline; color: #00a">d2</div><span>May 27 2018 15:47:53 UTC<br />2 days, 19 hours, 33 mins, 49 sec</span></a></td>
<td align="right"><a href="/graphs/?rig=e6e52a&type=load_rx_tx&panel=6af48c"><span style="color: hsl(242, 100%, 30%);">0.5</span></a></td>
<td align="right"><a href="/graphs/?rig=e6e52a&type=load_rx_tx&panel=6af48c"><span style="color: hsl(249, 100%, 30%);">0.2</span></a></td>
<td align="right"><a href="/graphs/?rig=e6e52a&type=load_rx_tx&panel=6af48c"><span style="color: hsl(155, 100%, 30%);">1.6</span></a></td>
<td align="right"><a href="/graphs/?rig=e6e52a&type=cpu_temp&panel=6af48c"><span style="color: hsl(107, 100%, 30%);">49</span></a></td>
<td align="right">4</td>
<td align="right"><span style="color: hsl(255, 100%, 30%);">4</span></td>
<td align="right"><a href="/graphs/?rig=e6e52a&type=hash&panel=6af48c">144</a></td>
<td align="right">
					<a class="hasTooltip" align="left" href="/graphs/?rig=e6e52a&type=miner_hashes&panel=6af48c">
				<div style="color: hsl(224, 100%, 25%);; display:inline">24</div> <div style="color: hsl(225, 100%, 25%);; display:inline">24</div> <div style="color: hsl(185, 100%, 25%);; display:inline">22</div> <div style="color: hsl(225, 100%, 25%);; display:inline">24</div> <div style="color: hsl(225, 100%, 25%);; display:inline">24</div> <div style="color: hsl(225, 100%, 25%);; display:inline">24</div>
					<span><div style="color: hsl(224, 100%, 25%);; display:inline">24.34</div> <div style="color: hsl(225, 100%, 25%);; display:inline">24.37</div> <div style="color: hsl(185, 100%, 25%);; display:inline">21.85</div> <div style="color: hsl(225, 100%, 25%);; display:inline">24.35</div> <div style="color: hsl(225, 100%, 25%);; display:inline">24.38</div> <div style="color: hsl(225, 100%, 25%);; display:inline">24.36</div></span></a></td>
<td align="right"><a href="/graphs/?rig=e6e52a&type=temp&panel=6af48c"><div style="color: hsl(113, 100%, 30%);; display:inline">65</div> <div style="color: hsl(68, 100%, 30%);; display:inline">73</div> <div style="color: hsl(96, 100%, 30%);; display:inline">68</div> <div style="color: hsl(113, 100%, 30%);; display:inline">65</div> <div style="color: hsl(85, 100%, 30%);; display:inline">70</div> <div style="color: hsl(147, 100%, 30%);; display:inline">59</div> </a></td>
<td align="right"><a href="#" class="hasTooltip"><div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <span><div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> </span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=e6e52a&type=voltage&panel=6af48c"><div style="display:inline; color: hsl(102, 100%, 30%);">1.10</div> <div style="display:inline; color: hsl(122, 100%, 30%);">1.06</div> <div style="display:inline; color: hsl(117, 100%, 30%);">1.07</div> <div style="display:inline; color: hsl(133, 100%, 30%);">1.04</div> <div style="display:inline; color: hsl(143, 100%, 30%);">1.02</div> <div style="display:inline; color: hsl(133, 100%, 30%);">1.04</div> </a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=e6e52a&type=watts&panel=6af48c">
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div> <span align="left">
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div>  (default)
				<br />
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div>  (minimum)
				<br />
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div>  (maximum)
				</span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=e6e52a&type=fanrpm&panel=6af48c"><div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <span>percents: 84 84 84 84 84 84<br />k-rpms: <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> </span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=e6e52a&type=core&panel=6af48c"><div style="color: hsl(240, 100%, 30%);; display:inline">1.18</div> <div style="color: hsl(270, 100%, 30%);; display:inline">1.22</div> <div style="color: hsl(268, 100%, 30%);; display:inline">1.22</div> <div style="color: hsl(256, 100%, 30%);; display:inline">1.20</div> <div style="color: hsl(270, 100%, 30%);; display:inline">1.22</div> <div style="color: hsl(251, 100%, 30%);; display:inline">1.19</div> <span><div style="color: hsl(319, 100%, 30%);; display:inline">1.30</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.30</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.30</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.30</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.30</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.30</div> </span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=e6e52a&type=mem&panel=6af48c"><div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <span><div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> </span></a></td>
</tr><td align="left"><b><span style="color: #c00;" class="blink">1.2.9</span></b></td>
<td align="left"><span style="color: #009">A</span></td>
<td align="left"><a class="hasTooltip"><div style="display: inline; color: hsl(162, 93%, 21%)">cl</div><span>claymore v10.2</span></a></td>
<td align="left"><a href="#" class="hasTooltip" style="color:black"><div style=" display:inline; color: hsl(100, 100%, 25%);">6/6</div><span>4gb &middot; 01 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; polaris10<br />4gb &middot; 02 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; polaris10<br />4gb &middot; 05 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; polaris10<br />4gb &middot; 06 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; polaris10<br />4gb &middot; 09 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; polaris10<br />4gb &middot; 0a ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; polaris10</span></a></td>
<td align="left"><div style="display:inline; font-family: monospace;">
                                        <a href="#" class="hasTooltip" style="color: hsl(34, 89%, 22%); text-decoration: none">e0d831<span>130.9 hash: miner active<br />990FXA-UD3 R5 ()<br />Cruzer Glide 200426057107BE514FAD<br />Realtek Semiconductor Co., Ltd. RTL8111/8168/8411 PCI Express Gigabit Ethernet Controller (rev 0c)<br />4.8.17-ethos49<br />1 x AMD Sempron(tm) 145 Processor</span></div><div class="hasTooltip" style="display:inline;font-family: monospace; color: #000"> <div style="display:inline; color: #000">L</div><span>(R) for 'remote config enabled' and (L) for 'using local config'</span></div></td>
<td align="right"></td>
<td align="right">jld02</td>
<td align="right"><a target=_blank class="hasTooltip" href="http://192.168.1.106/">
						<div style="text-decoration: underline; display:inline; color: hsl(42, 91%, 23%)" class="ip_address">
						192.168.1.106</div>
						<span>stratumproxy enabled<br />
proxywallet ...49<br />
proxypool1 eth-eu1.nanopool.org:9999<br />
proxypool2 pool-usa.ethosdistro.com:5001<br />
</span>
						</a></td>
<td align="right"><a class="hasTooltip"><div style="display: inline; color: #00a">m2</div><span>May 30 2018 11:20:09 UTC<br />0 days, 0 hours, 1 mins, 33 sec</span></a></td>
<td align="right"><a class="hasTooltip"><div style="display: inline; color: #00a">d17</div><span>May 13 2018 10:57:11 UTC<br />17 days, 0 hours, 24 mins, 31 sec</span></a></td>
<td align="right"><a class="hasTooltip"><div style="display: inline; color: #00a">d17</div><span>May 13 2018 10:58:11 UTC<br />17 days, 0 hours, 23 mins, 31 sec</span></a></td>
<td align="right"><a href="/graphs/?rig=e0d831&type=load_rx_tx&panel=6af48c"><span style="color: hsl(241, 100%, 30%);">0.6</span></a></td>
<td align="right"><a href="/graphs/?rig=e0d831&type=load_rx_tx&panel=6af48c"><span style="color: hsl(246, 100%, 30%);">0.4</span></a></td>
<td align="right"><a href="/graphs/?rig=e0d831&type=load_rx_tx&panel=6af48c"><span style="color: hsl(134, 100%, 30%);">1.9</span></a></td>
<td align="right"><a href="/graphs/?rig=e0d831&type=cpu_temp&panel=6af48c"><span style="color: hsl(31, 100%, 30%);">64</span></a></td>
<td align="right">4</td>
<td align="right"><span style="color: hsl(255, 100%, 30%);">4</span></td>
<td align="right"><a href="/graphs/?rig=e0d831&type=hash&panel=6af48c">131</a></td>
<td align="right">
					<a class="hasTooltip" align="left" href="/graphs/?rig=e0d831&type=miner_hashes&panel=6af48c">
				<div style="color: hsl(225, 100%, 25%);; display:inline">22</div> <div style="color: hsl(225, 100%, 25%);; display:inline">22</div> <div style="color: hsl(225, 100%, 25%);; display:inline">22</div> <div style="color: hsl(225, 100%, 25%);; display:inline">22</div> <div style="color: hsl(225, 100%, 25%);; display:inline">22</div> <div style="color: hsl(225, 100%, 25%);; display:inline">22</div>
					<span><div style="color: hsl(225, 100%, 25%);; display:inline">21.82</div> <div style="color: hsl(225, 100%, 25%);; display:inline">21.82</div> <div style="color: hsl(225, 100%, 25%);; display:inline">21.83</div> <div style="color: hsl(225, 100%, 25%);; display:inline">21.82</div> <div style="color: hsl(225, 100%, 25%);; display:inline">21.83</div> <div style="color: hsl(225, 100%, 25%);; display:inline">21.82</div></span></a></td>
<td align="right"><a href="/graphs/?rig=e0d831&type=temp&panel=6af48c"><div style="color: hsl(85, 100%, 30%);; display:inline">70</div> <div style="color: hsl(125, 100%, 30%);; display:inline">63</div> <div style="color: hsl(102, 100%, 30%);; display:inline">67</div> <div style="color: hsl(57, 100%, 30%);; display:inline">75</div> <div style="color: hsl(79, 100%, 30%);; display:inline">71</div> <div style="color: hsl(96, 100%, 30%);; display:inline">68</div> </a></td>
<td align="right"><a href="#" class="hasTooltip"><div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <span><div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> </span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=e0d831&type=voltage&panel=6af48c"><div style="display:inline; color: hsl(133, 100%, 30%);">1.04</div> <div style="display:inline; color: hsl(133, 100%, 30%);">1.04</div> <div style="display:inline; color: hsl(112, 100%, 30%);">1.08</div> <div style="display:inline; color: hsl(112, 100%, 30%);">1.08</div> <div style="display:inline; color: hsl(102, 100%, 30%);">1.10</div> <div style="display:inline; color: hsl(112, 100%, 30%);">1.08</div> </a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=e0d831&type=watts&panel=6af48c">
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div> <span align="left">
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div>  (default)
				<br />
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div>  (minimum)
				<br />
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div>  (maximum)
				</span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=e0d831&type=fanrpm&panel=6af48c"><div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <span>percents: 84 84 84 84 84 84<br />k-rpms: <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> </span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=e0d831&type=core&panel=6af48c"><div style="color: hsl(255, 100%, 30%);; display:inline">1.20</div> <div style="color: hsl(255, 100%, 30%);; display:inline">1.20</div> <div style="color: hsl(255, 100%, 30%);; display:inline">1.20</div> <div style="color: hsl(255, 100%, 30%);; display:inline">1.20</div> <div style="color: hsl(255, 100%, 30%);; display:inline">1.20</div> <div style="color: hsl(255, 100%, 30%);; display:inline">1.20</div> <span><div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> <div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> <div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> <div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> <div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> <div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> </span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=e0d831&type=mem&panel=6af48c"><div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <span><div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> </span></a></td>
</tr><td align="left"><b><span style="color: #c00;" class="blink">1.2.9</span></b></td>
<td align="left"><span style="color: #009">A</span></td>
<td align="left"><a class="hasTooltip"><div style="display: inline; color: hsl(162, 93%, 21%)">cl</div><span>claymore v10.2</span></a></td>
<td align="left"><a href="#" class="hasTooltip" style="color:black"><div style=" display:inline; color: hsl(100, 100%, 25%);">6/6</div><span>4gb &middot; 01 ellesmere rx 480 115-d000pi0-100 samsung (115-d000pi0-100) &middot; polaris10<br />4gb &middot; 02 ellesmere rx 480 115-d000pi0-100 samsung (115-d000pi0-100) &middot; polaris10<br />4gb &middot; 03 ellesmere rx 480 115-d000pi0-100 samsung (115-d000pi0-100) &middot; polaris10<br />4gb &middot; 04 ellesmere rx 480 115-d000pi0-100 samsung (115-d000pi0-100) &middot; polaris10<br />4gb &middot; 05 ellesmere rx 480 115-d000pi0-100 samsung (115-d000pi0-100) &middot; polaris10<br />4gb &middot; 06 ellesmere rx 480 115-d000pi0-100 samsung (115-d000pi0-100) &middot; polaris10</span></a></td>
<td align="left"><div style="display:inline; font-family: monospace;">
                                        <a href="#" class="hasTooltip" style="color: hsl(101, 87%, 21%); text-decoration: none">e6e481<span>146.1 hash: miner active<br />TB85 ()<br />KINGSTON SSDNOW 30GB 70PA50LCK04K<br />Realtek Semiconductor Co., Ltd. RTL8111/8168/8411 PCI Express Gigabit Ethernet Controller (rev 0c)<br />4.8.17-ethos49<br />Intel(R) Celeron(R) CPU G1840 @ 2.80GHz<br />
Intel(R) Celeron(R) CPU G1840 @ 2.80GHz</span></div><div class="hasTooltip" style="display:inline;font-family: monospace; color: #000"> <div style="display:inline; color: #000">L</div><span>(R) for 'remote config enabled' and (L) for 'using local config'</span></div></td>
<td align="right"></td>
<td align="right">tmd01</td>
<td align="right"><a target=_blank class="hasTooltip" href="http://192.168.1.110/">
						<div style="text-decoration: underline; display:inline; color: hsl(144, 95%, 22%)" class="ip_address">
						192.168.1.110</div>
						<span>stratumproxy enabled<br />
proxywallet ...6c<br />
proxypool1 eth-eu1.nanopool.org:9999<br />
proxypool2 pool-usa.ethosdistro.com:5001<br />
</span>
						</a></td>
<td align="right"><a class="hasTooltip"><div style="display: inline; color: #00a">m2</div><span>May 30 2018 11:19:58 UTC<br />0 days, 0 hours, 1 mins, 44 sec</span></a></td>
<td align="right"><a class="hasTooltip"><div style="display: inline; color: #00a">d6</div><span>May 23 2018 23:57:46 UTC<br />6 days, 11 hours, 23 mins, 56 sec</span></a></td>
<td align="right"><a class="hasTooltip"><div style="display: inline; color: #00a">d6</div><span>May 23 2018 23:58:47 UTC<br />6 days, 11 hours, 22 mins, 55 sec</span></a></td>
<td align="right"><a href="/graphs/?rig=e6e481&type=load_rx_tx&panel=6af48c"><span style="color: hsl(241, 100%, 30%);">0.6</span></a></td>
<td align="right"><a href="/graphs/?rig=e6e481&type=load_rx_tx&panel=6af48c"><span style="color: hsl(246, 100%, 30%);">0.3</span></a></td>
<td align="right"><a href="/graphs/?rig=e6e481&type=load_rx_tx&panel=6af48c"><span style="color: hsl(159, 100%, 30%);">1.5</span></a></td>
<td align="right"><a href="/graphs/?rig=e6e481&type=cpu_temp&panel=6af48c"><span style="color: hsl(102, 100%, 30%);">50</span></a></td>
<td align="right">4</td>
<td align="right"><span style="color: hsl(255, 100%, 30%);">4</span></td>
<td align="right"><a href="/graphs/?rig=e6e481&type=hash&panel=6af48c">146</a></td>
<td align="right">
					<a class="hasTooltip" align="left" href="/graphs/?rig=e6e481&type=miner_hashes&panel=6af48c">
				<div style="color: hsl(225, 100%, 25%);; display:inline">24</div> <div style="color: hsl(225, 100%, 25%);; display:inline">24</div> <div style="color: hsl(225, 100%, 25%);; display:inline">24</div> <div style="color: hsl(225, 100%, 25%);; display:inline">24</div> <div style="color: hsl(225, 100%, 25%);; display:inline">24</div> <div style="color: hsl(225, 100%, 25%);; display:inline">24</div>
					<span><div style="color: hsl(225, 100%, 25%);; display:inline">24.35</div> <div style="color: hsl(225, 100%, 25%);; display:inline">24.35</div> <div style="color: hsl(225, 100%, 25%);; display:inline">24.33</div> <div style="color: hsl(225, 100%, 25%);; display:inline">24.35</div> <div style="color: hsl(225, 100%, 25%);; display:inline">24.34</div> <div style="color: hsl(225, 100%, 25%);; display:inline">24.35</div></span></a></td>
<td align="right"><a href="/graphs/?rig=e6e481&type=temp&panel=6af48c"><div style="color: hsl(102, 100%, 30%);; display:inline">67</div> <div style="color: hsl(91, 100%, 30%);; display:inline">69</div> <div style="color: hsl(96, 100%, 30%);; display:inline">68</div> <div style="color: hsl(108, 100%, 30%);; display:inline">66</div> <div style="color: hsl(113, 100%, 30%);; display:inline">65</div> <div style="color: hsl(147, 100%, 30%);; display:inline">59</div> </a></td>
<td align="right"><a href="#" class="hasTooltip"><div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <span><div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> </span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=e6e481&type=voltage&panel=6af48c"><div style="display:inline; color: hsl(117, 100%, 30%);">1.07</div> <div style="display:inline; color: hsl(112, 100%, 30%);">1.08</div> <div style="display:inline; color: hsl(117, 100%, 30%);">1.07</div> <div style="display:inline; color: hsl(107, 100%, 30%);">1.09</div> <div style="display:inline; color: hsl(102, 100%, 30%);">1.10</div> <div style="display:inline; color: hsl(117, 100%, 30%);">1.07</div> </a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=e6e481&type=watts&panel=6af48c">
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div> <span align="left">
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div>  (default)
				<br />
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div>  (minimum)
				<br />
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div>  (maximum)
				</span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=e6e481&type=fanrpm&panel=6af48c"><div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <span>percents: 84 84 84 84 84 84<br />k-rpms: <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> </span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=e6e481&type=core&panel=6af48c"><div style="color: hsl(243, 100%, 30%);; display:inline">1.18</div> <div style="color: hsl(246, 100%, 30%);; display:inline">1.19</div> <div style="color: hsl(244, 100%, 30%);; display:inline">1.18</div> <div style="color: hsl(244, 100%, 30%);; display:inline">1.18</div> <div style="color: hsl(240, 100%, 30%);; display:inline">1.18</div> <div style="color: hsl(242, 100%, 30%);; display:inline">1.18</div> <span><div style="color: hsl(319, 100%, 30%);; display:inline">1.30</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.30</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.30</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.30</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.30</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.30</div> </span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=e6e481&type=mem&panel=6af48c"><div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <span><div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> </span></a></td>
</tr><td align="left"><b><span style="color: #c00;" class="blink">1.2.9</span></b></td>
<td align="left"><span style="color: #009">A</span></td>
<td align="left"><a class="hasTooltip"><div style="display: inline; color: hsl(162, 93%, 21%)">cl</div><span>claymore v10.2</span></a></td>
<td align="left"><a href="#" class="hasTooltip" style="color:black"><div style=" display:inline; color: hsl(100, 100%, 25%);">6/6</div><span>4gb &middot; 01 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; polaris10<br />4gb &middot; 02 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; polaris10<br />4gb &middot; 05 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; polaris10<br />4gb &middot; 06 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; polaris10<br />4gb &middot; 09 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; polaris10<br />4gb &middot; 0a ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; polaris10</span></a></td>
<td align="left"><div style="display:inline; font-family: monospace;">
                                        <a href="#" class="hasTooltip" style="color: hsl(34, 89%, 22%); text-decoration: none">66f273<span>129.7 hash: miner active<br />990FXA-UD3 R5 ()<br />SSD SATAIII 16GB i<br />Realtek Semiconductor Co., Ltd. RTL8111/8168/8411 PCI Express Gigabit Ethernet Controller (rev 0c)<br />4.8.17-ethos49<br />AMD Sempron(tm) 145 Processor</span></div><div class="hasTooltip" style="display:inline;font-family: monospace; color: #000"> <div style="display:inline; color: #000">L</div><span>(R) for 'remote config enabled' and (L) for 'using local config'</span></div></td>
<td align="right"></td>
<td align="right">tmd02</td>
<td align="right"><a target=_blank class="hasTooltip" href="http://192.168.1.108/">
						<div style="text-decoration: underline; display:inline; color: hsl(144, 95%, 22%)" class="ip_address">
						192.168.1.108</div>
						<span>stratumproxy enabled<br />
proxywallet ...6c<br />
proxypool1 eth-eu1.nanopool.org:9999<br />
proxypool2 pool-usa.ethosdistro.com:5001<br />
</span>
						</a></td>
<td align="right"><a class="hasTooltip"><div style="display: inline; color: #00a">s67</div><span>May 30 2018 11:20:35 UTC<br />0 days, 0 hours, 1 mins, 7 sec</span></a></td>
<td align="right"><a class="hasTooltip"><div style="display: inline; color: #00a">d40</div><span>Apr 19 2018 14:50:07 UTC<br />40 days, 20 hours, 31 mins, 35 sec</span></a></td>
<td align="right"><a class="hasTooltip"><div style="display: inline; color: #00a">d40</div><span>Apr 19 2018 14:51:03 UTC<br />40 days, 20 hours, 30 mins, 39 sec</span></a></td>
<td align="right"><a href="/graphs/?rig=66f273&type=load_rx_tx&panel=6af48c"><span style="color: hsl(241, 100%, 30%);">0.6</span></a></td>
<td align="right"><a href="/graphs/?rig=66f273&type=load_rx_tx&panel=6af48c"><span style="color: hsl(246, 100%, 30%);">0.3</span></a></td>
<td align="right"><a href="/graphs/?rig=66f273&type=load_rx_tx&panel=6af48c"><span style="color: hsl(211, 100%, 30%);">0.7</span></a></td>
<td align="right"><a href="/graphs/?rig=66f273&type=cpu_temp&panel=6af48c"><span style="color: hsl(76, 100%, 30%);">55</span></a></td>
<td align="right">2</td>
<td align="right"><span style="color: hsl(255, 100%, 30%);">4</span></td>
<td align="right"><a href="/graphs/?rig=66f273&type=hash&panel=6af48c">129</a></td>
<td align="right">
					<a class="hasTooltip" align="left" href="/graphs/?rig=66f273&type=miner_hashes&panel=6af48c">
				<div style="color: hsl(225, 100%, 25%);; display:inline">22</div> <div style="color: hsl(196, 100%, 25%);; display:inline">20</div> <div style="color: hsl(225, 100%, 25%);; display:inline">22</div> <div style="color: hsl(225, 100%, 25%);; display:inline">22</div> <div style="color: hsl(225, 100%, 25%);; display:inline">22</div> <div style="color: hsl(225, 100%, 25%);; display:inline">22</div>
					<span><div style="color: hsl(225, 100%, 25%);; display:inline">21.78</div> <div style="color: hsl(196, 100%, 25%);; display:inline">20.27</div> <div style="color: hsl(225, 100%, 25%);; display:inline">21.77</div> <div style="color: hsl(225, 100%, 25%);; display:inline">21.79</div> <div style="color: hsl(225, 100%, 25%);; display:inline">21.78</div> <div style="color: hsl(225, 100%, 25%);; display:inline">21.78</div></span></a></td>
<td align="right"><a href="/graphs/?rig=66f273&type=temp&panel=6af48c"><div style="color: hsl(125, 100%, 30%);; display:inline">63</div> <div style="color: hsl(125, 100%, 30%);; display:inline">63</div> <div style="color: hsl(125, 100%, 30%);; display:inline">63</div> <div style="color: hsl(164, 100%, 30%);; display:inline">56</div> <div style="color: hsl(119, 100%, 30%);; display:inline">64</div> <div style="color: hsl(102, 100%, 30%);; display:inline">67</div> </a></td>
<td align="right"><a href="#" class="hasTooltip"><div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <span><div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> </span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=66f273&type=voltage&panel=6af48c"><div style="display:inline; color: hsl(122, 100%, 30%);">1.06</div> <div style="display:inline; color: hsl(117, 100%, 30%);">1.07</div> <div style="display:inline; color: hsl(138, 100%, 30%);">1.03</div> <div style="display:inline; color: hsl(133, 100%, 30%);">1.04</div> <div style="display:inline; color: hsl(128, 100%, 30%);">1.05</div> <div style="display:inline; color: hsl(143, 100%, 30%);">1.02</div> </a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=66f273&type=watts&panel=6af48c">
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div> <span align="left">
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div>  (default)
				<br />
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div>  (minimum)
				<br />
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div>  (maximum)
				</span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=66f273&type=fanrpm&panel=6af48c"><div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <span>percents: 84 84 84 84 84 84<br />k-rpms: <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> </span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=66f273&type=core&panel=6af48c"><div style="color: hsl(255, 100%, 30%);; display:inline">1.20</div> <div style="color: hsl(255, 100%, 30%);; display:inline">1.20</div> <div style="color: hsl(255, 100%, 30%);; display:inline">1.20</div> <div style="color: hsl(255, 100%, 30%);; display:inline">1.20</div> <div style="color: hsl(255, 100%, 30%);; display:inline">1.20</div> <div style="color: hsl(255, 100%, 30%);; display:inline">1.20</div> <span><div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> <div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> <div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> <div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> <div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> <div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> </span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=66f273&type=mem&panel=6af48c"><div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <span><div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> </span></a></td>
</tr><td align="left"><b><span style="color: #c00;" class="blink">1.2.9</span></b></td>
<td align="left"><span style="color: #009">A</span></td>
<td align="left"><a class="hasTooltip"><div style="display: inline; color: hsl(162, 93%, 21%)">cl</div><span>claymore v10.2</span></a></td>
<td align="left"><a href="#" class="hasTooltip" style="color:black"><div style=" display:inline; color: hsl(100, 100%, 25%);">6/6</div><span>4gb &middot; 01 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; polaris10<br />4gb &middot; 02 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; polaris10<br />4gb &middot; 05 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; polaris10<br />4gb &middot; 06 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; polaris10<br />4gb &middot; 09 ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; polaris10<br />4gb &middot; 0a ellesmere rx 480 113-xxx-xxx sk hynix (113-xxx-xxx) &middot; polaris10</span></a></td>
<td align="left"><div style="display:inline; font-family: monospace;">
                                        <a href="#" class="hasTooltip" style="color: hsl(34, 89%, 22%); text-decoration: none">e11f03<span>130.6 hash: miner active<br />990FXA-UD3 R5 ()<br />Cruzer Glide 200426057207BE514FAD<br />Realtek Semiconductor Co., Ltd. RTL8111/8168/8411 PCI Express Gigabit Ethernet Controller (rev 0c)<br />4.8.17-ethos49<br />1 x AMD Sempron(tm) 145 Processor</span></div><div class="hasTooltip" style="display:inline;font-family: monospace; color: #000"> <div style="display:inline; color: #000">L</div><span>(R) for 'remote config enabled' and (L) for 'using local config'</span></div></td>
<td align="right"></td>
<td align="right">tmd03</td>
<td align="right"><a target=_blank class="hasTooltip" href="http://192.168.1.107/">
						<div style="text-decoration: underline; display:inline; color: hsl(144, 95%, 22%)" class="ip_address">
						192.168.1.107</div>
						<span>stratumproxy enabled<br />
proxywallet ...6c<br />
proxypool1 eth-eu1.nanopool.org:9999<br />
proxypool2 pool-usa.ethosdistro.com:5001<br />
</span>
						</a></td>
<td align="right"><a class="hasTooltip"><div style="display: inline; color: #00a">s33</div><span>May 30 2018 11:21:09 UTC<br />0 days, 0 hours, 0 mins, 33 sec</span></a></td>
<td align="right"><a class="hasTooltip"><div style="display: inline; color: #00a">d40</div><span>Apr 19 2018 14:48:49 UTC<br />40 days, 20 hours, 32 mins, 53 sec</span></a></td>
<td align="right"><a class="hasTooltip"><div style="display: inline; color: #00a">d40</div><span>Apr 19 2018 14:50:18 UTC<br />40 days, 20 hours, 31 mins, 24 sec</span></a></td>
<td align="right"><a href="/graphs/?rig=e11f03&type=load_rx_tx&panel=6af48c"><span style="color: hsl(241, 100%, 30%);">0.6</span></a></td>
<td align="right"><a href="/graphs/?rig=e11f03&type=load_rx_tx&panel=6af48c"><span style="color: hsl(246, 100%, 30%);">0.3</span></a></td>
<td align="right"><a href="/graphs/?rig=e11f03&type=load_rx_tx&panel=6af48c"><span style="color: hsl(227, 100%, 30%);">0.4</span></a></td>
<td align="right"><a href="/graphs/?rig=e11f03&type=cpu_temp&panel=6af48c"><span style="color: hsl(-31, 100%, 30%);">76</span></a></td>
<td align="right">4</td>
<td align="right"><span style="color: hsl(255, 100%, 30%);">4</span></td>
<td align="right"><a href="/graphs/?rig=e11f03&type=hash&panel=6af48c">131</a></td>
<td align="right">
					<a class="hasTooltip" align="left" href="/graphs/?rig=e11f03&type=miner_hashes&panel=6af48c">
				<div style="color: hsl(225, 100%, 25%);; display:inline">22</div> <div style="color: hsl(225, 100%, 25%);; display:inline">22</div> <div style="color: hsl(225, 100%, 25%);; display:inline">22</div> <div style="color: hsl(225, 100%, 25%);; display:inline">22</div> <div style="color: hsl(225, 100%, 25%);; display:inline">22</div> <div style="color: hsl(225, 100%, 25%);; display:inline">22</div>
					<span><div style="color: hsl(225, 100%, 25%);; display:inline">21.76</div> <div style="color: hsl(225, 100%, 25%);; display:inline">21.75</div> <div style="color: hsl(225, 100%, 25%);; display:inline">21.76</div> <div style="color: hsl(225, 100%, 25%);; display:inline">21.76</div> <div style="color: hsl(225, 100%, 25%);; display:inline">21.76</div> <div style="color: hsl(225, 100%, 25%);; display:inline">21.77</div></span></a></td>
<td align="right"><a href="/graphs/?rig=e11f03&type=temp&panel=6af48c"><div style="color: hsl(57, 100%, 30%);; display:inline">75</div> <div style="color: hsl(85, 100%, 30%);; display:inline">70</div> <div style="color: hsl(96, 100%, 30%);; display:inline">68</div> <div style="color: hsl(113, 100%, 30%);; display:inline">65</div> <div style="color: hsl(91, 100%, 30%);; display:inline">69</div> <div style="color: hsl(85, 100%, 30%);; display:inline">70</div> </a></td>
<td align="right"><a href="#" class="hasTooltip"><div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <span><div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> <div style="display:inline; color: hsl(26, 100%, 30%);">5</div> </span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=e11f03&type=voltage&panel=6af48c"><div style="display:inline; color: hsl(138, 100%, 30%);">1.03</div> <div style="display:inline; color: hsl(92, 100%, 30%);">1.12</div> <div style="display:inline; color: hsl(117, 100%, 30%);">1.07</div> <div style="display:inline; color: hsl(92, 100%, 30%);">1.12</div> <div style="display:inline; color: hsl(128, 100%, 30%);">1.05</div> <div style="display:inline; color: hsl(107, 100%, 30%);">1.09</div> </a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=e11f03&type=watts&panel=6af48c">
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div> <span align="left">
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div>  (default)
				<br />
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div>  (minimum)
				<br />
				<div style="color: hsl(306, 100%, 30%);; display:inline"></div>  (maximum)
				</span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=e11f03&type=fanrpm&panel=6af48c"><div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <div style="color: hsl(193, 100%, 30%);; display:inline">4</div> <span>percents: 84 84 84 84 84 84<br />k-rpms: <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> <div style="color: hsl(193, 100%, 30%);; display:inline">3.8</div> </span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=e11f03&type=core&panel=6af48c"><div style="color: hsl(255, 100%, 30%);; display:inline">1.20</div> <div style="color: hsl(255, 100%, 30%);; display:inline">1.20</div> <div style="color: hsl(255, 100%, 30%);; display:inline">1.20</div> <div style="color: hsl(255, 100%, 30%);; display:inline">1.20</div> <div style="color: hsl(255, 100%, 30%);; display:inline">1.20</div> <div style="color: hsl(255, 100%, 30%);; display:inline">1.20</div> <span><div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> <div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> <div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> <div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> <div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> <div style="color: hsl(312, 100%, 30%);; display:inline">1.29</div> </span></a></td>
<td align="right"><a class="hasTooltip" href="/graphs/?rig=e11f03&type=mem&panel=6af48c"><div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <span><div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> <div style="color: hsl(319, 100%, 30%);; display:inline">1.75</div> </span></a></td>
</tr></table>        </div>      </div>    </div>
</body></html>
