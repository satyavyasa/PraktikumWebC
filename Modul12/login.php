<?php 

require 'koneksi.php';
if( isset($_POST["login"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($koneksi, "SELECT * FROM akun WHERE username = '$username'");

	if( mysqli_num_rows($result) === 1) {
		$row = mysqli_fetch_assoc($result);
		if($password == $row["password"]) {

			$_SESSION["login"] = true;
			$_SESSION["username"] = $row["username"];
			$_SESSION["role"] = $row["role"];
			header("Location: index.php");
			exit;
		}
	}

	$error = true;
}
if( isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css" />
    <style>
        body{
	font-family: sans-serif;
	background: white;
}
 
h1{
	text-align: center;
	font-weight: 300;
}
 
.tulisan_login{
	text-align: center;
	text-transform: uppercase;
}
 
.kotak_login{
	width: 350px;
	background: #00FFFF;
	margin: 80px auto;
	padding: 30px 20px;
}
 
label{
	font-size: 11pt;
}
 
.form_login{
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
}
 
.tombol_login{
	background: #CD853F;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}
 
.link{
	color: #232323;
	text-decoration: none;
	font-size: 10pt;
}
    </style>
</head>
<body>
    <h1>Halaman Login</h1>
    <div class="kotak_login">
		<?php if(isset($error)) : ?>
			<p style="color: red;">Username atau Password Anda Salah!</p>
		<?php endif; ?>
        <form action="" method="post">
            <label for="username"> Username
                <input type="text" name="username" id="username" class="form_login" placeholder="Masukkan username">
            </label>
            <label for="username"> Password
                <input type="password" name="password" id="password" class="form_login" placeholder="Masukkan password">
            </label>

            <input type="submit" name="login" class="tombol_login" value="LOGIN">

            <br>
            <br>
        </form>
    </div>
    
</body>
</html>