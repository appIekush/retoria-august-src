<?php
error_reporting(0);
ini_set("display_errors", 1);

include "global.php";

if($logged){
    header("Location: home.php");
}

if($_POST){
 	 if($_POST["username"] && $_POST["password"]){
	  
		$username = $mysqli->real_escape_string(strip_tags($_POST["username"]));
 	 	$password = $mysqli->real_escape_string(md5(strip_tags($_POST["password"])));
	
		if($username && $password){
				$checkquery = $mysqli->query("SELECT * FROM `accounts` WHERE `username`='$username'");
				$check = $checkquery->fetch_array();
				
				$checkquery2 = $mysqli->query("SELECT * FROM `accounts` WHERE `password`='$password'");
				$check2 = $checkquery2->fetch_array();

            if(!$check){
                die("username doesnt exist");
            }elseif(!$check2){
                die("Incorrect Password");
            }else{
	              setcookie("username", hash("sha512", $username), time() + 24 * 60 * 60, "/");
                  setcookie("password", $password, time() + 24 * 60 * 60, "/");
                  header("Location: home.php");
            }
        }
      }
    }
?>
<title>RETORIA - INDEX</title>
 <style>

        /* override 2 column layout classes for this page only because the front page requires a wider right column */
        .Column1c
        {
        	font-family: Verdana;
            width: 570px;
            float: left;
        }

        .Column2c
        {
        	font-family: Verdana;
            width: 310px;
            float: right;
        }

        .Column1c .ShadowedStandardBox
        {
            width:561px;
        }

        .Column1c .ShadowedStandardBoxHeader
        {
            width:551px;
        }

        .Column2c .ShadowedStandardBox
        {
            width:310px;
        }

        .Column2c .ShadowedStandardBoxHeader
        {
            width:300px;
        }
        
    </style>
<!--[if IE 6]>
<table width="900px">
<tr>
<td width="550px" align="left" valign="top">
<![endif]-->
    <!-- left column -->
    <div class="Column1c">
    
        <div class="ShadowedStandardBox">
           <div class="Shadow"></div>
           <!-- <div class="Header">Welcome</div> -->
           <div class="Content" style="height: 252px; padding: 8px 8px 8px 8px;">
                <div style="float: left;">
                    
<div id="LoginViewContainer">

            <div class="DarkGradientBox" style="height: 246px; text-align: center; color: black;">
                <div class="DGB_Header">
                    Member Login
                </div>
                <div class="DGB_Content" style="color: black;">
                    <!-- Enter key submission hack - IE -->
                <form method="post">
                    <div style="padding-top: 4px; padding-bottom: 4px; color: black;">
                        <div style="margin-bottom: 7px; color: black;">
                        </div>
                        <label class="DGB_Label">
                            Username:</label>
                            <input type="text" style="width: 120px;" class="DGB_TextBox" name="username" />
                    </div>
                    <div style="padding-top: 4px; padding-bottom: 4px;">
                        <div style="margin-bottom: 7px;">
                        </div>
                        <label class="DGB_Label">
                            Password:</label>
                        <input type="password" style="width: 120px;" name="password" class="DGB_TextBox" />
                    </div>
                    <div style="margin-top: 9px; text-align: center;">
                        <input type="submit" class="DGB_Button" style="padding: 6px 0px 6px 0px; display: block; width: 110px; margin: 0 auto;" tabindex="3">
                    </div>
                    <div id="ctl00_cphRoblox_rbxLoginView_lvLoginView_RegisterDiv" style="margin-bottom: 10px; margin-top: 4px; text-align: center;">
                        <a href="Login/NewAge.aspx" id="ctl00_cphRoblox_rbxLoginView_lvLoginView_Register" class="DGB_Button" style="padding: 6px 0px 6px 0px; display: block; width: 110px; margin: 0 auto;" tabindex="5" target="_parent">Register</a>
                    </div>
                </form>
                    <div style="margin-top: 8px; margin-bottom: 7px; text-align: center; white-space: nowrap;">
                        <a href="Parents/Login.aspx" id="ctl00_cphRoblox_rbxLoginView_lvLoginView_ParentLogin" style="color: #FFFFFF; font-weight: bold; font-size: 10px;" tabindex="6" target="_parent">Parent Login</a>
                    </div>
                    <div style="margin-top: 8px; margin-bottom: 7px; text-align: center; white-space: nowrap;">
                        <a href="Login/ResetPasswordRequest.aspx" id="ctl00_cphRoblox_rbxLoginView_lvLoginView_hlPasswordRecovery" style="color: #FFFFFF; font-weight: bold; font-size: 10px;" tabindex="7" target="_parent">
                            Forgot your password?</a>
                    </div>
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

        <div class="ShadowedStandardBox">
           <div class="Shadow"></div>
           <!-- <div class="Header">Games</div> -->
           <div class="Content" style="height: 459px; padding: 0px 0px 0px 0px;">
           
                <div style="margin-top: 5px; margin-left: 3px; width: 550px;">
                    
        <a id="ctl00_cphRoblox_MoneyMachine_PlayNowButton" href="Games.aspx"><img src="/web/20100722093836im_/http://www.roblox.com/images/SalesPitcher/PlayNow3.png" border="0"/></a>   
       
                </div>
                
                <div style="margin-left: 7px; margin-top: 20px; width: 541px;">
                    

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

<div>
    <div class="OutlineBox" style="height: 250px;">
        <div class="OB_HeaderPositioner"><div class="OB_Header"><div style="overflow:hidden; white-space: nowrap;"><span style="font-size: 12px;">Featured Free Game: </span><span id="ctl00_cphRoblox_FeaturedGames_GameName">Land of the Silent Sun [静かな太陽]...</span></div></div></div>
        <div class="OB_Content">
            <div style="float: left;">
                <div class="ShadowedStandardBox" style="width: 420px; height: 230px; margin: 0px 8px 0px 5px; ">
                    <div class="Shadow"></div>
                    <a id="ctl00_cphRoblox_FeaturedGames_AssetThumbnailImage" disabled="disabled" title="Land of the Silent Sun [静かな太陽] [FIXED KATANAS] - a ROBLOX free game" href="/web/20100722093836/http://www.roblox.com/Land-of-the-Silent-Sun-FIXED-KATANAS-item?id=6701233" style="display:inline-block;"><img src="http://web.archive.org/web/20100722093836im_/http://t6bg.roblox.com/2dba00bdb87eb366f7f08f5a0df592c1" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="Land of the Silent Sun [静かな太陽] [FIXED KATANAS] - a ROBLOX free game"/></a>
                </div>
            </div>
            <div style="float: left; font-size:10px; width: 100px; white-space: nowrap; overflow: hidden;">   
                <div style="margin-bottom: 7px;"><a id="ctl00_cphRoblox_FeaturedGames_PlayThis" title="Play this free game!" href="/web/20100722093836/http://www.roblox.com/Land-of-the-Silent-Sun-FIXED-KATANAS-item?id=6701233"><img title="Play this free game!" src="/web/20100722093836im_/http://www.roblox.com/images/PlayThis.png?v=2" border="0"/></a></div>
                <div id="LastUpdateLabelDiv" class="PlaceStatLabel">Updated:</div>
                <div id="LastUpdate" class="PlaceStatValue">1 month ago</div>
                <div id="FavoritedLabelDiv" class="PlaceStatLabel">Favorited:</div>
                <div id="Favorited" class="PlaceStatValue">19,790 times</div>
                <div id="VisitedPanelLabelDiv" class="PlaceStatLabel">Visited:</div>
                <div id="ctl00_cphRoblox_FeaturedGames_VisitedPanel" class="Visited PlaceStatValue">175,454 times</div>
                <div id="CreatorAvatar" style="margin-top: 7px;">
                    <div class="Avatar">
                        <a id="ctl00_cphRoblox_FeaturedGames_AvatarImage" title="sharpTH" href="/web/20100722093836/http://www.roblox.com/User.aspx?ID=22537" style="display:inline-block;cursor:pointer;"><img src="http://web.archive.org/web/20100722093836im_/http://t2bg.roblox.com/6c6818aad51016567b660e9ce9dbc752" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="sharpTH" blankurl="http://t6bg.roblox.com/blank-100x100.gif"/></a>
                    </div>
                </div>
                <div id="CreatorLabelDiv" class="PlaceStatLabel">By: <a id="ctl00_cphRoblox_FeaturedGames_CreatorHyperLink" href="User.aspx?ID=22537">sharpTH</a></div>
            </div>
        </div>
    </div>
</div>


                </div>    
                    
           </div>
        </div>

    </div>  
    <!--[if IE 6]>
</td>
<td valign="top" align="left">
<![endif]-->
    <!-- right column -->
    <div class="Column2c">
        
        <div id="ctl00_cphRoblox_boxAdPanel">
	
            <div style="height: 282px;">
                <div class="ShadowedStandardBox" style="float:left;" id="FrontPageRectangleAd">
                    <div class="Shadow"></div>
                    

<div style="overflow: hidden;">
    
<div id="ctl00_cphRoblox_LargeRectAd_OutsideAdPanel" class="AdPanel">
		
            <iframe id="ctl00_cphRoblox_LargeRectAd_AsyncAdIFrame" allowtransparency="true" frameborder="0" scrolling="no" height="250" src="/web/20100722093836if_/http://www.roblox.com/Ads/IFrameAdContent.aspx?v=2&amp;slot=Roblox_Home_Medium_Rectangle_300x250&amp;format=rectangle&amp;v=2" width="300"></iframe>

	</div>
            <a id="ctl00_cphRoblox_LargeRectAd_ReportAdButton" title="click to report an offensive ad" class="BadAdButton" href="javascript:__doPostBack('ctl00$cphRoblox$LargeRectAd$ReportAdButton','')">[ report ]</a>
            
        
    

</div>
                </div>
            </div>
        
</div>
        
        <div class="ShadowedStandardBox">
           <div class="Shadow"></div>
           <div class="Header">Parents</div>
           <div class="Content" style="padding: 5px 5px 5px 5px;">
           
                <div>
                    <div>          
                        <div style="float: left; width: 195px;">
                            RETORIA is NOT a kid-friendly place on the internet where your children can exercise their creativity in a moderated online environment.
                        </div>
                        <div style="float: right; margin-left: 10px;">
                        <a href="http://web.archive.org/web/20100722093836/http://www.truste.org/ivalidate.php?url=www.roblox.com&amp;sealid=105" id="ctl00_cphRoblox_TrusteeSeal"><img src="/web/20100722093836im_/http://www.roblox.com/images/TrusteVertical.png" id="ctl00_cphRoblox_TrusteLogo" height="60" border="0"/></a>
                        </div>
                        <div style="float: right; margin-left: 10px;">
                        <a target="_blank" href="http://web.archive.org/web/20100722093836/https://www.bbb.org/online/consumer/cks.aspx?id=109111915116750"><img height="60" title="Click to verify BBB accreditation and to see a BBB report." border="0" src="/web/20100722093836im_/http://www.roblox.com/images/bbbseal1US.gif" alt="Click to verify BBB accreditation and to see a BBB report."/></a>
                        </div>
                    </div>
                    <div style="clear: both; margin-top: 10px;">
                    <div style="margin: 2px 0px; float: left;">RETORIA IS NOT affiliated with K'Nex, The LEGO Group, or MEGA Brands.</div>
                        <a id="ctl00_cphRoblox_LearnMore" class="Button" href="Parents.aspx" style="display:inline-block;padding-left: 8px; padding-right: 8px;">Learn More</a>
                        <a id="ctl00_cphRoblox_AccessParentAccount" class="Button" href="Parents/Login.aspx" style="display:inline-block;padding-left: 8px; padding-right: 8px;">Parent Account</a>
                        <a id="ctl00_cphRoblox_PrivacyPolicy" class="Button" href="info/Privacy.aspx" style="display:inline-block;padding-left: 8px; padding-right: 8px;">Privacy Policy</a>
                    </div>
                    
                </div>
                             
           </div>
        </div>
        
        <div class="ShadowedStandardBox">
           <div class="Shadow"></div>
           <div class="Header">RETORIA Stats</div>
           <div class="Content" style="height: 103px;">
           
                <div class="Centered">
                    <div id="RandomFactsContainer">
                        <div id="ctl00_cphRoblox_RandomFacts_pRandomFacts">
	

    <!-- Print the JavaScript arrays of facts onto the page -->
    <script>var randomFactsImagePathArray = ['images/RandomFactsIcons/Admin.png','images/RandomFactsIcons/ShoppingBag.png','images/RandomFactsIcons/Bux.png','images/RandomFactsIcons/Pants.png','images/RandomFactsIcons/House.png','images/RandomFactsIcons/Shirt.png','images/RandomFactsIcons/Shield.png','images/RandomFactsIcons/House.png'];var randomFactsTextArray = [' <b>24</b> admins are tinkering with the game',' the average bid for a user-run <b>banner</b> ad is <b>3435</b> tickets',' 100 ROBUX buys about <b>1160</b> tickets on the <a href="Marketplace/TradeCurrency.aspx">Currency Exchange</a> right now',' <b>95</b> <a href="Catalog.aspx?m=BestSelling&c=12&t=PastWeek&d=All&q=police">new <b>police</b> uniforms</a> are available in the pants section of the catalog','<a href="/Roblox-Easter-Egg-Hunt-Egg-Rain-Times-In-Desc-item?id=3058921"><b>Roblox Easter Egg Hunt *Egg Rain ...</b></a> has been visited <b>36919</b> times today',' <b>536</b> <a href="Catalog.aspx?m=BestSelling&c=11&t=PastWeek&d=All&q=knight">brave <b>knight</b> devices</a> are available in the shirts section of the catalog',' there are <b>296240</b> <a href="Parents.aspx">parents</a> keeping track of their kids on ROBLOX','<a href="/Island-Resort-Removing-Free-Models-item?id=6328202"><b>Island Resort® (Removing Free Mod...</b></a> has been favorited <b>74946</b> times today'];</script>
    
    <style>
        .RandomFactContainer
        {
        	width: 250px;
        	height: 50px;            	
            margin: 5px 5px 5px 5px;
        }
        .RandomFactImageContainer
        {
        	float: left;
        	width: 32px;
        	height: 32px;
        }
        .RandomFactTextContainer
        {
        	float: right;
        	width: 200px;
        	text-align: center;
        }
    </style>
    
    <div style="position: relative; width: 100%; height: 100%;">
        <div id="RandomFactContainer1" class="RandomFactContainer" style="position: absolute; top: 3px;">
            <div id="RandomFactImageContainer1" class="RandomFactImageContainer">
                <img id="RandomFactImage1" src="/web/20100722093836im_/http://www.roblox.com/images/RandomFactsIcons/Admin.png"/>
            </div>
            <div id="RandomFactTextContainer1" class="RandomFactTextContainer">
            </div>
        </div>
    
        <div id="RandomFactContainer2" class="RandomFactContainer" style="position: absolute; top: 53px;">
            <div id="RandomFactImageContainer2" class="RandomFactImageContainer">
                <img id="RandomFactImage2" src="/web/20100722093836im_/http://www.roblox.com/images/RandomFactsIcons/Admin.png"/>
            </div>
            <div id="RandomFactTextContainer2" class="RandomFactTextContainer">
            </div>
        </div>
    </div>      
    
    <script>

        var randomFactsUpdateInterval = 200;
        var randomFactsUpdateCounterMax = 10;
        var randomFactsStartTime = 0;
        var randomFactsCurrentState = 0;
      
        var currentRandomFactIndex = 0;

        function getNextRandomFactIndex() {
            var nextRandomFactIndex = currentRandomFactIndex;
            
            currentRandomFactIndex++;
            currentRandomFactIndex %= randomFactsTextArray.length;
            
            return nextRandomFactIndex;
        }

        function updateRandomFact(randomFactDivNumber) {
            var nextRandomFactIndex = getNextRandomFactIndex();
            document.getElementById("RandomFactImage" + randomFactDivNumber).src = randomFactsImagePathArray[nextRandomFactIndex];
            document.getElementById("RandomFactTextContainer" + randomFactDivNumber).innerHTML = randomFactsTextArray[nextRandomFactIndex];
        }

        function updateRandomFactsControl() {
            var currentDate = new Date();
            randomFactsTimeElapsed = (currentDate.getTime() - randomFactsStartTime) % 16000;
        
            if ((randomFactsTimeElapsed >= 0 && randomFactsTimeElapsed < 4000) && randomFactsCurrentState != 0) {
                
                randomFactsCurrentState = 0;
            }
            else if ((randomFactsTimeElapsed >= 4000 && randomFactsTimeElapsed < 8000) && randomFactsCurrentState != 1) {
                //1 out
                $("#RandomFactContainer1").fadeOut(2000);

                randomFactsCurrentState = 1;
            }
            else if ((randomFactsTimeElapsed >= 8000 && randomFactsTimeElapsed < 12000) && randomFactsCurrentState != 2) {
                //1 in
                updateRandomFact("1");
                $("#RandomFactContainer1").fadeIn(2000);

                //2 out
                $("#RandomFactContainer2").fadeOut(2000);

                randomFactsCurrentState = 2;
            }
            else if ((randomFactsTimeElapsed >= 12000 && randomFactsTimeElapsed < 16000) && randomFactsCurrentState != 3) {
                //2 in
                updateRandomFact("2");
                $("#RandomFactContainer2").fadeIn(2000);
            
                randomFactsCurrentState = 3;
            }
        }

        $(document).ready(function() {
            updateRandomFact("1");
            updateRandomFact("2");           
            
            var currentDate = new Date();
            randomFactsStartTime = currentDate.getTime();

            setInterval(updateRandomFactsControl, randomFactsUpdateInterval);
        });
        
    </script>  
        

</div>

                    </div>
                </div>
                             
           </div>
        </div>
        
        <div class="ShadowedStandardBox">
            <div class="Shadow"></div>
            <div class="Header">Roblox News</div>
            <div class="Content" style="height: 103px;">
           
                <div class="Centered" style="width: 280px;">
	                <div id="NewsFeeder" style="width: 100%;">
	                    <div id="ctl00_cphRoblox_NewsFeed_pRobloxNews">
	
    
    <div id="RobloxNews" style="float: none; width: 100%; overflow: visible; font-size: 11px;">
        <div style="margin-bottom: 15px;">
            
                
                    <div style="background: url(/web/20100722093836im_/http://www.roblox.com/images/BulletPointArrow.png) no-repeat center left; padding-left: 13px; margin-bottom: 4px;">
                        <a id="ctl00_cphRoblox_NewsFeed_dlNews_ctl01_NewsItemHyperLink" href="http://web.archive.org/web/20100722093836/http://blog.roblox.com/?p=2681">ROBLOX Summer Egg Hunt</a>
                    </div>
                
                    <div style="background: url(/web/20100722093836im_/http://www.roblox.com/images/BulletPointArrow.png) no-repeat center left; padding-left: 13px; margin-bottom: 4px;">
                        <a id="ctl00_cphRoblox_NewsFeed_dlNews_ctl02_NewsItemHyperLink" href="http://web.archive.org/web/20100722093836/http://blog.roblox.com/?p=2641">Gear Goes Green!</a>
                    </div>
                
                    <div style="background: url(/web/20100722093836im_/http://www.roblox.com/images/BulletPointArrow.png) no-repeat center left; padding-left: 13px; margin-bottom: 4px;">
                        <a id="ctl00_cphRoblox_NewsFeed_dlNews_ctl03_NewsItemHyperLink" href="http://web.archive.org/web/20100722093836/http://blog.roblox.com/?p=2640">Intern Roll Call!</a>
                    </div>
                
                    <div style="background: url(/web/20100722093836im_/http://www.roblox.com/images/BulletPointArrow.png) no-repeat center left; padding-left: 13px; margin-bottom: 4px;">
                        <a id="ctl00_cphRoblox_NewsFeed_dlNews_ctl04_NewsItemHyperLink" href="http://web.archive.org/web/20100722093836/http://blog.roblox.com/?p=2623">Grapple to your Musical Decoy</a>
                    </div>
                
                
        </div>
        <div style="text-align: right;">
            <a id="ctl00_cphRoblox_NewsFeed_PrivacyPolicy" class="Button" href="http://web.archive.org/web/20100722093836/http://blog.roblox.com/" style="display:inline-block;">More...</a>
        </div>
        
    </div>

</div>
	                </div>
                </div>
                             
            </div>            
        </div>
         
    </div>    