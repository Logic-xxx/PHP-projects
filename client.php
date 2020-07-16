<?php
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
        });
    </script>
</head>
<style>
    body
    {
        font-family: Calibri;
        background-image: linear-gradient(to right, #1fc8db , #2cb5e8);
        color: white;
    }
</style>
<body>
<h1 style="float: top;font-size: 140px;text-align: center">Client</h1>
<center><div style="">
<button id="tariff">Tariff</button>
    <button id="service">Services</button>
    <button id="tran">Transactions of services</button>
    <button id="purchase">Transactions of tariff purchases</button>
</div></center>
<br><br>

<p style="text-align: center;font-size: 40px" id="table"></p>
<center><div id="div1" style="margin-top: 10%"></div>
</center>

<?php

?>
<!--JQUERY TEXT-->
<script>
    $( "#table" ).text( "My table" );
</script>
</body>
</html>
