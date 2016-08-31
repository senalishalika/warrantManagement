<!-- <html>
<head>

<link rel="stylesheet" href="css/fluid-grid16-1100px.css">
 <script src="js/respond-min.js"></script>
<script src="js/jquery164min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
<link rel="stylesheet" href="css/m.css" media="screen" type="text/css" />
</head>
<body> -->



   
         <div class="ad">
            <h1>Add Dealer</h1>
                <table>
                <form>
                    <tr>
                    <td>Dealer Name</td>
                        <td>NIC</td>
                    </tr>
                    <tr>
                    <td width="400px"><input type="text" name="name" style="width: 300px"></td>
                        <td><input type="text" name="nic" style="width: 200px"></td>
                    </tr>
                    <tr>
                        <td>Dealer Address</td>
                    <td>Area number</td>

                    </tr>
                    <tr>
                        <td><input type="text" name="dealeraddress" style="width: 300px"></td>
                    <td><select class="dropdown">
                        <option value="Colombo">Col01</option>
                        <option value="Dehiwala">De01</option>
                        <option value="Maharahama">Mahara01</option>
                        <option value="Nugegoda">Nuge01</option>
                    </select></td>

                    </tr>
                    <tr>

                        <td>Relevant Salesperson</td>
                        <td>Mobile No</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="relsale" style="width: 200px"></td>
                        <td><input type="text" name="mobno" style="width: 200px"></td>
                    </tr>
                    <tr>

                        <td>Telephone No</td>
                        <td>E mail</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="telno" style="width: 200px"></td>
                        <td><input type="text" name="email" style="width: 200px"></td>
                    </tr>
                    <tr>

                        <td>Fax No</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="faxno" style="width: 200px"></td>
                    </tr>
                    <tr>
                        <td></td>
                   <td> <button type="button">SAVE</button></td>
                    </tr>

                </form>
                
                </table>
            </div>

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

    } else if (id == "updealer"){

        url = "updealer.php";

    }else if(id=="deldealer"){

        url = "deldealer.php";
    }


     $.ajax({


            
        type:"post",
        url:url,
        success:function(data){
            $('div.content > div.form').html("");            
            $("div.content> div.form").html(data);

        }



    });

    



});







</script>

