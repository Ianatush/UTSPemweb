
<?php
session_start();
$a= rand(0,20);
$b= rand(0,20);
if($_SESSION['lives']<=0){
    echo $session['lives'];
    header ("location:halloffame.php");
}
?>

<html>
<head>
<title>Mathgame</title>
<link rel ="stylesheet" href="css.css">
</head>
<body>
<div id="body" style="width:400px; height:162px;">

    <div id="head"><strong>SOAL</strong>
    </div>

    <form action="" method="POST">
    <table width="100%" height="100%">
    	<tr height="15"></tr>
        <tr>
            <td align="center">
            Berapakah Hasil Dari <?php echo $a?>+<?php echo $b?> ??
            <input type ="hidden" name="a" value="<?php echo $a;?>"></td>
            <input type ="hidden" name="b" value="<?php echo $b;?>"></td>
        </tr>
        <tr>
            <td align="center"><input type="text" class="form"Placeholder="Masukan Jawaban "align="center" name="isi" required></td>
        </tr>
        <tr>
            <td align="center"><button type="submit" class="tombol"name="jawab" value=jawab><b>Jawab</b></td>
        </tr>
        <tr height="20"></tr>
        
    </table>
    </form>
    
    
</div>
</body>
</html>

<?php
if(isset($_POST['jawab'])){
    if($_POST['isi']==$_POST['a'] + $_POST['b']){
        $_SESSION['score']+=10;
        header("location:hasil.php?hasil=benar");
    }else{
        $_SESSION['lives']-=1;
        $_SESSION['score']-=2;
        if($_SESSION['lives']>0){
            header("location:hasil.php?hasil=salah");
        }else{
            include "connect.php";
            $query = mysqli_query($conn, "insert into identitas set nama='".$_SESSION['nama']."', email='".$_SESSION['email']."', score='".$_SESSION['score']."'");
            header("location:halloffame.php");
        }
    }
}

?>