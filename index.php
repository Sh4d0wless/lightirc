<?php
require_once('../../class2.php');
// if (!defined('e107_INIT')) { exit; } // not required when including class2

if(!e107::isInstalled('lightirc'))
{
	// e107::redirect();  // enable after development is complete.
}

e107::js('url','http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js');
e107::js('lightirc','config.js');
e107::css('inline','

	.lightIRC_maindiv {   margin-top: 100px; } '
);

require_once(HEADERF);

$lightirc = e107::pref('lightirc');
e107::lan('lightirc');

$text = '
<div id="lightIRC_maindiv">
 <div id="lightIRC" style="height:300%; text-align:center;">
  <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
 </div>
</div>';

$text .= ' <script type="text/javascript"> var flashvars = false;';


if ($lightirc['lightirc_host'] == ""){
	$text .= "var params = {host:\"".$lightirc['lightirc_host']."\"".($lightirc['lightirc_port'] != "" ? ",
		port:\"".$lightirc['lightirc_port']."\"};\n" : "};\n")."
		var attributes = {allowfullscreen:true};";
}
else
{
	$text .= "var params = {host:\"".$lightirc['lightirc_host']."\"".($lightirc['lightirc_port'] != "" ? ",
		port:\"".$lightirc['lightirc_port']."\"};\n" : "};\n");
	if (USER)
		$text .= "\t\tparams.nickAlternate = \"".USERNAME."\";\n";
	else {
		$text .= "\t\tparams.nickAlternate = \"".$lightirc['lightirc_nickAlternate']."25\";\n";
	}
	if ($lightirc['nickselect'] == "true")
	{
		$text .= "\t\tparams.nickselect = \"true\";\n";
		$nselect = true;
	}
	else
	{
		if (USER)
		{
			$text .= "\t\tparams.nick = \"".USERNAME."\";\n";
			$text .= "\t\tparams.ident = \"".USERNAME."\";\n";
			$text .= "\t\tparams.realname = \"".defset('USERBIRTHDATE').defset('USERGENDER').defset('USERLOCATION')."\";\n";
		}
		else
		{
			$text .= "\t\tparams.nick = \"".$lightirc['lightirc_nickAlternate']."25\";\n";
		}
	}

	if($lightirc['styleURL'] == "css/")
		$text .= "\t\tparams.styleURL = \"".$lightirc['lightirc_styleURL'].".css\";\n";

	if($lightirc['fontSize'] >= 6)
		$text .= "\t\tparams.fontSize = \"".$lightirc['lightirc_fontSize']."\";\n";

	if(trim($lightirc['autojoin']) != "")
		$text .= "\t\tparams.autojoin = \"".$lightirc['lightirc_autojoin']."\";\n";

	if($lightirc['showServerWindow'] == "true")
		$text .= "\t\tparams.showServerWindow = \"".$lightirc['lightirc_showServerWindow']."\";\n";

	if($lightirc['soundAlerts'] == "true")
		$text .= "\t\tparams.soundAlerts = \"".$lightirc['lightirc_soundAlerts']."\";\n";

	if($lightirc['showNickSelection'] == "true")
		$text .= "\t\tparams.showNickSelection = \"".$lightirc['lightirc_showNickSelection']."\";\n";

	if($lightirc['autoReconnect'] == "true")
		$text .= "\t\tparams.autoReconnect = \"".$lightirc['lightirc_autoReconnect']."\";\n";

	if($lightirc['showNavigation'] == "true")
		$text .= "\t\tparams.showNavigation = \"".$lightirc['lightirc_showNavigation']."\";\n";

	if($lightirc['userListWidth'] != "160" && intval($lightirc['lightirc_userListWidth']))
		$text .= "\t\tparams.userListWidth = \"".$lightirc['lightirc_userListWidth']."\";\n";

	if($lightirc['policyPort'] != "843" && intval($lightirc['lightirc_policyPort']))
		$text .= "\t\tparams.policyPort = \"".$lightirc['lightirc_policyPort']."\";\n";

	if($lightirc['showListButton'] == "false")
		$text .= "\t\tparams.showListButton = \"".$lightirc['lightirc_showListButton']."\";\n";

	if($lightirc['showJoinPartMessages'] == "false")
		$text .= "\t\tparams.showJoinPartMessages = \"".$lightirc['lightirc_showJoinPartMessages']."\";\n";

	if($lightirc['showRichTextControls'] == "true")
		$text .= "\t\tparams.showRichTextControls = \"".$lightirc['lightirc_showRichTextControls']."\";\n";

	if($lightirc['showNickChangeButton'] == "false")
		$text .= "\t\tparams.showNickChangeButton = \"".$lightirc['lightirc_showNickChangeButton']."\";\n";

	if($lightirc['showSecurityError'] == "true")
		$text .= "\t\tparams.showSecurityError = \"".$lightirc['lightirc_showSecurityError']."\";\n";

	if(trim($lightirc['customSecurityErrorMessage']) != "")
		$text .= "\t\tparams.customSecurityErrorMessage = \"".$lightirc['lightirc_customSecurityErrorMessage']."\";\n";

	if($lightirc['webcam'] == "false")
		$text .= "\t\tparams.webcam = \"".$lightirc['lightirc_webcam']."\";\n";

	if(trim($lightirc['accessKey']) != "")
		$text .= "\t\tparams.accessKey = \"".$lightirc['lightirc_accessKey']."\";\n";

	if(trim($lightirc['rtmp']) != "")
		$text .= "\t\tparams.rtmp = \"".$lightirc['lightirc_rtmp']."\";\n";

	if($lightirc['webcamPreviewBox'] == "false")
		$text .= "\t\tparams.webcamPreviewBox = \"".$lightirc['lightirc_webcamPreviewBox']."\";\n";

	if($lightirc['webcamPrivateOnly'] == "false")
		$text .= "\t\tparams.webcamPrivateOnly = \"".$lightirc['lightirc_webcamPrivateOnly']."\";\n";

	if($lightirc['webcamPublicOnly'] == "false")
		$text .= "\t\tparams.webcamPublicOnly = \"".$lightirc['lightirc_webcamPublicOnly']."\";\n";

	if($lightirc['webcamVideoOnly'] == "false")
		$text .= "\t\tparams.webcamVideoOnly = \"".$lightirc['lightirc_webcamVideoOnly']."\";\n";

	if($lightirc['webcamAudioOnly'] == "false")
		$text .= "\t\tparams.webcamAudioOnly = \"".$lightirc['lightirc_webcamAudioOnly']."\";\n";

	if(trim($lightirc['webcamChannelBlacklist']) != "")
		$text .= "\t\tparams.webcamChannelBlacklist = \"".$lightirc['lightirc_webcamChannelBlacklist']."\";\n";

	if(trim($lightirc['webcamChannelWhitelist']) != "")
		$text .= "\t\tparams.webcamChannelwhitelist = \"".$lightirc['lightirc_webcamChannelwhitelist']."\";\n";

	if($lightirc['enableQueries'] == "true")
		$text .= "\t\tparams.enableQueries = \"".$lightirc['lightirc_enableQueries']."\";\n";

	if($lightirc['showTimestamps'] == "true")
		$text .= "\t\tparams.showTimestamps = \"".$lightirc['lightirc_showTimestamps']."\";\n";

	if($lightirc['nickPrefix'] == "<")
		$text .= "\t\tparams.nickPrefix = \"".$lightirc['lightirc_nickPrefix']."\";\n";

	if($lightirc['nickPostfix'] == ">")
		$text .= "\t\tparams.nickPostfix = \"".$lightirc['lightirc_nickPostfix']."\";\n";

	if($lightirc['showNickPrefixes'] == "true")
		$text .= "\t\tparams.showNickPrefixes = \"".$lightirc['lightirc_showNickPrefixes']."\";\n";

	if($lightirc['showNickPrefixIcons'] == "true")
		$text .= "\t\tparams.showNickPrefixIcons = \"".$lightirc['lightirc_showNickPrefixIcons']."\";\n";

	$text .= "\t\tparams.language = \"".$lightirc['lightirc_language']."\";\n";
}

$text .= '	swfobject.embedSWF("lightIRC.swf", "lightIRC", "100%", "100%", "10.0.0", "expressInstall.swf", params);
 </script> ';

 $title = LIRC_CORE_00;
 $ns -> tablerender($title, $text);

require_once(FOOTERF);
