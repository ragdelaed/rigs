<?php include "header.html"; ?>          
<?php include "css_includes.html"; ?>
        <!-- top tiles -->
        <div class="right_col" role="main">
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-pastie"></i> Rig Name</span>
              <div class="count"><div id="StatusRigName"></div></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-pastie"></i> Status</span>
              <div class="count"><div id="StatusStatus"></div></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-pastie"></i> Current Hash</span>
              <div class="count"><div id="StatusCurrentHash"></div></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-pastie"></i> Total Hrs Uptime</span>
              <div class="count"><div id="StatusTotalUptime"></div></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-pastie"></i> GPU Temps</span>
              <div class="count"><div id="StatusGPUTemps"></div></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-pastie"></i> Miner Version</span>
              <div class="count"><div id="StatusMinerVersion"></div></div>
            </div>
          </div>
          <!-- /top tiles -->
            
<?php include "script_includes.html"; ?>
<?php include "footer.html"; ?>

