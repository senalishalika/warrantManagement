update php


<script>
        
    $("div.content>ul#topnavi>li>a").click( function(e){

        e.preventDefault();

    });


    $("ul#topnavi>li>a").click( function(){
    var id = this.id;
    console.log(id);

    $('div.content > div.form').html("");

     if (id == "viewdealer"){

        url = "dd.php";

    }

     else if (id == "adddealer"){

        url = "adddealer.php";

    } else if (id == "updealer"){

        url = "updealer.php";

    }else if(id=="deldealer"){

        url = "deldealer.php";
    }


     $.ajax({


            
        type:"post",
        url:url,
        success:function(data){
        	
            $("div.content> div.form").html(data);

        }



    });

    



});







</script>

