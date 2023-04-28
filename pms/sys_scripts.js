
// Filter Requests by Department {Page: mntbacklogs.php}
function selectdept()
{
    //alert("ok");
    var d = document.getElementById("department").value;
    $.ajax({
        url: "mntbacklogs_filter.php",
        method: "POST",
        data: {deptid: d},
        success: function(data)
        { 
            $("#req_list").html(data);
        }
    })
}