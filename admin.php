<?php
$db = mysqli_connect("localhost","root","","assignment7");
$sql = "SELECT * FROM tariff";
$result = $db->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<style>
    body
    {
        font-family: Calibri;
        background-image: linear-gradient(to right, cadetblue , #2cb5e8);
        color: white;
    }
</style>
<script>
    // JQUERY,AJAX
    $(document).ready(function(){
        $("#tariff").click(function(){
            $("#div1").load("alldata.php #tariff");
        });
        $("#service").click(function(){
            $("#div1").load("alldata.php #service");
        });
        $("#tran").click(function(){
            $("#div1").load("alldata.php #tran");
        });
        $("#purchase").click(function(){
            $("#div1").load("alldata.php #purchase");
        });
        $("#client").click(function(){
            $("#div1").load("alldata.php #client");
        });
    });
</script>
<!--HIDE AND SHOW-->
<script>
    $(document).ready(function(){
        $("#hide").click(function(){
            $("table").hide();
        });
        $("#show").click(function(){
            $("table").show();
        });
    });
</script>
<!--CSS JQUERY-->
<script>
    $(document).ready(function(){
        $("#returncolor").click(function(){
            alert("You successfully registered!!!" );
        });
    });
</script>
<style>
    body
    {
        font-family: Calibri;
    }
</style>
<body>
<p style="float: top;font-size: 140px;text-align: center">Administration</p>
<center><div style="">
        <button id="tariff" value="tariff">Tariff</button>
        <button id="service" value="service">Services</button>
        <button id="tran" value="transactions service">Transactions of services</button>
        <button id="purchase" value="purchase">Transactions of tariff purchases</button>
        <button id="client" value="client">CLient</button>
    </div></center>
<center><h4 id="gotit"></h4></center>
<center><div id="div1" style="margin-top: 10%"></div>
</center>
<br>
<center>
    <button id="hide">Hide</button>
    <button id="show">Show</button>
    <button id="returncolor">Return color of </button>
</center>

<!--JQUERY VAL-->
<script>
    $( "button" )
        .keyup(function() {
            var value = $( this ).val();
            $( "h4" ).text( value );
        })
        .keyup();
</script>

</body>
</html>
