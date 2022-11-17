<?php
use PHPUnit\Framework\TestCase;
require 'login.php';

class LoginTest extends TestCase {

	public $loginInstance;
	
	public function setup():void {
		
		$this->loginInstance = new Login();
	}
	
	public function verifyPwd($pwd) {
		$path = $fopen("https://github.com/danielmiessler/SecLists/blob/master/Passwords/Common-Credentials/10-million-password-list-top-1000.txt", "r")
         
        while (!feof($path)) 
            $line = fgets($path, 4096)
            if (preg_match($pwd, $line)){
                header("Location:index.php");
            }
            else
            {
                header("Location:login.php");
            }
    }
	}
}