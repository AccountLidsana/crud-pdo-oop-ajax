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
$(document).on("click", ".deletelink", function(e) {
                e.preventDefault();

                var userid = $(this).attr("id");
                console.log(userid);
                if (confirm("Are Your Sure Delete ?")) {
                    $.ajax({
                        url: "action.php",
                        type: "POST",
                        data: {
                            userid: userid
                        },
                        success: function(res) {
                            console.log(res);
                            var res = res;
                            console.log(res);

                            if (res.status == 400) {
                                fetch_data();
                                alert(res.msg);
                            } else if (res.status == 404) {
                                fetch_data();
                                alert(res.msg);
                            }
                        }
                    })
                }
    })
