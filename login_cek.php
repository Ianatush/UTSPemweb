<?php
include "connect.php";
if(isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$sql = mysqli_query($conn, "SELECT * FROM identitas where Nama='$nama' and Email='$email'");
    $data = mysqli_fetch_array($sql);
    $namacek = $data['Nama'];
	$emailcek = $data['Email'];
	
	
	if (strtolower($nama)==strtolower($namacek) && strtolower($email)==strtolower($emailcek) ) {
		session_start();
		$_SESSION['lives']=5;
		$_SESSION['score']=0;
		$_SESSION['nama']=$namacek;
		$_SESSION['email']=$emailcek;
		echo "<script>alert('Anda berhasil Log In. Sebagai : $namacek');</script>";
            echo "<meta http-equiv='refresh' content='0; url=userlama.php'>";
		
	} else {
		session_start();
			$_SESSION['lives']=5;
			$_SESSION['score']=0;
			$_SESSION['nama']=$_POST['nama'];
			$_SESSION['email']=$_POST['email'];
			echo "<meta http-equiv='refresh' content='0; url=quiz.php'>";
	}
	
	
}

?>
