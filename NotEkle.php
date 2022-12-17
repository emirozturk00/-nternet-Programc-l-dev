<?php session_start();
if(isset($_SERVER['HTTP_REFERER'])){

}else{
    echo "<a href='index.php'>Anasayfaya don</a>";
    return;
}
?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>notekle</title> 
    <style>
        body {
            background-image: url("indir.png");
        }
    </style>
</head>
<body style="position: relative; height: 100vh; overflow: hidden;">

<form style="position: absolute; top: 20%; left: 10%; transform: translate(-50%, -50%);" action="NotEkle.php" method="post" >

<span style="color: crimson;">GNO Hesaplayici</span><br>
<input style="color: blueviolet ;" type="text" required placeholder="Kalkulus" name="a"><br>
<input style="color: blueviolet ;" type="text" required placeholder="Ataturk Ilkeleri" name="i"><br>
<input style="color: blueviolet ;" type="text" required placeholder="Internet Programciligi" name="m"><br>
<input style="color: blueviolet ;" type="text" required placeholder="Ingilizce" name="b"><br>
<input style="color: crimson;" type="submit" value="Hesapla"><br>   
<?php $date = date('m/d/Y h:i:s a', time());
echo "Giris Tarihi : " .$date;?>

</form>

<?php 
    if(isset($_REQUEST['a']) and isset($_REQUEST['i']) and isset($_REQUEST['m']) and isset($_REQUEST['b'])){
        if(($_REQUEST['a'] >=0 and $_REQUEST['a'] <=100) and ($_REQUEST['i'] >=0 and $_REQUEST['i'] <=100) and ($_REQUEST['m'] >=0 and $_REQUEST['m'] <=100) and ($_REQUEST['b'] >=0 and $_REQUEST['b'] <=100)){
        $_SESSION['a'] = $_REQUEST['a'];
            $_SESSION['i'] =$_REQUEST['i'];
            $_SESSION['m'] =$_REQUEST['m'];
        $_SESSION['b'] = $_REQUEST['b'];
        
        }else{
        echo "<script>alert('0 ile 100 arasinda bir not giriniz.')</script>";
        }
    }
if (isset($_SESSION['a']) and isset($_SESSION['i']) and isset($_SESSION['m']) and isset($_SESSION['b'])){
    header('location: NotHesapla.php');
}

?>
</body>
</html>