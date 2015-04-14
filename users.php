<?php

class User {
	
	public $email;  // a property of the class User
	public $password; // another property of the class User
	
	public function login(){
		return 'Logging in ';
		
	} //a method
	
	public function logout(){
		return 'Logging out ';
		
	} //another method
	
	const MINCHARS = 8; // define a constant that's only accessible to this User class
	
	public function setPassword($string) {
		if (strlen($string) < self::MINCHARS) {
			throw new Exception("The password should be at least ". self::MINCHARS ." characters long.");
		}
		
		$this->password = hash('sha256', $string);
	}
	
}



?>

