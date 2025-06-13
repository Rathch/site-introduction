<?php

$GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive(
    $GLOBALS['TYPO3_CONF_VARS'],
    [
        'DB' => [
            'Connections' => [
                'Default' => [
                    'dbname' => 'mysql_l044ww_1',
                    'driver' => 'mysqli',
                    'host' => 'mysql-l044ww.pg-s-u408ie.db.project.host',
                    'password' => 'Kx0Q_IkGfQQF',
                    'port' => '3306',
                    'user' => 'dbu_l044ww',
                ],
            ],
        ],
        // This GFX configuration allows processing by installed ImageMagick 6
        'GFX' => [
            'processor' => 'ImageMagick',
            'processor_path' => '/usr/bin/',
            'processor_path_lzw' => '/usr/bin/',
        ],
        
        'SYS' => [
            'trustedHostsPattern' => '.*.*',
            'devIPmask' => '*',
            'displayErrors' => 1,
            'systemLocale' => 'en_US.utf8',
            'features' => [
                'unifiedPageTranslationHandling' => true,
                'yamlImportsFollowDeclarationOrder' => true,
                'security.backend.enforceReferrer' => false,
            ],
            // This is required to fix "Mixed Block"
            'reverseProxySSL' => '*',
            'reverseProxyIP' => '*',
            'reverseProxyHeaderMultiValue' => 'first'
        ],
    ]
);
