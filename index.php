<!DOCTYPE html>
<html>
<head>
	<title>Login/Frans/sintus</title>
	<link rel="stylesheet" type="text/css" href="frans.css">
</head>
<body>
 
	<h1><br/> LOGIN</h1>

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="www.google.com">kembali</a>
			
		</form>
		</center><h6>@Frans_wesli</h6>
	</div>
 
 
</body>
</html>
