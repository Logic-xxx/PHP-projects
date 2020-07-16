<?php

//CONNECTION TO DATABASE
$db=mysqli_connect('localhost','root','','assignment7');
$adminEmail = "muhammedkaldybay@gmail.com";
$adminPassword = "123456";
$password="";
$sql = "SELECT userid,email, password FROM assignment7";
$result = $db->query($sql);
if($_SERVER["REQUEST_METHOD"]=="POST") {
    if (isset($_POST['submit'])) {
        if ($adminEmail == $_POST['username'] && $adminPassword == $_POST['password']) {
            header("Location: admin.php");
            exit;
        }
        while ($row = $result->fetch_assoc()) {
            if ($row["email"] == $_POST['username'] && $row["password"] == $_POST['password']) {
                $password=$row["userid"];
                $_SESSION['email'] = $password;
                header("Location: client.php");
                exit;
            }
        }
    }
}
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
<body>

<center><div class="container" >
    <img src="data:image/png;base64,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">
    <form action="" method="post">
        <div class="form-group" style="width: 40%">
            <label style="margin-left: -400px" for="usr">Email:</label>
            <input type="text" class="form-control" id="usr" name="username">
        </div>
        <div class="form-group" style="width: 40%">
            <label for="pwd" style="margin-left: -370px">Password:</label>
            <input type="password" class="form-control" id="pwd" name="password">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div></center>

</body>
</html>
