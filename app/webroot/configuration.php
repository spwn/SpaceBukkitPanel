<?php

/**
*
*   ####################################################
*   webroot/configuration.php 
*   ####################################################
*
*   DESCRIPTION
*
*   This file stores global informations about SpaceBukkit.
*   IT is also used for i18n and role permissions
* 
*   
* @copyright  Copyright (c) 20011 XereoNet and SpaceBukkit (http://spacebukkit.xereo.net)
* @version    Last edited by Antariano
* @since      File available since Release 1.0
*
*
*/

	$sbconf['app_version'] = "Open Beta 1.2 WIP";
    $sbconf['app'] = "2";
    $sbconf['theme'] = "Spacebukkit";
    $sbconf['token'] = "iRule";

    $languages = array();

    $languages['English'] = 'eng'; 
    $languages['Finnish'] = 'fin'; 
    $languages['German'] = 'ger'; 
    $languages['Polish'] = 'pol'; 
    $languages['French'] = 'fre'; 

    $permissions = array();

	$permissions["pages"] = array(
    'dash'                  => 1, 
    'users' 	            => 2, 
    'plugins'               => 4, 
    'worlds'                => 8, 
    'servers'               => 16,
    'global'                => 32,
    'backups'               => 64,
    'permissions'           => 128,
    'timeline'              => 256
    );

	$permissions["global"] = array(
    'addRemoveServer'       => 1, 
    'stopStartServer' 	    => 2, 
    'reloadServer'          => 4, 
    'restartServer'         => 8, 
    'forceRestartServer'    => 16,
    'console'               => 32,
    'chat'                  => 64
	);

	$permissions["dash"] = array(
    'Activity'              => 1, 
    'Stats'                 => 2
	);

	$permissions["users"] = array(
    'healAndFeed'           => 1, 
    'kill'              	=> 2, 
    'seeInventory'          => 4, 
    'kick'                  => 8, 
    'ban'                   => 16, 
    'whitelist'             => 32, 
    'op'                    => 64,
    'changeGamemode'        => 128
	);

	$permissions["plugins"] = array(
    'disablePlugin'         => 1, 
    'removeAddPlugin' 	    => 2, 
    'configurePlugin'       => 4, 
    'updatePlugin'          => 8
	);

	$permissions["worlds"] = array(
    'runChunkster'          => 1, 
    'runMapAutoTrim' 	    => 2,
    'removeAddWorld'        => 4,
    'changeWorldSettings'   => 8,
    'backupRestoreWorld'    => 16
	);	

	$permissions["servers"] = array(
    'Shedules'              => 1, 
    'serverProperties'     	=> 2,
    'bukkit'                => 4
	);

    $permissions["backups"] = array(
    'backupServer'          => 1,
    'backupPlugins'         => 2,
    'backupWorlds'          => 3
    );

    $permissions["permissions"] = array(
    'addGroup'              => 1,
    'addUser'               => 2,
    'editGroupPermissions'  => 4,
    'editUserPermissions'   => 8,
    );

    $permissions["timeline"] = array(
    'foo'                   => 1,
    'bar'                   => 2
    );

?>
