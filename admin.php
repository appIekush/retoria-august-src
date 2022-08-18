<?php
include "global.php";
if($usr['administrator'] == '0'){
    header("Location: /");
}

$bid = $mysqli->real_escape_string(strip_tags(stripslashes($_POST['bid'])));

$shout2 = $mysqli->real_escape_string(strip_tags(stripslashes($_POST['shoutit'])));	
$uID = $usr['id'];		
if($_POST["shout"]){ 			
    $mysqli->query("UPDATE `shout` SET `text`='$shout2'");
die("<META http-equiv=refresh content=1;URL=/admin.php>");	
  }

if($_POST['adminhire']){
    $mysqli->query("UPDATE `accounts` SET `administrator`='1' WHERE `id`='$bid'");
     die("<META http-equiv=refresh content=1;URL=/admin.php");
}
?>
<title>RETORIA - ADMIN</title>
  <div class="StandardBoxHeader" style="width: 620px;"><span>Administration</span></div>
        <div class="StandardBox" style="width: 620px;">
	        <h3>Manage and Do stuff</h3>

	        <form method="post">
             <label>Hire Staff</label>
              <input type="text" name="bid">
              <br><br>
            <input type="submit">
        </form>
                </div>

   
