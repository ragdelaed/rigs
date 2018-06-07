<?php include "header.html"; ?>          
        <!-- top tiles -->
        <div class="right_col" role="main">
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-pastie"></i> All Rigs</span>
              <div class="count"><div id="TotalRigs"></div></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-pastie"></i> All Active Rigs</span>
              <div class="count"><div id="TotalRigsActive"></div></div>
            </div>
          </div>
          <!-- /top tiles -->
            
        <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Home Rigs Status</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div id="HomeRigStatus"></div>
                  </div>
                </div>
              </div>
            </div>
        <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Zombie Compound Rigs Status</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div id="ZCRigStatus"></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Rigs</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div id="RigsTable"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
<?php include "script_includes.html"; ?>
<?php include "footer.html"; ?>

