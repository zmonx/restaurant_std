$(function(){
    showData();
});



    function showData(){
        var url = "http://localhost/restaurant/v3/index.php/getdb";
        
        $.getJSON(url).done(function( data ) {
            console.log(JSON.stringify(data));

            var line = "";
            $.each(data, function(k,item){
                console.log(item);
                line += "<tr><td align='center'>"+ item.menu_id+"</td>";
                line += "<td>"+item.menu_name+"</td>";
                line += "<td align='center'>";
                
                switch(item['menu_type']){
                        case "1":
                            line +="Meat Dish";break;
                        case "2":
                            line +="Dessert";break;
                        case "3":
                            line +="Snack";break;    
                    }
                line +="</td>";
                line += "<td>"+item.menu_price+"</td>";
                line += "</tr>";
            });

            $("#tblData").empty();
            $("#tblData").append(line);
        });
    }

  
