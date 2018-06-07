
function getPastiesTable() {
    debugger;
    $.get("ajax/getPastiesTable.php", {}, function (data, status) {
        $("#getPastiesTable").html(data);
    });
}

function getTotalPasties() {
    debugger;
    $.get("ajax/getTotalPasties.php", {}, function (data, status) {
        $(".getTotalPasties").html(data);
    });
}

function getTotalPastiesToday() {
    debugger;
    $.get("ajax/getTotalPastiesToday.php", {}, function (data, status) {
        $(".getTotalPastiesToday").html(data);
    });
}

function getTotalMatchedPasties() {
    debugger;
    $.get("ajax/getTotalMatchedPasties.php", {}, function (data, status) {
        $(".getTotalMatchedPasties").html(data);
    });

}

function getTotalMatchedPastiesToday() {
    debugger;
    $.get("ajax/getTotalMatchedPastiesToday.php", {}, function (data, status) {
        $(".getTotalMatchedPastiesToday").html(data);
    });

}

$(document).ready(function () {
    // READ recods on page load
    getTotalPasties(); // calling function
    getTotalPastiesToday(); // calling function
    getTotalMatchedPasties(); // calling function
    getTotalMatchedPastiesToday(); // calling function
    getPastiesTable(); // calling function
});
