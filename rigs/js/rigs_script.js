$(document).ready(function () {


//rigs_home.php - Load the total rigs
window.setInterval(function() {
    $.ajax({    //create an ajax request to load_page.php
        type: "POST",
        url: "ajax/TotalRigs.php",
        dataType: "html",   //expect html to be returned
        success: function(msg){
            if(parseInt(msg)!=0)    //if no errors
            {
                $('#TotalRigs').html(msg);    //load the returned html into pageContet
            }
        }

    });
}, 1000) /* time in milliseconds (ie 2 seconds)*/

    //rigs_home.php - Load the total rigs today
window.setInterval(function() {
    $.ajax({    //create an ajax request to load_page.php
        type: "POST",
        url: "ajax/TotalRigsActive.php",
        dataType: "html",   //expect html to be returned
        success: function(msg){
            if(parseInt(msg)!=0)    //if no errors
            {
                $('#TotalRigsActive').html(msg);    //load the returned html into pageContet
            }
        }

    });
}, 1000) /* time in milliseconds (ie 2 seconds)*/

//rigs_home.php - Load the total matches rigs
    $.ajax({    //create an ajax request to load_page.php
        type: "POST",
        url: "ajax/ZCRigStatus.php",
        dataType: "html",   //expect html to be returned
        success: function(msg){
            if(parseInt(msg)!=0)    //if no errors
            {
                $('#ZCRigStatus').html(msg);    //load the returned html into pageContet
            }
        }

    });
//rigs_home.php - Load the total matches rigs
    $.ajax({    //create an ajax request to load_page.php
        type: "POST",
        url: "ajax/HomeRigStatus.php",
        dataType: "html",   //expect html to be returned
        success: function(msg){
            if(parseInt(msg)!=0)    //if no errors
            {
                $('#HomeRigStatus').html(msg);    //load the returned html into pageContet
            }
        }

    });
//rigs_home.php - Load the total matched rigs today
window.setInterval(function() {
    $.ajax({    //create an ajax request to load_page.php
        type: "POST",
        url: "ajax/TotalMatchedRigsToday.php",
        dataType: "html",   //expect html to be returned
        success: function(msg){
            if(parseInt(msg)!=0)    //if no errors
            {
                $('#TotalMatchedRigsToday').html(msg);    //load the returned html into pageContet
            }
        }

    });
}, 1000) /* time in milliseconds (ie 2 seconds)*/


//rigs_home.php - Load the rigs table data
    $.ajax({    //create an ajax request to load_page.php
        type: "POST",
        url: "ajax/RigsTable.php",
        dataType: "html",   //expect html to be returned
        success: function(msg){
            if(parseInt(msg)!=0)    //if no errors
            {
                $('#RigsTable').html(msg);    //load the returned html into pageContet
                $('#rigs_datatable').dataTable ({
                    "order": [[ 4, "desc" ]]
                });
            }
        }

    });



//index.php - rigs weekly line chart
    $.ajax({
        url : "ajax/HomePageLineChart7DaysRigs.php",
        type : "GET",
        data: { get_param: 'value' }, 
        dataType: 'json',
        success : function(data){

        var d = new Date();
        var weekday = new Array(7);
        weekday[0] = "Sunday";
        weekday[1] = "Monday";
        weekday[2] = "Tuesday";
        weekday[3] = "Wednesday";
        weekday[4] = "Thursday";
        weekday[5] = "Friday";
        weekday[6] = "Saturday";

            var day = [];
            var count_follower = [];

            for (var i in data){
                day.push(weekday[data[i].day]);
                count_follower.push(data[i].count);
            }

            var chartdata = {
                labels: day,
                datasets: [
                    {
                        label: "count",
                        backgroundColor: "rgba(38, 185, 154, 0.31)",
                        borderColor: "rgba(38, 185, 154, 0.7)",
                        pointBorderColor: "rgba(38, 185, 154, 0.7)",
                        pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
                        pointHoverBackgroundColor: "#fff",
                        pointHoverBorderColor: "rgba(220,220,220,1)",
                        pointBorderWidth: 1,
                        data: count_follower
                    }
                ]
            };

            var ctx = $("#HomePageLineChart7DaysRigs");

            var LineGraph = new Chart(ctx, {
                type: 'line',
                data: chartdata
            });
        },
        error : function(data) {

        }
    });

//index.php - rigs daily line chart
    $.ajax({
        url : "ajax/HomePageLineChart24HoursRigs.php",
        type : "GET",
        data: { get_param: 'value' }, 
        dataType: 'json',
        success : function(data){

            var hour = [];
            var count_follower = [];

            for (var i in data){
                hour.push(data[i].hour);
                count_follower.push(data[i].count);
            }

            var chartdata = {
                labels: hour,
                datasets: [
                    {
                        label: "count",

                        backgroundColor: "rgba(38, 185, 154, 0.31)",
                        borderColor: "rgba(38, 185, 154, 0.7)",
                        pointBorderColor: "rgba(38, 185, 154, 0.7)",
                        pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
                        pointHoverBackgroundColor: "#fff",
                        pointHoverBorderColor: "rgba(220,220,220,1)",
                        pointBorderWidth: 1,
                        data: count_follower
                    }
                ]
            };

            var ctx = $("#HomePageLineChart24HoursRigs");

            var LineGraph = new Chart(ctx, {
                type: 'line',
                data: chartdata
            });
        },
        error : function(data) {

        }
    });

//index.php - rigs realtime line chart
    $.ajax({
        url : "ajax/HomePageLineChartRealtimeRigs.php",
        type : "GET",
        data: { get_param: 'value' }, 
        dataType: 'json',
        success : function(data){

            var hour = [];
            var count_follower = [];

            for (var i in data){
                hour.push(data[i].hour);
                count_follower.push(data[i].count);
            }

            var chartdata = {
                labels: hour,
                datasets: [
                    {
                        label: "count",

                        backgroundColor: "rgba(38, 185, 154, 0.31)",
                        borderColor: "rgba(38, 185, 154, 0.7)",
                        pointBorderColor: "rgba(38, 185, 154, 0.7)",
                        pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
                        pointHoverBackgroundColor: "#fff",
                        pointHoverBorderColor: "rgba(220,220,220,1)",
                        pointBorderWidth: 1,
                        data: count_follower
                    }
                ]
            };

            var ctx = $("#HomePageLineChartRealtimeRigs");

            var LineGraph = new Chart(ctx, {
                type: 'line',
                data: chartdata
            });
        },
        error : function(data) {

        }
    });



//end of ready function
});

function AddRigsFeed() {
    var URL = document.getElementById("URL").value;
    var conf = confirm(URL);
    if (conf == true) {
	console.log(URL);
	$.post("ajax/AddRigsFeed.php", {
	    URL: URL
	},
	function (data, status) {
	    alert(status);
	}
	);
    }
}
			
function DeleteRigsRow(id) {
    var conf = confirm(id);
    if (conf == true) {
	console.log(id);
	$.post("ajax/DeleteRigsRow.php", {
	    id: id
	},
	function (data, status) {
	    alert(status);
	}
	);
    }
}
