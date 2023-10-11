$(document).ready(function() {
    fetch_data();

    function fetch_data() {
        $.ajax({
            url: "fetch_data.php",
            type: "POST",
            success: function(res) {
                $("tbody").html(res);
            }
        })
    }

    $(document).on("submit", "#insert", function(e) {
        e.preventDefault();
        var insert = new FormData(this);
        insert.append("insert", true);
        $.ajax({
            url: "action.php",
            type: "POST",
            processData: false,
            contentType: false,
            cache: false,
            data: insert,
            success: function(res) {
                console.log(res);
                var res = res;
                console.log(res);

                if (res.status == 400) {
                    fetch_data();
                    $("#insert")[0].reset();
                    alert(res.msg);
                } else if (res.status == 404) {
                    fetch_data();
                    $("#insert")[0].reset();
                    alert(res.msg);
                }
            }
        })
    })
        
});