<?php

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}


$wgSitename = "mediawiki";

$wgScriptPath = "/w";

$wgServer = "https://localhost";

$wgResourceBasePath = $wgScriptPath;

$wgLogos = [
	'1x' => "$wgResourceBasePath/resources/assets/change-your-logo.svg",
	'icon' => "$wgResourceBasePath/resources/assets/change-your-logo-icon.svg",
];

$wgEnableEmail = true;
$wgEnableUserEmail = true; 

$wgEmergencyContact = "";
$wgPasswordSender = "";

$wgEnotifUserTalk = false; 
$wgEnotifWatchlist = false;
$wgEmailAuthentication = true;

## Database settings
$wgDBtype = "mysql";
$wgDBserver = "db-instance";
$wgDBname = "mediawiki";
$wgDBuser = "mediawiki";
$wgDBpassword = "MediaWiki..!";

$wgDBprefix = "";
$wgDBssl = false;

$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

$wgSharedTables[] = "actor";

$wgMainCacheType = CACHE_ACCEL;
$wgMemCachedServers = [];

$wgEnableUploads = false;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";

$wgUseInstantCommons = false;

$wgPingback = false;

$wgLanguageCode = "en";

$wgLocaltimezone = "UTC";


$wgSecretKey = "e8789080ed59a85d56adbe73e3bd3b65f75b43fe417df56b34d01cf8dd6d2684";

$wgAuthenticationTokenVersion = "1";

$wgUpgradeKey = "49b7ae7bcece1b3f";

$wgRightsPage = ""; 
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";

$wgDiff3 = "/usr/bin/diff3";

$wgDefaultSkin = "vector-2022";

wfLoadSkin( 'Vector' );



$wgSMTP = [
    'IDHost' => 'pp',
    'port' => '25',
    'username' => 'pp',
    'password' => 'pp',
    'auth' => true,
    'host' => 'localhost'
];

# Debug
$wgShowExceptionDetails = true;