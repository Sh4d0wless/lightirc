<?php

// NOTE: Maximum multi language define name is 24 characters!
// module plugin.php
define("LIRC_NAME", "lightIRC");
define("LIRC_DESC", "e107 plugin that provides a flash based irc client.");
define("LIRC_MENU", "IRC Chat");
define("LIRC_LINK_NAME", "IRC Chat"); // To demonstrate your link name can be different than plugin name
define("LIRC_CAPTION", "Configure lightIRC");
define("LIRC_DONE1", "Installation ");
define("LIRC_DONE2", "successful...");
define("LIRC_DONE3","Thank you for upgrading to"); // Plugin version will be added automatically

// module admin_menu.php
define("LIRC_MENU_00", "lightIRC Options");
define("LIRC_MENU_01", "lightIRC Settings");
define("LIRC_MENU_02", "Readme");
define("LIRC_MENU_03", "Changelog");

// module admin_config.php
define("LIRC_CONF_CAPT_00", "Server address"); 
define("LIRC_CONF_NOTE_00", "Hostname or ip of the server your connecting to."); 
define("LIRC_CONF_CAPT_01", "ServerPort"); 
define("LIRC_CONF_NOTE_01", "Server Port of the IRC network you are connecting to default 6667"); 
define("LIRC_CONF_CAPT_02", "PolicyPort"); 
define("LIRC_CONF_NOTE_02", "Defines the port where Flash Player should look for the policy daemon default 843"); 
define("LIRC_CONF_CAPT_03", "Language"); 
define("LIRC_CONF_NOTE_03", "Select the language you wish to use for LightIRC"); 
define("LIRC_CONF_CAPT_04", "Show Server Window"); 
define("LIRC_CONF_NOTE_04", "Whether the server window (and button) should be shown. If you set the value to false, a popup appears when you start lightIRC. It contains a connecting message and stays open until the connection to the IRC server is established."); 

define("LIRC_CONF_CAPT_05", "Show Security Error"); 
define("LIRC_CONF_NOTE_05", "Hides the security error message when set to false. You typically don't want to change this setting. The security error tells you that the policy daemon is not running or your policyPort setting is not correct.");
 
define("LIRC_CONF_CAPT_06", "You can set a custom security error message instead of the default one"); 
define("LIRC_CONF_NOTE_06", ""); 

define("LIRC_CONF_CAPT_07", "Comma-separated list of commands which cannot be entered by the user. If you set it to 'nick,j,join', the user cannot change the nick and is not able to join channels. However, he can still use the lightIRC popups to change his nick or join from the channels list. (You can hide those popups separately)");
define("LIRC_CONF_NOTE_07", ""); 

define("LIRC_CONF_CAPT_08", "Reconnect if the connection to the server gets interrupted. You typically don't want to change this setting."); 
define("LIRC_CONF_NOTE_08", "");
 
define("LIRC_CONF_CAPT_09", "Indicates whether a popup to enter a nickname should be displayed before connecting. Select No to use members e107 username"); 
define("LIRC_CONF_NOTE_09", ""); 

define("LIRC_CONF_CAPT_10", "Alternative nick. Gets used if 'nick' is occupied.");
define("LIRC_CONF_NOTE_10", ""); 
define("LIRC_CONF_CAPT_11", "Select style sheet"); 
define("LIRC_CONF_NOTE_11", ""); 
define("LIRC_CONF_CAPT_12", "Nick Prefix Default <"); 
define("LIRC_CONF_NOTE_12", ""); 
define("LIRC_CONF_CAPT_13", "Nick Postfix Default >"); 
define("LIRC_CONF_NOTE_13", ""); 
define("LIRC_CONF_CAPT_14", "Hides the navigation container when set to false. You are not able to switch between channels and queries then."); 
define("LIRC_CONF_NOTE_14", ""); 
define("LIRC_CONF_CAPT_15", "Position of the navigation container (where channel and query buttons appear). Valid values: left, right, top, bottom"); 
define("LIRC_CONF_NOTE_15", ""); 
define("LIRC_CONF_CAPT_16", "How large should fonts in text input and chat area be displayed?"); 
define("LIRC_CONF_NOTE_16", ""); 
define("LIRC_CONF_CAPT_17", "Any value >= 100 or 0 (hides the user list)."); 
define("LIRC_CONF_NOTE_17", ""); 
define("LIRC_CONF_CAPT_18", "Indicates whether a sounds are on (they are played on highlight or on new private message)."); 
define("LIRC_CONF_NOTE_18", ""); 
define("LIRC_CONF_CAPT_19", "Show a timestamp in front of all received messages and commands."); 
define("LIRC_CONF_NOTE_19", ""); 
define("LIRC_CONF_CAPT_20", "Show join, part and quit messages."); 
define("LIRC_CONF_NOTE_20", ""); 
define("LIRC_CONF_CAPT_21", "Opens new queries in background when set to true. When keeping the default mode, a new query window gains focus upon receiving a private message."); 
define("LIRC_CONF_NOTE_21", ""); 
define("LIRC_CONF_CAPT_22", "Set this to false to remove support to start queries, that is double clicking a user name and selecting the query from the context menu will not work. However, the user is still able to receive queries or to write private messages with /q, /query or /msg."); 
define("LIRC_CONF_NOTE_22", ""); 
define("LIRC_CONF_CAPT_23", "You can open the channel central in three ways. By clicking the button in the menu (showListButton), selecting the item in the channel button context menu or double-clicking the channel window. This parameter can disable the latter."); 
define("LIRC_CONF_NOTE_23", ""); 
define("LIRC_CONF_CAPT_24", "Shows button to list all channels on the network."); 
define("LIRC_CONF_NOTE_24", ""); 
define("LIRC_CONF_CAPT_25", "Shows buttons for text formatting (bold, underline, color)"); 
define("LIRC_CONF_NOTE_25", ""); 
define("LIRC_CONF_CAPT_26", "Shows button to change the nickname."); 
define("LIRC_CONF_NOTE_26", ""); 
define("LIRC_CONF_CAPT_27", "Access keys are only needed if debranding and webcam modules have been purchased for further details <a href=\"http://www.lightirc.com/webcam\">Click here</a>"); 
define("LIRC_CONF_NOTE_27", ""); 
define("LIRC_CONF_CAPT_28", "Enables the webcam module using a streaming server backend. The module must be purchased <a href=\"http://www.lightirc.com/buy\">Click here to purchase module</a>");
define("LIRC_CONF_NOTE_28", "");
define("LIRC_CONF_CAPT_29", "IP/host of the Red5/Wowza streaming server");
define("LIRC_CONF_NOTE_29", "");
define("LIRC_CONF_CAPT_30", "If the webcam controls should appear as a small box above the user list");
define("LIRC_CONF_NOTE_30", "");
define("LIRC_CONF_CAPT_31", "If users can only broadcast in private mode (not public)");
define("LIRC_CONF_NOTE_31", "");
define("LIRC_CONF_CAPT_32", "If users can only broadcast in public mode (not private)");
define("LIRC_CONF_NOTE_32", "");
define("LIRC_CONF_CAPT_33", "If users can only broadcast their cameras (no audio)");
define("LIRC_CONF_NOTE_33", "");
define("LIRC_CONF_CAPT_34", "If users can only broadcast their microphones (no video)" );
define("LIRC_CONF_NOTE_34", "");
define("LIRC_CONF_CAPT_35", "Comma-separated list of channels where the webcam module does not work (icons don't show up in the user list)");
define("LIRC_CONF_NOTE_35", "");
define("LIRC_CONF_CAPT_36", "Comma-separated list of channels where you want the webcam module to work. If you set something here, the webcam module won't work in all other channels! If you wan't to restrict the webcam usage, you should use either the blacklist or the whitelist setting.");
define("LIRC_CONF_NOTE_36", "");




define("LIRC_CONF_00", "Your settings have been saved.");
define("LIRC_CONF_01", "Save Settings");
define("LIRC_CONF_02", "NOTE: For lightIRC to work you need flashplugind. Read this <a href=\"".e_PLUGIN."admin_readme.php#security\">lightIRC FAQ</a> for more info on howto accomplish that.");
	 
// module lightIRC.php
define("LIRC_CORE_00", "IRC Chat");

// module help.php
define("LIRC_ADMIN_HELP_00", "lightIRC Help");
define("LIRC_ADMIN_HELP_01", "General Preferences");
define("LIRC_ADMIN_HELP_02", "Manage your lightIRC settings.");
define("LIRC_ADMIN_HELP_03", "ReadMe");  // Also used in admin_readme.php
define("LIRC_ADMIN_HELP_04", "View the Readme for detailed release information and version history.<br/><br/>For additional help on this plugin join <a href=\"irc://irc.lightirc.com/lightirc\">lightIRC irc channel</a>.");
define("LIRC_ADMIN_HELP_05", "Changelog");
define("LIRC_ADMIN_HELP_06", "View the Changelog for the latest changes in the flash part of the plugin.");
define("LIRC_ADMIN_HELP_99", "admin_readme.php"); // Actual helpfile called by admin_readme.php to allow for multi-langual helpfiles
