<?php
include "global.php";

if($logged){
    header("Location: /home.php");
}

if($_POST){
	  if($_POST["username"] && $_POST["password"] && $_POST["email"]){
		$username = $mysqli->real_escape_string(strip_tags($_POST["username"]));
 	 	$password = $mysqli->real_escape_string(md5(strip_tags($_POST["password"])));
 	 	$email = $mysqli->real_escape_string(strip_tags($_POST["email"]));
 	 	$ip = $_SERVER['REMOTE_ADDR'];
	
		if($username && $password && $email){
				$checkquery = $mysqli->query("SELECT * FROM `accounts` WHERE `username`='$username'");
				$check = $checkquery->fetch_array();
				
				$checkquery2 = $mysqli->query("SELECT * FROM `accounts` WHERE `email`='$email'");
				$check2 = $checkquery2->fetch_array();

                     
                    $checkIpQ = $mysqli->query("SELECT * FROM `accounts` WHERE `ip`='$ip'");
                    $checkIp = $checkIpQ->fetch_array();

            if($check != 0){
                die("username has been taken");
            }elseif($checkIp > 5){
                die("IP bro");
            }elseif($check2 != 0){
                die("Email in use");
            }else{

                $mysqli->query("INSERT INTO `accounts` (`username`, `password`, `email`, `ip`) VALUES ('$username', '$password', '$email', '$ip')");
	
						 	setcookie("username", hash("sha512", $username), time() + 24 * 60 * 60, "/");
      							setcookie("password", $password, time() + 24 * 60 * 60, "/");	

                        header("Location: /");
            }
        }
   }
}

?>
<div class="StandardBoxHeader" style="width: 430px;">
<span>Register</span></div>
<div class="StandardBox" style="text-align: left;">
 <h1>Temp Register</h1>
  <form method="post">
   <label>username: </label>
  <input type="text" name="username">
   <br>
   <label>password: </label>
  <input type="password" name="password">
   <br>
   <label>email: </label>
  <input type="text" name="email">
   <br>
<input type="submit">
 <p>Before joining, you must agree to the <a href="/tos.php">Terms of Service</a></p>
 <form>
  </div>

<div id="Sidebars" style="margin-top: 10px;">
	<div class="StandardBoxHeader" style="width: 230px;"><span>Already Registered?</span></div>
		<div class="StandardBox" style="width:230px;">
			<p>If you just need to login, go to the <a id="ctl00_cphRoblox_HyperLinkLogin" href="/">Login</a> page.</p>
			<p>If you have already registered but you still need to download the game installer, go directly to <a id="ctl00_cphRoblox_HyperLinkDownload" href="/web/20111116084609/https://www.roblox.com/install/">download</a>.</p>
		</div>
		<div class="StandardBoxHeader" style="width: 230px;"><span>Hey Parents!</span></div>
		<div class="StandardBox" style="width:230px;">
		</div>
	</div>

    <div class="StandardBoxHeader" style="width: 620px;"><span>Create a Parent Account</span></div>
        <div class="StandardBox" style="width: 620px;">
	        <h3>Create an administrative account to control a child's access to ROBLOX</h3>

	        <div class="AgeOptions" style="height: 140px;">
                <div id="ParentAccount">
                    <div class="BuildersClubButton"><a id="ctl00_cphRoblox_HyperLink1" href="/web/20111116084609/https://www.roblox.com/Parents/Register.aspx"><img src="/web/20111116084609im_/https://www.roblox.com/images/ParentAccount.png" alt="" style="border-width:0px;"/></a></div>
                    <div class="Label"><a id="ctl00_cphRoblox_HyperLink2" href="/web/20111116084609/https://www.roblox.com/Parents/Register.aspx">Parent Account</a></div>
                </div>    
            </div>	
	    </div>
    </div>	
