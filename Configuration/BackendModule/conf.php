<?php
/* 
*  Dummy Konfiguration für eigene Backend Modul Gruppe 
*/
define('TYPO3_MOD_PATH', '../typo3conf/ext/vmfds_module/Configuration/BackendModule/');
    $MCONF['name'] = 'Shop';
    $MCONF['script'] = '_DISPATCH';
    $MCONF['access'] = 'user,group'; 
    $MLANG['default']['tabs_images']['tab'] = 'ext_icon.gif'; 
    $MLANG['default']['ll_ref'] = 'LLL:EXT:vmfds_module/Resources/Privat/Language/locallang_mod_main.xml';  
?>