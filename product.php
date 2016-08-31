<link rel="stylesheet" href="css/fluid-grid16-1100px.css">
 <script src="js/respond-min.js"></script>
<script src="js/jquery164min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

<script>
        
    $("div.content>ul#topnavi>li>a").click( function(e){

        e.preventDefault();

    });


    $("ul#topnavi>li>a").click( function(){
    var id = this.id;
    console.log(id);

    $('div.content > div.form').html("");

     if (id == "addbattery"){

        url = "addbattery.php";

    } else (id == "upbattery"){

        url = "upbattery.php";

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

<ul id="topnavi">
            <li style="float: left;"><a href="" id="viewbattery">View Battery Types</a></li>
            <li  style="float: left;"><a href="" id="addbattery">Add New Battery Type</a></li>
          
            <li  style="float: left;"><a href="" id="delbattery">Delete Battery Type</a></li>
</ul>    
<div class="wrap">
  <div class="grids">
    <div class="grid-4 grid"> <img src="img/img/1.png" alt=""> </div>
    <div class="grid-4 grid">
      <h5>MFS65R/L</h5>
            <p></p>
          </div>
    <div class="grid-4 grid"> <img src="img/img/6.png" alt=""> </div>
    <div class="grid-4 grid">
            <h5>MF105D31R/L</h5>
            <p></p>
          </div>
        </div>
        <!--end of grids-->
</div>
<!--end of wrapper-->
<!--===================================================  second row of Content Part 3 ================================================-->
<div class="wrap">
  <div class="grids">
    <div class="grid-4 grid"> <img src="img/img/3.png" alt=""> </div>
    <div class="grid-4 grid">
      <h5>MF105D31R/L</h5>
      <p></p>
    </div>
    <div class="grid-4 grid"> <img src="img/img/4.png" alt=""> </div>
    <div class="grid-4 grid">
      <h5>65D31R/L</h5>
      <p></p>
    </div>
  </div>