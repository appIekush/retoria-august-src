<?php
include "global.php";

$uid = $user['id'];
$cdusername = $mysqli->real_escape_string(strip_tags(stripslashes($_POST['cdusername'])));

$getid = $_GET['id'];
	if(!$getid){
		if($logged){
			$getid = $usr['id'];
	}
		}
	$userquery = $mysqli->query("SELECT * FROM `accounts` WHERE `id`='$getid'");
		$user = $userquery->fetch_array();
			if($logged) {
				$uid = $usr['id'];
            }
?>		
<head>
 <title>Retoria - <?php echo $user["Username"]; ?>
 </title>
</head>

 <div class="MyRobloxContainer">
        
<div style="width:900px;height:30px;font-family:Verdana, Helvetica, Sans-Serif; clear:both; display:none;">
    <span id="ctl00_cphRoblox_rbxHeaderPane_nameRegion" style="font-size:20px; font-weight:bold;"><?=$user['Username'];?></span>
</div>



        
        <div style="clear: all; margin: 0; padding: 0;"></div>
        <!--[if IE 6]>
      <table><tr><td width="450px" valign="top">
      <![endif]-->
        <div class="Column1d">
            

<div class="StandardBoxHeader">
    <span id="ctl00_cphRoblox_rbxUserPane_lUserRobloxURL"><?=$user['Username'];?>'s Profile</span></div>
<div class="StandardBox" style="position: relative">
    
    <div style="width: 100%">
        <div id="ctl00_cphRoblox_rbxUserPane_onlineStatusRow">
            <div style="text-align: center;">
                
                
                <a id="ctl00_cphRoblox_rbxUserPane_UserOnlineStatusHyperLink" href="/web/20100723233305/http://www.roblox.com/Havemeats-Minigames-20-item?id=309347" style="clear: none">[ Broken ]</a>
            </div>
        </div>
        <div>
            <div>
                <center>
                    <div style="margin-bottom: 10px;">
                        <span style="font-size: 13px;">
                            <a id="ctl00_cphRoblox_rbxUserPane_hlUserRobloxURL" href="user.php?id=<?=$user['id'];?>">http://re.tinobe.rf.gd/user.php?id=<?=$user['id'];?></a></span><br/>
                        
                    </div>
                    <a id="ctl00_cphRoblox_rbxUserPane_AvatarImage" disabled="disabled" title="BlueOreo36" onclick="return false" style="display:inline-block;"><img src="/thumbnails/character.png" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="BlueOreo36" blankurl="http://t0bg.roblox.com/blank-150x200.gif"/></a>
                    <br/>
                    
                    <!-- Eliminate the old myUser -->
                    

<br/>
<div class="UserBlurb" style="overflow-y: auto; max-height: 450px; ">
<span id="ctl00_cphRoblox_rbxUserPane_rbxPublicUser_lBlurb"><?=$user['description'];?></span>
</div>

<span style="font-weight:bold; font-size:13px;">     
<a id="party_link" style="display:none;" href="#" onclick="ChatBar.ShowFriends();Party.InviteUser(6876883);return false;">Invite To Party</a>&nbsp;&nbsp;
<a id="chat_link" style="display:none;" href="#" onclick="ChatBar.ShowFriends();ChatBar.ToggleChat(6876883, 'BlueOreo36');return false;">Start Chatting</a>&nbsp;&nbsp;

<span id="ctl00_cphRoblox_rbxUserPane_rbxPublicUser_MessagingDisabledLink"><b>Messaging Disabled</b><img src="/web/20100723233305im_/http://www.roblox.com/images/buttons/questionmark-25x25.png" id="ctl00_cphRoblox_rbxUserPane_rbxPublicUser_MessagingDisabledInfo" border="0" style="height: 16px" alt="User must be logged in to send messages."/></span>&nbsp;&nbsp;



</span>

<br/>
                    <div class="ProfileAlertPanel" style="display: none; margin: 15px auto 0px auto; width: 205px;">
                        
                        <br/>
                    </div>
                    
                    
                </center>
            </div>
        </div>
    </div>
</div>

<div class="StandardBoxHeader">
ROBLOX Badges
</div>

<div class="StandardBox">
	<table id="ctl00_cphRoblox_rbxUserBadgesPane_dlBadges" cellspacing="0" align="Center" border="0">
	<tr>
		<td>
			<?php if($user['administrator'] == '1'){ ?>
              <div class="Badge">
				<div class="BadgeImage"><a id="ctl00_cphRoblox_rbxUserBadgesPane_dlBadges_ctl02_hlHeader" href="Badges.aspx"><img id="ctl00_cphRoblox_rbxUserBadgesPane_dlBadges_ctl02_iBadge" src="http://web.archive.org/web/20100723233305im_/http://www.roblox.com/images/Badges/Friendship-75x75.png?v=2" alt="This badge is given to players who have embraced the Roblox community and have made at least 20 friends. People who have this badge are good people to know and can probably help you out if you are having trouble." height="75" border="0"/></a></div>
				<div class="BadgeLabel"><a id="ctl00_cphRoblox_rbxUserBadgesPane_dlBadges_ctl02_HyperLink1" href="Badges.aspx">Administrator</a></div>
			</div>
        <?php } ?>
		<td></td>
	</tr>
</table>
	
</div>