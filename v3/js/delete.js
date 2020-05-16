function btnDelete_click(){
    // alert("dsfsf");
    var data = new Object();
         data.menu_id = $("#menu_id").val(); 
         var url = "http://localhost/restaurant/v3/index.php/delete";
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
    var key = $("#keyword").text(); 
    var url = "http://localhost/restaurant/v3/index.php/search2" + key;
    var data = new Object();
        data.keyword = $("#keyword").val().trim();          
        $("#keyword").val("");
        $.ajax(
            {
                url: url, 
                type: 'post', 
                dataType: 'json',
                success: function(feedback){
                    if(feedback.nrow > 0){

                        var data = (feedback.data)[0];
                        console.log(JSON.stringify(data));
                        $("#menu_id").val(data.menu_id);
                        $("#menu_name").val(data.menu_name);
                        var menu_type = "x";
                        switch(data.menu_type){
                            case "1":
                                menu_type ="Meat Dish";break;
                            case "2":
                                menu_type ="Dessert";break;
                            case "3":
                                menu_type ="Snack";break;    
                        };
                        $("#menu_type").val(menu_type);
                        $("#menu_price").val(data.menu_price);
                    }else{
                        alert("Not found");
                    }

                    },
                data: data
        });

}


$(function(){
    $("#btnDelete").click(btnDelete_click);
    $("#btnSearch").click(btnSearch_click);
});