<?php include "header.html";?>
          <!-- top tiles -->
        <div class="right_col" role="main">

          <div class="row tile_count">

	    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-pastie"></i> Total RSS</span>
              <div class="count"><a href="rss_home.php"><div id="TotalRSS"></div></a></div>
            </div>

	    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-pastie"></i> Total Matched Pasties</span>
              <div class="count"><a href="pasties_home.php"><div id="TotalMatchedPasties"></div></a></div>
            </div>

	    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-pastie"></i> Total Tweets</span>
              <div class="count"><a href="twitter_home.php"><div id="TotalTweets"></div></a></div>
            </div>
          </div>

          <!-- /top tiles -->
<?php include "home_page_charts.html"; ?>
<?php include "script_includes.html"; ?>
<?php include "footer.html"; ?>
