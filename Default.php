<?php
include ('cfg/config.php');
include ('cfg/header.php');
?>
<div id="Body">
          
  <div id="SplashContainer">
    <div id="SignInPane">
      

<div id="LoginViewContainer">
  
      <div id="LoginView">
        <?php if($isloggedin == 'yes') {echo '<h5>Logged In</h5>
  <div id="AlreadySignedIn">
          <a title="'.$_USER['username'].'" href="/my/home" style="display:inline-block;height:190px;width:152px;cursor:pointer;"><img src="/api/avatar/getthumb.php?id='.$_USER['id'].'" style="display:inline-block;margin-top:15px;" border="0" id="img" height="150px" alt="'.$_USER['username'].'"></a>
        ';} else echo '<h5>Member Login</h5>
        
        <div class="AspNet-Login">
            <div class="AspNet-Login"><form method="POST" action="/Login/Default.aspx">
              <div class="AspNet-Login-UserPanel">
                <label for="ctl00_cphRoblox_rbxLoginView_lvLoginView_lSignIn_UserName" id="ctl00_cphRoblox_rbxLoginView_lvLoginView_lSignIn_UserNameLabel" class="Label">Character Name</label>
                <input name="username" type="text" id="ctl00_cphRoblox_rbxLoginView_lvLoginView_lSignIn_UserName" tabindex="1" class="Text">
              </div>
              <div class="AspNet-Login-PasswordPanel">
                <label for="ctl00_cphRoblox_rbxLoginView_lvLoginView_lSignIn_Password" id="ctl00_cphRoblox_rbxLoginView_lvLoginView_lSignIn_PasswordLabel" class="Label">Password</label>
                <input name="password" type="password" id="ctl00_cphRoblox_rbxLoginView_lvLoginView_lSignIn_Password" tabindex="2" class="Text">
              </div>
              <!--div class="AspNet-Login-RememberMePanel"-->
                
              <!--/div-->
              <div class="AspNet-Login-SubmitPanel">
<div class="AspNet-Login-SubmitPanel" style="padding-bottom: 12px!important;">
							<button tabindex="3" class="Button" type="submit" name="Login">Login</button>
						</div>
<div class="AspNet-Login-SubmitPanel">
						   	<a tabindex="4" class="Button" href="/Login/NewAge.aspx">Register</a>
						</div>
                <!--<a id="ctl00_cphRoblox_rbxLoginView_lvLoginView_lSignIn_Login" tabindex="4" class="Button" href="javascript:__doPostBack(\'ctl00$cphRoblox$rbxLoginView$lvLoginView$lSignIn$Login\',\'\')">Login</a>-->
              </div></form>
              <div class="AspNet-Login-PasswordRecoveryPanel">
                <a id="ctl00_cphRoblox_rbxLoginView_lvLoginView_lSignIn_hlPasswordRecovery" tabindex="5" href="/Login/ResetPasswordRequest.aspx">Forgot your password?</a>
              </div>
            </div>'; ?>
			</div>
					
</div>
			</div>
		
</div>

			<div id="ctl00_cphRoblox_pFigure">
	
				<div id="Figure"><a id="ctl00_cphRoblox_ImageFigure" disabled="disabled" title="Figure" onclick="return false" style="display:inline-block;"><img src="/web/20071104234442im_/http://www.roblox.com/images/figure.png" border="0" id="img" alt="Figure" blankurl="http://t1.roblox.com:80/blank-115x130.gif"></a></div>
			
</div>
			
		</div>
		<div id="RobloxAtAGlance">
			<h2>ROBLOX Virtual Playworld</h2>
			<h3>ROBLOX is Free!</h3>
			<ul id="ThingsToDo">
				<li id="Point1">
					<h3>Build your personal Place</h3>
					<div>Create buildings, vehicles, scenery, and traps with thousands of virtual bricks.</div>
				</li>
				<li id="Point2">
					<h3>Meet new friends online</h3>
					<div>Visit your friend's place, chat in 3D, and build together.</div>
				</li>
				<li id="Point3">
					<h3>Battle in the Brick Arenas</h3>
					<div>Play with the slingshot, rocket, or other brick battle tools.  Be careful not to get "bloxxed".</div>
				</li>
			</ul>
			<div id="Showcase">
				<!--embed style="width:400px; height:326px;" id="VideoPlayback" type="application/x-shockwave-flash" src="http://video.google.com/googleplayer.swf?docId=7769128813330454055&hl=en" flashvars="" /-->
				<ruffle-embed style="width:400px; height:326px;" id="VideoPlayback" type="application/x-shockwave-flash" src="https://web.archive.org/web/20071104234442mp_/http://video.google.com/googleplayer.swf?docId=2296704981611021533&amp;hl=en" flashvars=""></ruffle-embed>
			</div>
			<div id="Install">
				<div id="CompatibilityNote"><div id="ctl00_cphRoblox_pCompatibilityNote">
	Works with your<br>Windows PC!
</div></div>
				<div id="DownloadAndPlay"><a id="ctl00_cphRoblox_hlDownloadAndPlay" href="Login/New.aspx?ReturnUrl=%2fGames.aspx"><img src="/web/20071104234442im_/http://www.roblox.com/images/DownloadAndPlay.png" alt="FREE - Download and Play!" border="0"></a></div>
			</div>
			<div id="ctl00_cphRoblox_pForParents">
	
				<div id="ForParents">
					<a id="ctl00_cphRoblox_hlKidSafe" title="ROBLOX is kid-safe!" href="Parents.aspx" style="display:inline-block;"><img title="ROBLOX is kid-safe!" src="/web/20071104234442im_/http://www.roblox.com/images/COPPASeal-150x150.png" border="0"></a>
				</div>
			
</div>
		</div>
		<div id="UserPlacesPane">
			<div id="UserPlaces_Content">
			    
				<table id="ctl00_cphRoblox_DataListCoolPlace" cellspacing="0" border="0" width="100%">
	<tbody><tr>
		<td class="UserPlace">
						<a id="ctl00_cphRoblox_DataListCoolPlace_ctl00_rbxContentImage" title="NARROWS  The Bridge From Halo 3" href="/web/20071104234442/http://www.roblox.com/Place.aspx?id=20624" style="display:inline-block;cursor:pointer;"><img src="https://web.archive.org/web/20071104234442im_/http://t0.roblox.com:80/Place-120x70-d0cde3cc9355820f2c2eb3a797662966.Png" border="0" id="img" alt="NARROWS  The Bridge From Halo 3"></a>
					</td><td class="UserPlace">
						<a id="ctl00_cphRoblox_DataListCoolPlace_ctl01_rbxContentImage" title="ROBLOX RPG 2: age of dragons" href="/web/20071104234442/http://www.roblox.com/Place.aspx?id=44415" style="display:inline-block;cursor:pointer;"><img src="https://web.archive.org/web/20071104234442im_/http://t7.roblox.com:80/Place-120x70-b8e64f67e43bbb561dd3362d26d691bd.Png" border="0" id="img" alt="ROBLOX RPG 2: age of dragons"></a>
					</td><td class="UserPlace">
						<a id="ctl00_cphRoblox_DataListCoolPlace_ctl02_rbxContentImage" title="▄▀▄▀▄ Space Cruise V2.12▄▀▄▀▄ " href="/web/20071104234442/http://www.roblox.com/Place.aspx?id=73106" style="display:inline-block;cursor:pointer;"><img src="https://web.archive.org/web/20071104234442im_/http://t5.roblox.com:80/Place-120x70-b2b3d33d575b83481321152b43056c30.Png" border="0" id="img" alt="▄▀▄▀▄ Space Cruise V2.12▄▀▄▀▄ "></a>
					</td><td class="UserPlace">
						<a id="ctl00_cphRoblox_DataListCoolPlace_ctl03_rbxContentImage" title="Choose-Your-Job Fight" href="/web/20071104234442/http://www.roblox.com/Place.aspx?id=82295" style="display:inline-block;cursor:pointer;"><img src="https://web.archive.org/web/20071104234442im_/http://t3.roblox.com:80/Place-120x70-71f2d9e9725700473e628b688db07ed5.Png" border="0" id="img" alt="Choose-Your-Job Fight"></a>
					</td><td class="UserPlace">
						<a id="ctl00_cphRoblox_DataListCoolPlace_ctl04_rbxContentImage" title="▄▀▄▀▄ Down Hill Extreme▄▀▄▀▄" href="/web/20071104234442/http://www.roblox.com/Place.aspx?id=113233" style="display:inline-block;cursor:pointer;"><img src="https://web.archive.org/web/20071104234442im_/http://t7.roblox.com:80/Place-120x70-6a4d308bc931ce55a9bc44a3d56bc401.Png" border="0" id="img" alt="▄▀▄▀▄ Down Hill Extreme▄▀▄▀▄"></a>
					</td>
	</tr>
</tbody></table>
			</div>
			<div id="UserPlaces_Header">
				<h3>Cool Places</h3>
				<p>Check out some of our favorite ROBLOX places!</p>
			</div>
			<div id="ctl00_cphRoblox_ie6_peekaboo" style="clear: both"></div>
		</div>
	</div>

				</div>
				<div id="Footer">
					
<hr>
<p class="Legalese">
    ROBLOX, "Online Building Toy", characters, logos, names, and all related indicia
    are trademarks of
    <a id="ctl00_rbxFooter_hlRobloxCorporation" href="info/About.aspx">ROBLOX Corporation</a>,
    ©2007. Patents pending.<br>
    ROBLOX Corp. is not affliated with Lego, MegaBloks, Bionicle, Pokemon, Nintendo, Lincoln Logs, Yu Gi Oh, K'nex, Tinkertoys, Erector Set, or the Pirates of the Caribbean. ARrrr!<br>
    Use of this site signifies your acceptance of the
    <a id="ctl00_rbxFooter_hlTermsOfService" href="info/TermsOfService.aspx">Terms and Conditions</a>.<br>
    <a id="ctl00_rbxFooter_hlPrivacyPolicy" href="info/Privacy.aspx">Privacy Policy</a>
    &nbsp;|&nbsp; <a href="https://web.archive.org/web/20071104234442/mailto:info@roblox.com">Contact Us</a> &nbsp;|&nbsp;
    <a id="ctl00_rbxFooter_hlAboutRoblox" href="info/About.aspx">About Us</a>
    &nbsp;|&nbsp;
    <a id="ctl00_rbxFooter_HyperLink1" href="info/Jobs.aspx">Jobs</a></p>

				</div>
			</div>
           
			
        <script src="https://web.archive.org/web/20071104234442js_/http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
        <script type="text/javascript">_uacct="UA-486632-1"; _udn="roblox.com"; urchinTracker(); __utmSetVar('Visitor/Anonymous');</script>
    
            
		
<input type="hidden" name="__VIEWSTATEENCRYPTED" id="__VIEWSTATEENCRYPTED" value="">
<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="WoZe75foJP1g3M8tb7u/gLsVi8jgxYvFRu2nKmSI5tRMqqqCz5Tig7bD/5+/PQ69">

<script type="text/javascript">
<!--
__utmSetVar('Ads/Banner');Roblox.Controls.Image.IE6Hack($get('ctl00_rbxImage_Logo'));Roblox.Controls.Image.IE6Hack($get('ctl00_cphRoblox_ImageFigure'));Sys.Application.initialize();
// -->
</script>
</form>
	


</body></html>