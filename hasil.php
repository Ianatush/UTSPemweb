<?php
session_start();
if($_GET['hasil']=='benar'){
    $hasil ="Hallo " .$_SESSION['name']." Selamat Jawaban Anda Benar...";
}else if($_GET['hasil']=='salah'){
    $hasil ="Hallo " .$_SESSION['name']." Sayang Jawaban Anda Salah... tetap semangat ya !!!";
}
?>
<html>
<head>
<title>Mathgame</title>
<link rel ="stylesheet" href="css.css">
</head>
<body>
<div id="body" style="width:400px; height:162px;">

    <div id="head"><strong>Math Game</strong>
    </div>

    <form action="quiz.php" method="POST">
    <table width="100%" height="100%">
    	<tr height="15"></tr><tr>
		
            <td align="center"><?php echo $hasil;?></td>
        </tr>
        <tr>
		
            <td align="center">Lives : <?php echo $_SESSION['lives'];?> | Score : <?php echo $_SESSION['score'];?> </td>
        </tr>
        <tr>
            <td align="center"><button type="submit" class="tombol"name="submit"><b>Lanjut</b></td>
        </tr>
        <tr height="20"></tr>
        
    </table>
    </form>
    
    
</div>
</body>
</html>