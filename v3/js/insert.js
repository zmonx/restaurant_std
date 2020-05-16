function btnSave_Click(){

    var data = new Object();
     data.menu_id = $("#menu_id").val(); 
     data.menu_name = $("#menu_name").val();
     data.menu_type = $("#menu_type").val();
     data.menu_price = $("#menu_price").val();
     console.log(data);
    
     var url = "http://localhost/restaurant/v3/index.php/insert_menu";
     $.ajax(
         {
                url: url, 
                type: 'post', 
                dataType: 'json',
                success: function(feedback){
                    alert(feedback.status);
                    window.location = '/restaurant/v3/index.php';
                },
                data: data
        });

}

$(function(){
    $("#btnSave").click(btnSave_Click);
});
