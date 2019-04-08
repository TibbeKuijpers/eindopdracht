<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Naamloos document</title>
</head>

<body>
	
	<?php
	
	//sign in script
	
	class User {
		var $userPower = "Guest";
		var $username;
		var $password;
		
		
		function userInfo(){
			return "Welcome {$this->userPower} {$this->username}";
		}
	}
	
	class Useradmin extends User {
		
		function priveleges(){
			if ($this->userPower === "Admin" && $this->userPower !== "Guest"){
				return "You can manage settings and alter user info";
			}
		}
	}
		
	class Userguest extends User {
		function priveleges(){
			if ($this->userPower == "Guest" && $this->userPower !== "Admin"){
				return "You can view the page and alter your own info. Get admin status to alter settings and other information";
			}
		}
	}
	
	$admin = new Useradmin;
	$admin->userPower = "Admin";
	$admin->username = "Pablo Escobar";
	$admin->password = "Esco456";
	
	
	$guest = new Userguest;
	$guest->userPower = "Guest";
	$guest->username = "Hermanos Escobar";
	$guest->password = "Esco123";
	
	echo $guest->userInfo();
	echo "<br>";
	echo $guest->priveleges();
	echo "<br><br>";
	echo $admin->userInfo();
	echo "<br>";
	echo $admin->priveleges();
	
	?>
	
</body>
</html>