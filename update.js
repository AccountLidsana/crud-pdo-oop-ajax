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

    $(document).on("click", ".editlink", function(e) {
        e.preventDefault();
        var edit =$(this).attr("id");
        console.log(edit);
        $.ajax({
            url: "action.php",
            type: "POST",
            data: { edit:edit },
            success: function(res) {
                console.log(res);
                var res = res;
                console.log(res);

                if (res.status == 400) {
                    $("#edit").modal("show");
                    $("#update input[name=cate_id]").val(res.data.cate_id);
                    $("#update input[name=cate_name]").val(res.data.cate_name);
                    $("#update textarea[name=remark]").val(res.data.remark);
                   
                } else if (res.status == 404) {
                    fetch_data();
                    // $("#edit")[0].reset();
                    alert(res.msg);
                }
            }
        })
    })

    $(document).on("submit", "#update", function(e) {
        e.preventDefault();
         var update = new FormData(this);
        update.append("update", true);
           console.log(update);
        $.ajax({
            url: "action.php",
            type: "POST",
            processData: false,
            contentType: false,
            cache: false,
            data:update,
            success: function(res) {
                console.log(res);
                var res = res;
                console.log(res);

                if (res.status == 400) {

                    alert(res.msg);
                    fetch_data();
                    $("#edit").modal("hide");
                }else if (res.status == 404) {
                    // fetch_data();
                    // $("#edit")[0].reset();
                    alert(res.msg);
                }
            }
        })
    })  
        
});