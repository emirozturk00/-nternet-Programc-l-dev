<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background-image: url("indir.png");
        }
        
    </style>
</head>
<body style="position: relative; height: 100vh; overflow: hidden;">

<form style="position: absolute; top: 10%; left: 5%; transform: translate(-30%, -30%);" action="index.php" method="post" >
<div style="color: crimson;">
    <h1>Emir Öztürk <br>
        2115101053
    </h1>
</div>
<input type="text" required placeholder="ID" name="ad"><br>
<input type="password" required placeholder="password" name="sifre"><br>
<input type="submit" value="GİRİS">

</form>

<?php 
    if(isset($_REQUEST['ad']) and isset($_REQUEST['sifre'])){
        if(($_REQUEST['ad'] =="bpr") and ($_REQUEST['sifre']==123) ){
        header('location: NotEkle.php');
        }else{
        echo "<script>alert('Sifre veya kullanici adiniz hatali.')</script>";
        }
    }

?>
    
</body>
</html>