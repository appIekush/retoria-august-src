<?php
ob_start();
$mysqli = new mysqli("sql213.epizy.com","epiz_32289903","GJKgNJ44Lk9pas","epiz_32289903_retoria");
		global $mysqli;	

		function thetime()
			{
				$thetime = getdate();
				print_r($thetime);
			}
  				$logged = false;
                   if($_COOKIE['username'] && $_COOKIE['password']){
     			 			 $username = strip_tags($_COOKIE['username']);
        		 				 $password = strip_tags($_COOKIE['password']);
        							$usrquery = $mysqli->query("SELECT * FROM `accounts` WHERE `password` = '$password'");
        							$usr = $usrquery->fetch_array();
        								if($usr != 0){
             								 $logged = true;
                                        }
                   }
?>
<link id="ctl00_Imports" rel="stylesheet" type="text/css" href="/CSS/TestAll.css">
<link id="ctl00_Link1" rel="icon" type="image/vnd.microsoft.icon" href="/web/20100722093836im_/http://www.roblox.com/favicon.ico"/>
<link rel="Stylesheet" type="text/css" href="http://web.archive.org/web/20100722093836cs_/http://www.roblox.com/chat/css/party.css"/>
<link rel="Stylesheet" type="text/css" href="http://web.archive.org/web/20100722093836cs_/http://www.roblox.com/chat/css/party_leader.css"/>
<link rel="Stylesheet" type="text/css" href="http://web.archive.org/web/20100722093836cs_/http://www.roblox.com/chat/css/party_invite.css"/>

<body>
			    <div id="MasterContainer">
     <!-- Begin chat bar -->
        <div style="width: 100%">
        
        </div>
    <!-- End chat bar -->
        <div id="Container">
            
            
    <div id="ctl00_cphBannerAd_topAdPanel">
	
    <div id="AdvertisingLeaderboard">
        

<div style="overflow: hidden;">
    
<div id="ctl00_cphBannerAd_HomeTopBannerAd_OutsideAdPanel" class="AdPanel">
		
            <iframe id="ctl00_cphBannerAd_HomeTopBannerAd_AsyncAdIFrame" allowtransparency="true" frameborder="0" scrolling="no" height="90" src="http://web.archive.org/web/20100722093836if_/http://www.roblox.com/Ads/IFrameAdContent.aspx?v=2&amp;slot=Roblox_Home_Top_728x90&amp;format=banner&amp;v=2" width="728"></iframe>

	</div>
            <a id="ctl00_cphBannerAd_HomeTopBannerAd_ReportAdButton" title="click to report an offensive ad" class="BadAdButton" href="javascript:__doPostBack('ctl00$cphBannerAd$HomeTopBannerAd$ReportAdButton','')">[ report ]</a>
            
        
    

</div>
    </div>
    
</div>

             
            <div id="Header">
                <div id="Banner">
                    
                            

<div id="Options">
	<div id="Authentication">
    <?php if(!$logged){ ?>
		<span><a id="ctl00_BannerOptionsLoginView_BannerOptions_Anonymous_LoginHyperLink" href="/">Login</a></span>
    <?php } else { ?>
        <span><a id="ctl00_BannerOptionsLoginView_BannerOptions_Anonymous_LoginHyperLink" href="/logout.php">Logout</a></span>
    <?php } ?>
	</div>
	<div id="Settings"></div>
</div>
                            <a id="Logo" href="/web/20100722093836/http://www.roblox.com/Default.aspx" style="cursor: pointer; border: none;"></a>
                        
                    
                            
<div style="float: right; width: 203px;">
    <a id="ctl00_BannerAlertsLoginView_BannerAlerts_Anonymous_rbxAlerts_SignupAndPlayHyperLink" class="SignUpAndPlay" text="Sign-up and Play!" href="/web/20100722093836/http://www.roblox.com/Games.aspx" style="display:inline-block;cursor:pointer;"><img src="/web/20100722093836im_/http://www.roblox.com/images/Holiday3Button.png" border="0" onerror="return Roblox.Controls.Image.OnError(this)" blankurl="http://t1bg.roblox.com/blank-210x40.gif"/></a>


</div>

                        
                </div>
                

<script type="text/javascript" language="javascript">
    function toggleDropDownNav() {
        if ($(".dropdownnavcontainer:visible").size() > 0) {
            $(".dropdownnavcontainer").hide();
            $("#gamesMenuToggle").attr("src","/images/arrow-down.gif");
        }
        else
        {
            $(".dropdownnavcontainer").show();
            $("#gamesMenuToggle").attr("src","/images/arrow-up.gif");
        }
            
    }
</script>

<?php if($logged){ ?>
<div class="Navigation">
    <div class="dropdownnavcontainer">
                    <div class="dropdownmainnav" style="z-index:1023;">
                        
                                <div style="float: left; width: 50%; text-align: left;">
                                    <img src="/web/20100722093836im_/http://www.roblox.com/images/GenreIconsInverted/Classic.png"/>
                                    <a href="/web/20100722093836/http://www.roblox.com/all-games" title="All" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">
                                        All</a>
                                </div>
                            
                                <div style="float: left; width: 50%; text-align: left;">
                                    <img src="/web/20100722093836im_/http://www.roblox.com/images/GenreIconsInverted/City.png"/>
                                    <a href="/web/20100722093836/http://www.roblox.com/town-and-city-games" title="Town and City" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">
                                        Town and City</a>
                                </div>
                            
                                <div style="float: left; width: 50%; text-align: left;">
                                    <img src="/web/20100722093836im_/http://www.roblox.com/images/GenreIconsInverted/Castle.png"/>
                                    <a href="/web/20100722093836/http://www.roblox.com/medieval-games" title="Fantasy" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">
                                        Fantasy</a>
                                </div>
                            
                                <div style="float: left; width: 50%; text-align: left;">
                                    <img src="/web/20100722093836im_/http://www.roblox.com/images/GenreIconsInverted/SciFi.png"/>
                                    <a href="/web/20100722093836/http://www.roblox.com/sci-fi-games" title="Sci-Fi" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">
                                        Sci-Fi</a>
                                </div>
                            
                                <div style="float: left; width: 50%; text-align: left;">
                                    <img src="/web/20100722093836im_/http://www.roblox.com/images/GenreIconsInverted/Ninja.png"/>
                                    <a href="/web/20100722093836/http://www.roblox.com/ninja-games" title="Ninja" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">
                                        Ninja</a>
                                </div>
                            
                                <div style="float: left; width: 50%; text-align: left;">
                                    <img src="/web/20100722093836im_/http://www.roblox.com/images/GenreIconsInverted/Cthulu.png"/>
                                    <a href="/web/20100722093836/http://www.roblox.com/scary-games" title="Scary" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">
                                        Scary</a>
                                </div>
                            
                                <div style="float: left; width: 50%; text-align: left;">
                                    <img src="/web/20100722093836im_/http://www.roblox.com/images/GenreIconsInverted/Pirate.png"/>
                                    <a href="/web/20100722093836/http://www.roblox.com/pirate-games" title="Pirate" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">
                                        Pirate</a>
                                </div>
                            
                                <div style="float: left; width: 50%; text-align: left;">
                                    <img src="/web/20100722093836im_/http://www.roblox.com/images/GenreIconsInverted/Adventure.png"/>
                                    <a href="/web/20100722093836/http://www.roblox.com/adventure-games" title="Adventure" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">
                                        Adventure</a>
                                </div>
                            
                                <div style="float: left; width: 50%; text-align: left;">
                                    <img src="/web/20100722093836im_/http://www.roblox.com/images/GenreIconsInverted/Sports.png"/>
                                    <a href="/web/20100722093836/http://www.roblox.com/sports-games" title="Sports" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">
                                        Sports</a>
                                </div>
                            
                                <div style="float: left; width: 50%; text-align: left;">
                                    <img src="/web/20100722093836im_/http://www.roblox.com/images/GenreIconsInverted/LOL.png"/>
                                    <a href="/web/20100722093836/http://www.roblox.com/funny-games" title="Funny" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">
                                        Funny</a>
                                </div>
                            
                                <div style="float: left; width: 50%; text-align: left;">
                                    <img src="/web/20100722093836im_/http://www.roblox.com/images/GenreIconsInverted/WildWest.png"/>
                                    <a href="/web/20100722093836/http://www.roblox.com/wild-west-cowboy-games" title="Wild West" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">
                                        Wild West</a>
                                </div>
                            
                                <div style="float: left; width: 50%; text-align: left;">
                                    <img src="/web/20100722093836im_/http://www.roblox.com/images/GenreIconsInverted/ModernMilitary.png"/>
                                    <a href="/web/20100722093836/http://www.roblox.com/war-games" title="War" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">
                                        War</a>
                                </div>
                            
                                <div style="float: left; width: 50%; text-align: left;">
                                    <img src="/web/20100722093836im_/http://www.roblox.com/images/GenreIconsInverted/Skatepark.png"/>
                                    <a href="/web/20100722093836/http://www.roblox.com/skatepark-games" title="Skate Park" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">
                                        Skate Park</a>
                                </div>
                            
                                <div style="float: left; width: 50%; text-align: left;">
                                    <img src="/web/20100722093836im_/http://www.roblox.com/images/GenreIconsInverted/Tutorial.gif"/>
                                    <a href="/web/20100722093836/http://www.roblox.com/gametutorials-games" title="Tutorial" style="padding: 0; margin: 0 2px 0 0; border: none; font-size: 15px;">
                                        Tutorial</a>
                                </div>
                            
                   </div>
                    <div class="dropdownmainnav" style="width:145px;border-left:0px;z-index:1023">
                             <a href="/web/20100722093836/http://www.roblox.com/games.aspx" style="font-size:15px;"><b>Most Popular</b></a><br/>
                             <a href="/web/20100722093836/http://www.roblox.com/games.aspx?m=TopFavorites" style="font-size:15px;">Top Favorites</a><br/>
                             <a href="/web/20100722093836/http://www.roblox.com/games.aspx?m=RecentlyUpdated" style="font-size:15px;">Recently Updated</a><br/>
                             <a href="/web/20100722093836/http://www.roblox.com/user.aspx?id=1" style="font-size:15px;">Featured Games</a><br/>
                             <a href="/web/20100722093836/http://www.roblox.com/Catalog.aspx?m=TopFavorites&amp;c=9&amp;t=AllTime&amp;d=All&amp;q=" style="font-size:15px;">Search Games</a>
                    </div>                   
    </div>
    <ul id="ctl00_Menu_MenuUL">
        <?php if($logged){ ?>
                <li>
                    <a id="ctl00_Menu_hlMyRobloxLink_hlMyRoblox" href="/home.php" style="">My RETORIA</a>
                </li>
            <?php } ?>
            
       
        <li class="gamesLink"><a id="hlGames" href="/web/20100722093836/http://www.roblox.com/Games.aspx" style="" title="Games">Games</a>
           <img id="gamesMenuToggle" src="/web/20100722093836im_/http://www.roblox.com/images/arrow-down.gif" onclick="toggleDropDownNav();" style="cursor:pointer;"/>       
        </li>
        <li><a id="hlCatalog" href="/web/20100722093836/http://www.roblox.com/Catalog.aspx" style="" title="Catalog">Catalog</a></li>
        <li><a id="hlBrowse" href="/browse.php" style="" title="People">People</a></li>
        <li><a id="hlBuildersClub" href="/web/20100722093836/http://www.roblox.com/Upgrades/BuildersClub.aspx" style="" title="Builders Club">Builders Club</a></li>
        <li id="ctl00_Menu_ContestsMenuTab"><a id="hlContests" href="/web/20100722093836/http://www.roblox.com/Contests/" style="" title="Contests">Contests</a></li>
        <li><a id="hlForum" onclick="" href="/web/20100722093836/http://www.roblox.com/Forum/Default.aspx" style="" title="Forum">Forum</a></li>
        <li><a id="hlNews" href="http://web.archive.org/web/20100722093836/http://blog.roblox.com/" target="_blank" title="News">News</a><a id="hlNewsFeed" href="http://web.archive.org/web/20100722093836/http://blog.roblox.com/?feed=rss" title="RSS" class="icons rss_icon" style="padding: 0; margin: 0 4px 0 0; border: none;"></a><a style="display:none;" id="h1Twitter" href="http://web.archive.org/web/20100722093836/http://www.twitter.com/roblox" target="_blank" title="The ROBLOX Twitter Feed" class="icons twitter_icon" style="padding: 0;
                margin: 0 4px 0 0; border: none;"></a></li>
        <li><a id="hlHelp" href="/web/20100722093836/http://www.roblox.com/Help/Builderman.aspx" style="" title="Help">Help</a></li>
    <?php if($usr['administrator'] == '1'){ ?>
        <li><a id="hlHelp" href="/admin.php" style="" title="Help">Admin</a></li>
    <?php } ?>
    </ul>
</div>

            </div>
<?php } ?>
 <br>

         <div id="ctl00_Announcement">
	
                <div class="SystemAlert">
                    <div id="ctl00_SystemAlertTextColor" class="SystemAlertText" style="background-color:#6E99C9;">
                        <div class="Exclamation">
                        </div>
                        <div id="ctl00_LabelAnnouncement">PTSD</div>
                    </div>
                </div>
            
</div>
            
            
            
           
            
   
           
           
            <div id="Body" style="color: black;">
    <br><br>