$(document).ready(function () {

//index.php - Load the total matches pasties
window.setInterval(function() {
    $.ajax({    //create an ajax request to load_page.php
        type: "POST",
        url: "ajax/TotalMatchedPasties.php",
        dataType: "html",   //expect html to be returned
        success: function(msg){
            if(parseInt(msg)!=0)    //if no errors
            {
                $('#TotalMatchedPasties').html(msg);    //load the returned html into pageContet
            }
        }

    });
}, 1000) /* time in milliseconds (ie 2 seconds)*/

//index.php - Load the total rss
window.setInterval(function() {
    $.ajax({    //create an ajax request to load_page.php
        type: "POST",
        url: "ajax/TotalRSS.php",
        dataType: "html",   //expect html to be returned
        success: function(msg){
            if(parseInt(msg)!=0)    //if no errors
            {
                $('#TotalRSS').html(msg);    //load the returned html into pageContet
            }
        }

    });
}, 1000) /* time in milliseconds (ie 2 seconds)*/
//index.php - Load the total tweets
window.setInterval(function() {
    $.ajax({    //create an ajax request to load_page.php
        type: "POST",
        url: "ajax/TotalTweets.php",
        dataType: "html",   //expect html to be returned
        success: function(msg){
            if(parseInt(msg)!=0)    //if no errors
            {
                $('#TotalTweets').html(msg);    //load the returned html into pageContet
            }
        }

    });
}, 1000) /* time in milliseconds (ie 2 seconds)*/
//pasties_home.php - Load the total pasties
window.setInterval(function() {
    $.ajax({    //create an ajax request to load_page.php
        type: "POST",
        url: "ajax/TotalPasties.php",
        dataType: "html",   //expect html to be returned
        success: function(msg){
            if(parseInt(msg)!=0)    //if no errors
            {
                $('#TotalPasties').html(msg);    //load the returned html into pageContet
            }
        }

    });
}, 1000) /* time in milliseconds (ie 2 seconds)*/
//pasties_home.php - Load the total pasties today
window.setInterval(function() {
    $.ajax({    //create an ajax request to load_page.php
        type: "POST",
        url: "ajax/TotalPastiesToday.php",
        dataType: "html",   //expect html to be returned
        success: function(msg){
            if(parseInt(msg)!=0)    //if no errors
            {
                $('#TotalPastiesToday').html(msg);    //load the returned html into pageContet
            }
        }

    });
}, 1000) /* time in milliseconds (ie 2 seconds)*/
//pasties_home.php - Load the total matches pasties
window.setInterval(function() {
    $.ajax({    //create an ajax request to load_page.php
        type: "POST",
        url: "ajax/TotalMatchedPasties.php",
        dataType: "html",   //expect html to be returned
        success: function(msg){
            if(parseInt(msg)!=0)    //if no errors
            {
                $('#TotalMatchedPasties').html(msg);    //load the returned html into pageContet
            }
        }

    });
}, 1000) /* time in milliseconds (ie 2 seconds)*/
//pasties_home.php - Load the total matched pasties today
window.setInterval(function() {
    $.ajax({    //create an ajax request to load_page.php
        type: "POST",
        url: "ajax/TotalMatchedPastiesToday.php",
        dataType: "html",   //expect html to be returned
        success: function(msg){
            if(parseInt(msg)!=0)    //if no errors
            {
                $('#TotalMatchedPastiesToday').html(msg);    //load the returned html into pageContet
            }
        }

    });
}, 1000) /* time in milliseconds (ie 2 seconds)*/
//pasties_home.php - Load the pasties table data
    $.ajax({    //create an ajax request to load_page.php
        type: "POST",
        url: "ajax/PastiesTable.php",
        dataType: "html",   //expect html to be returned
        success: function(msg){
            if(parseInt(msg)!=0)    //if no errors
            {
                $('#PastiesTable').html(msg);    //load the returned html into pageContet
                $('#pasties_datatable').dataTable ({
                    "order": [[ 3, "desc" ]]
                });
            }
        }

    });


//twitter_home.php - Load the twitter total tweets
window.setInterval(function() {
    $.ajax({    //create an ajax request to load_page.php
        type: "POST",
        url: "ajax/TotalTweets.php",
        dataType: "html",   //expect html to be returned
        success: function(msg){
            if(parseInt(msg)!=0)    //if no errors
            {
                $('#TotalTweets').html(msg);    //load the returned html into pageContet
            }
        }

    });
}, 1000) /* time in milliseconds (ie 2 seconds)*/
//twitter_home.php - Load the twitter table
    $.ajax({    //create an ajax request to load_page.php
        type: "POST",
        url: "ajax/TweetsTable.php",
        dataType: "html",   //expect html to be returned
        success: function(msg){
            if(parseInt(msg)!=0)    //if no errors
            {
                $('#TweetsTable').html(msg);    //load the returned html into pageContet
                $('#tweets_datatable').dataTable ( {
                    "order": [[ 2, "desc" ]]
                } );
            }
        }

    });
//index.php - pasties weekly line chart
    $.ajax({
        url : "ajax/HomePageLineChart7DaysPasties.php",
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

            var ctx = $("#HomePageLineChart7DaysPasties");

            var LineGraph = new Chart(ctx, {
                type: 'line',
                data: chartdata
            });
        },
        error : function(data) {

        }
    });

//index.php - pasties daily line chart
    $.ajax({
        url : "ajax/HomePageLineChart24HoursPasties.php",
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

            var ctx = $("#HomePageLineChart24HoursPasties");

            var LineGraph = new Chart(ctx, {
                type: 'line',
                data: chartdata
            });
        },
        error : function(data) {

        }
    });

//index.php - pasties irealtime line chart
    $.ajax({
        url : "ajax/HomePageLineChartRealtimePasties.php",
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

            var ctx = $("#HomePageLineChartRealtimePasties");

            var LineGraph = new Chart(ctx, {
                type: 'line',
                data: chartdata
            });
        },
        error : function(data) {

        }
    });

//index.php - twitter weekly line chart
    $.ajax({
        url : "ajax/HomePageLineChart7DaysTwitter.php",
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

            var ctx = $("#HomePageLineChart7DaysTwitter");

            var LineGraph = new Chart(ctx, {
                type: 'line',
                data: chartdata
            });
        },
        error : function(data) {

        }
    });

//index.php - twitter daily line chart
    $.ajax({
        url : "ajax/HomePageLineChart24HoursTwitter.php",
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

            var ctx = $("#HomePageLineChart24HoursTwitter");

            var LineGraph = new Chart(ctx, {
                type: 'line',
                data: chartdata
            });
        },
        error : function(data) {

        }
    });

//index.php - twitter realtime line chart
    $.ajax({
        url : "ajax/HomePageLineChartRealtimeTwitter.php",
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

            var ctx = $("#HomePageLineChartRealtimeTwitter");

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
