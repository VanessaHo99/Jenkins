<?php 
    session_start();
	
	if(isset($_POST['submit']))
	{
		if((isset($_POST['email']) && $_POST['email'] !='') && (isset($_POST['password']) && $_POST['password'] !=''))
		{
			$email = trim($_POST['email']);
			$password = trim($_POST['password']);
			
			if($email == "user@example.com")
			{	
			
			}
		
		}
	}
    function verifyPwd($pwd){
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
    <form method="post" action="" name="signin-form">
    <div class="form-element">
        <label>Password</label>
        <input type="password" name="password" required />
    </div>
    <button type="submit" name="login" value="login">Login</button>
        </form>
?>