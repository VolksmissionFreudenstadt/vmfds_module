<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

if (TYPO3_MODE === 'BE') {
    
	/*
    $modulName = 'VolksmissionModule';
 
    //Legt die Position des Moduls fest, hier nach Modul "web"
    if (!isset($TBE_MODULES[$modulName])) {
        $temp_TBE_MODULES = array();
        foreach ($TBE_MODULES as $key => $val) {
            if ($key == 'web') {
                $temp_TBE_MODULES[$key] = $val;
                $temp_TBE_MODULES[$modulName] = '';
            } else {
                $temp_TBE_MODULES[$key] = $val;
            }
        }
        $TBE_MODULES = $temp_TBE_MODULES;
    }
    // Hauptmodul erstellen
    t3lib_extMgm::addModule($modulName, '', '', t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/BackendModul/');
	*/
	
	Tx_Extbase_Utility_Extension::registerModule(
			$_EXTKEY,
			'VolksmissionModule',   //Hier muss der Name aus Zeile 3 eingesetzt werden!
			'', //
			'',     // Position
			array(
					'Backend' => 'index',
			),
			array(
					'access' => 'user,group',
					'icon'   => 'EXT:' . $_EXTKEY . '/ext_icon.gif',
					'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mod_main.xml',
			)
	);
	
	
 
    /**
     * Registers a Backend Modul
     */
    Tx_Extbase_Utility_Extension::registerModule(
        $_EXTKEY,
        'VolksmissionModule',   //Hier muss der Name aus Zeile 3 eingesetzt werden!
        'Kool', //
        '',     // Position
        array(
        	'Backend' => 'index', 
        ),
        array(
            'access' => 'user,group',
            'icon'   => 'EXT:' . $_EXTKEY . '/ext_icon.gif',
            'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mod_kool.xml',
        )
    );
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Volksmissionsmodul');

?>