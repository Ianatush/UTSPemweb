<?php 
session_start();
if($_SESSION['lives']>0){
    echo $_SESSION['lives'];
    header("location:quiz.php");
}
include "connect.php";
?>
<html>
<head>
<title>Mathgame</title>
<link rel ="stylesheet" href="css.css">
</head>
<body>
<div id="body" style="width:400px; height:162px;">

    <div id="head"><strong>HALL OF FAME</strong></div>
    <form>
    <table width="100%" height="100%">
    	<tr height="15"></tr>
        <tr>
            <td align="center">Hello <?php echo $_SESSION['nama'];?>, Sayang sekali permainan sudah selesai. Semoga kali ini bisa lebih baik :)<br> 
            Score : <?php echo $_SESSION['score']; ?><br>
            <a href ="index.php" class="tombol">Main Lagi</a>
            </td>
        </tr>
        <tr height="20"></tr> 
    </table>

    <div class="zebra_table">
    <table width="100%" height="5%" align="center"  cellspacing="0" cellpadding="5">
    <thead>
             <tr>
             <th width="5%" align="center">No</td>
             <th width="25%">Nama</td>
             <th width="30%">Email</td>
             <th width="10%">Score</td>
        	 </tr>
    </thead> 
    
    <?php
    $result=mysqli_query($conn, "SELECT * FROM identitas ORDER BY score DESC");
    $no=1;
    foreach($result as $row){
        echo "<tr>
        <td><h1> $no <h1></td>
        <td><h1>".$row['Nama']."<h1></td>
        <td><h1>".$row['Email']."<h1></td>
        <td><h1>".$row['Score']."<h1></td>
        </tr>";
        $no++;
        if ($no>10) {
        break;
        }
    }
    ?>    
        
        </tbody>
	</table>
	</div>      
    </form>   
</div>
</body>
</html>