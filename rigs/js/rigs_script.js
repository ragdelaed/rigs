function getQueryVariable(variable)
{
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
}

$(document).ready(function () {

//DetailStatusTable


//All Rigs
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
}, 5000) /* time in milliseconds (ie 2 seconds)*/

//Total Active Rigs
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
}, 5000) /* time in milliseconds (ie 2 seconds)*/

//All Rig Status
    $.ajax({    //create an ajax request to load_page.php
        type: "POST",
        url: "ajax/AllRigStatus.php",
        dataType: "html",   //expect html to be returned
        success: function(msg){
            if(parseInt(msg)!=0)    //if no errors
            {
                $('#AllRigStatus').html(msg);    //load the returned html into pageContet
            }
        }

    });

//ZC Rig Status
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

//Home Rig Status
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


//StatusRigName
var rig=getQueryVariable("rig")
    $.ajax({    //create an ajax request to load_page.php
        url: "ajax/StatusRigName.php",
        dataType: "html",   //expect html to be returned
        data: {rig: rig},
        success: function(msg){
            if(parseInt(msg)!=0)    //if no errors
            {
                $('#StatusRigName').html(msg);    //load the returned html into pageContet
            }
        }

    });

//StatusStatus
    $.ajax({    //create an ajax request to load_page.php
        url: "ajax/StatusStatus.php",
        dataType: "html",   //expect html to be returned
        data: {rig: rig},
        success: function(msg){
            if(parseInt(msg)!=0)    //if no errors
            {
                $('#StatusStatus').html(msg);    //load the returned html into pageContet
            }
        }

    });

//StatusCurrentHash
    $.ajax({    //create an ajax request to load_page.php
        url: "ajax/StatusCurrentHash.php",
        dataType: "html",   //expect html to be returned
        data: {rig: rig},
        success: function(msg){
            if(parseInt(msg)!=0)    //if no errors
            {
                $('#StatusCurrentHash').html(msg);    //load the returned html into pageContet
            }
        }

    });

//StatusTotalUptime
    $.ajax({    //create an ajax request to load_page.php
        url: "ajax/StatusTotalUptime.php",
        dataType: "html",   //expect html to be returned
        data: {rig: rig},
        success: function(msg){
            if(parseInt(msg)!=0)    //if no errors
            {
                $('#StatusTotalUptime').html(msg);    //load the returned html into pageContet
            }
        }

    });

//StatusGPUTemps
    $.ajax({    //create an ajax request to load_page.php
        type: "POST",
        url: "ajax/StatusGPUTemps.php",
        dataType: "html",   //expect html to be returned
        success: function(msg){
            if(parseInt(msg)!=0)    //if no errors
            {
                $('#StatusGPUTemps').html(msg);    //load the returned html into pageContet
            }
        }

    });

//StatusMinerVersion
    $.ajax({    //create an ajax request to load_page.php
        type: "POST",
        url: "ajax/StatusMinerVersion.php",
        dataType: "html",   //expect html to be returned
        success: function(msg){
            if(parseInt(msg)!=0)    //if no errors
            {
                $('#StatusMinerVersion').html(msg);    //load the returned html into pageContet
            }
        }

    });

//DetailStatus
    $.ajax({    //create an ajax request to load_page.php
        type: "POST",
        url: "ajax/DetailStatus.php",
        dataType: "html",   //expect html to be returned
        success: function(msg){
            if(parseInt(msg)!=0)    //if no errors
            {
                $('#DetailStatus').html(msg);    //load the returned html into pageContet
            }
        }

    });

//DetailStatusTable
$("#DetailStatusTable").tablesorter({
});


//Rig Table
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




//end of ready function
});

