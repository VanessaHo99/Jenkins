<?php 
    session_start();
	
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
    <form action = "index.php" method = "post">
    <div class="form-element">
        <label>Password</label>
        <input type="password" name="password" required />
    </div>
    <button type="submit" name="login" value="login">Login</button>
        </form>
?>