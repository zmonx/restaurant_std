function btnSave_click(){
    alert("dfs");
    var data = new Object();
    data.menu_id = $("#menu_id").val(); 
    data.menu_name = $("#menu_name").val();
    data.menu_type = $("#menu_type").val();
    data.menu_price = $("#menu_price").val();
        console.log(data);
        var url = "http://localhost/restaurant/v3/index.php/update";
        $.ajax(
            {
                url: url, 
                type: 'post', 
                dataType: 'json',
                success: function(feedback){
                    alert(feedback['status']);
                    if(feedback.status == "OK")
                        window.location = '/restaurant/v3/index.php';
                    },
                    data: data
            });
}

function btnSearch_click(){
  
    var url = "http://localhost/restaurant/v3/index.php/search2";
    var data = new Object();
        data.keyword = $("#keyword").val().trim();          
        $("#keyword").val("");
        $.ajax(
            {
                url: url, 
                type: 'post', 
                dataType: 'json',
                success: function(feedback){
                    // console.log(feedback)
                    if(feedback.nrow > 0){
                        var data = (feedback.data)[0];
                            $("#menu_id").val(data.menu_id);
                            $("#menu_name").val(data.menu_name);
                            $("#menu_type option[value='"+ data.menu_type+"']").prop('selected', true);
                            $("#menu_price").val(data.menu_price);
                    }else{
                        alert("Not found");
                    }                            
                    },
                data: data
        });

}


$(function(){
    $("#btnSave").click(btnSave_click);
    $("#btnSearch").click(btnSearch_click);
});


