<?php


$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['full'] = 'EXT:at_hightech/Configuration/RTE/Full.yaml';

if (empty($GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename']) || $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] == "New TYPO3 Project" || $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] == "New TYPO3 site") {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] = 'HighTech';
}

if (empty($GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['backendLogo'])) {
    $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['backendLogo'] = 'EXT:at_hightech/Resources/Public/Icons/logo.png';
}

if (empty($GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['loginLogo'])) {
    $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['loginLogo'] = 'EXT:at_hightech/Resources/Public/Icons/logo.png';
}