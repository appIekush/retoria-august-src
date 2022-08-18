<?php
include "global.php";
$result = $mysqli->query("SELECT * FROM `accounts` WHERE `banned`='0' ORDER BY id");
?>
<title>Retoria - Browse</title>

<div id="ctl00_cphRoblox_ContainerPanel">
	
        <div id="BrowseContainer" style="font-family: Verdana, Sans-Serif; text-align: left">
            <div style="width: 876px; height: 28px; clear: both; display: block; background-color: #006699;" class="StandardBox">
                <table width="876px" border="0">
                    <tr>
                        <td style="font-family: Verdana, Helvetica, Sans-Serif; font-size: 12pt; color: White;
                            font-weight: bold; text-align: left;">
                            Search:
                        </td>
                        <td style="text-align: right;">
                            <span class="SearchBox">
                                <input name="ctl00$cphRoblox$SearchTextBox" type="text" maxlength="100" id="ctl00_cphRoblox_SearchTextBox" style="width: 400px;"/></span>
                            <span class="SearchButton">
                                <input type="submit" name="ctl00$cphRoblox$SearchButton" value="Search Users" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphRoblox$SearchButton&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="ctl00_cphRoblox_SearchButton"/></span>
                            <input name="ctl00$cphRoblox$Button1" type="button" id="ctl00_cphRoblox_Button1" value="Search Groups" onclick="GroupsSearch()" onkeypress="GroupsSearch()"/>
                            <input type="text" style="visibility: hidden; position: absolute">
                            <!-- Enter key submission hack - IE -->
                            <span class="SearchLinks"><sup>&nbsp;|&nbsp;</sup><a href="#" style="color: #FFFFFF"><sup>Tips</sup>
                                <span>
                                
                                
                                </span></a></span>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="SearchError">
                </div>
            
                    
                    <div>
		<table class="Grid" cellspacing="0" cellpadding="4" border="0" id="ctl00_cphRoblox_gvUsersBrowsed" width="900">
			<tr class="GridHeader">
				<th scope="col">Avatar</th><th scope="col">&nbsp;</th><th scope="col"><a href="javascript:__doPostBack('ctl00$cphRoblox$gvUsersBrowsed','Sort$[Name]')">Name</a></th><th scope="col">Blurb</th><th scope="col">Location / Last Seen</th>
			</tr>

<?php while($row = $result->fetch_array()){ 
?>
				<tr class="GridItemAlt">
				<td width="50">
                                    <a id="ctl00_cphRoblox_gvUsersBrowsed_ctl03_hlAvatar" title="BlueOreo36" href="/web/20100729002651/http://www.roblox.com/User.aspx?ID=6876883" style="display:inline-block;cursor:pointer;"><img src="/thumbnails/character.png"  width="120px" height="140px" border="0" onerror="return Roblox.Controls.Image.OnError(this)" alt="BlueOreo36"/></a>
                                </td><td width="7">
                                </td><td>
                                    <a id="ctl00_cphRoblox_gvUsersBrowsed_ctl03_hlName" href="user.php?id=<?=$row['id'];?>"><?=$row['Username'];?></a>
                                </td><td>
                                    <span id="ctl00_cphRoblox_gvUsersBrowsed_ctl03_lBlurb"><?=$row['description'];?></span>
                                </td><td>
                                    <span id="ctl00_cphRoblox_gvUsersBrowsed_ctl03_lblUserLocationOrLastSeen">somewhere</span>
                                </td>
<?php } ?>