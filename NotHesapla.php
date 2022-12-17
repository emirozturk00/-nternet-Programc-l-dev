<?php session_start();

if(isset($_SERVER['HTTP_REFERER'])){

}else{
    echo "<a href='index.php'>Anasayfaya don</a>";
    return;
}

$Ort = ($_SESSION['a'] + $_SESSION['i'] + $_SESSION['m'] + $_SESSION['b']) / 4;
$Harf;
$GNO;

switch($Ort){
    case ($Ort <= 100 and $Ort >= 88):
        $GNO = 4.00;
        $Harf= "AA";
        break;
    case ($Ort <= 87 and $Ort >= 81):
            $GNO = 3.50;
            $Harf= "BA";
        break;
        case ($Ort <= 80 and $Ort >= 74):
            $GNO = 3.00;
            $Harf= "BB";
        break;
        case ($Ort <= 73 and $Ort >= 67):
            $GNO = 2.50;
            $Harf= "CB";
        break;
        case ($Ort <= 66 and $Ort >= 60):
            $GNO = 2.00;
            $Harf= "CC";
        break;
        case ($Ort <= 59 and $Ort >= 53):
            $GNO = 1.50;
            $Harf= "DC";
        break;
        case ($Ort <= 52 and $Ort >= 46):
            $GNO = 1.00;
            $Harf= "DD";
        break;
        case ($Ort <= 45 and $Ort >= 39):
            $GNO = 0.50;
            $Harf= "FD";
        break;
        case ($Ort <= 38 and $Ort >= 0):
            $GNO = 0.00;
            $Harf= "FF";
        break;
        default:
}

  function emirozturk() {
    session_destroy();
  }

?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nothesapla</title>
    <style>
        body {
            background-image: url("indir.png");
        }
    </style>

</head>
<body style="position: relative; height: 100vh; overflow: hidden;">

<div style="position: absolute; top: 20%; left: 10%; transform: translate(-50%, -50%);">

    <div style="color: blue;">Kalkulus : <?php echo $_SESSION['a']; ?> </div>
    <div style="color: blue;">Ataturk Ilkeleri : <?php echo $_SESSION['i']; ?> </div>
    <div style="color: blue;">Internet Programciligi : <?php echo $_SESSION['m']; ?> </div>
    <div style="color: blue;">Ingilizce : <?php echo $_SESSION['b']; ?> </div>
    <div style="color: red;">--------------</div>
    <div style="color: blue;">Ortalama : <?php echo $Ort?></div>
    <div style="color: blue;">GNO : <?php echo $GNO?></div>
    <div style="color: blue;">GNO Harf : <?php echo $Harf?></div>
    <div style="color: red;">--------------</div>
    <span><a href="NotEkle.php">Tekrar hesapla</a></span> <span><a href="index.php" onclick="<?php emirozturk();?>">Cikis</a></span><br>
    <?php $date = date('m/d/Y h:i:s a', time());
    echo "Giris Tarihi : " .$date;?>    
<html>
</div>
</body>
</html>
<?php 

?>