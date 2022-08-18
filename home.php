<?php
include "global.php";

if(!$logged){
    header("Location: /index.php");
}

$uID = $usr['id'];
$user = $usr['Username'];
$body = $mysqli->real_escape_string(strip_tags(stripslashes($_POST['bodyit'])));

if($_POST['bodyit']){
       $mysqli->query("INSERT INTO `feed` (`id`, `body`, `createdby`, `createdid`) VALUES (NULL, '$body', '$user', '$uID')");
        die("<META http-equiv=refresh content=1;URL=home.php>");
    }
?>
<title>Retoria - Home</title>

<div class="Column1c">
    
        <div class="ShadowedStandardBox">
           <div class="Shadow"></div>
           <!-- <div class="Header">Welcome</div> -->
           <div class="Content" style="height: 252px; padding: 8px 8px 8px 8px;">
                <div style="float: left;">
                    
<div id="LoginViewContainer">

            <div class="DarkGradientBox" style="height: 246px; text-align: center; color: black;">
                <div class="DGB_Header">
                Hello, <?=$usr['Username'];?>
                </div>
                <div class="DGB_Content" style="color: black;">
                <img src="/thumbnails/character.png" style="width: 123px; height: 140px;">
                 <br><br>
                  Bucks: <?=$usr['Bucks'];?>
                  Friends: 0
                </div>
            </div>
        
</div>
       </div>
                
                <div style="float: right;">
                    
                            <object style="width: 380px; height: 250px;">
                                <param name="movie" value="http://www.youtube.com/v/OBUlpvyInzg&amp;hl=en&amp;fs=1&amp;rel=0&amp;color1=0x3a3a3a&amp;color2=0x999999"></param>
                                <param name="allowFullScreen" value="true"></param>
                                <param name="allowscriptaccess" value="always"></param>
                                <param name="wmode" value="transparent"></param>
                                <embed wmode="transparent" src="http://web.archive.org/web/20100722093836oe_/http://www.youtube.com/v/OBUlpvyInzg&amp;hl=en&amp;fs=1&amp;rel=0&amp;color1=0x3a3a3a&amp;color2=0x999999" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="380" height="250"></embed>
                            </object> 
                        
                    
                </div>      
               
           </div>
        </div>
<br>

<div class="StandardBoxHeader" style="width: 340px;">
<span>Settings</span></div>
<div class="StandardBox" style="width: 530px;">
 <h2>Settings</h2>
<ul>
 <li><a href="/settings/description.php">Change About</a>
 </li>
</ul>
  </div>

<div class="StandardBoxHeader" style="width: 620px;"><span>Feed</span></div>

<div class="StandardBox" style="height: 1139px; min-height: 1139px; overflow-y: scroll; width: 620px;">
    
        <h2><?=$usr['Username'];?> Feed: </h2>

          <form method="post"> 
           <label>Post</label>
           <input type="text" name="bodyit">
            <input type="submit">
          </form>
            <br>
        <br>
    <br>

        <?php 
        $feedquery = $mysqli->query("SELECT * FROM `feed` ORDER BY id DESC");
        while($feedRow = $feedquery->fetch_array()){ 
        ?>
        <div style="border-top: solid; border-bottom: solid; border-color: lightsteelblue;">
          <h4><a href="user.php?id=<?=$feedRow['createdid'];?>"><?=$feedRow['createdby'];?></a></h4>
           <img src="/thumbnails/character.png" height="110px" width="90px">
            <p><?php echo $feedRow['body']; ?></p>
        </div>
        <?php } ?>
           
           
                </div>
            </div>

<style>
    .PlaceStatLabel
    {
	    /* intentionally empty */
    }
    .PlaceStatValue
    {
    	/* color: #888; */    	
        margin-left: 15px;
        font-weight: bold;
    }
</style>
