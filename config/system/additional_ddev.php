<?php

$GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive(
    $GLOBALS['TYPO3_CONF_VARS'],
    [
        'DB' => [
            'Connections' => [
                'Default' => [
                    'dbname' => 'db',
                    'driver' => 'mysqli',
                    'host' => 'db',
                    'password' => 'db',
                    'port' => '3306',
                    'user' => 'db',
                ],
            ],
        ],
        // This GFX configuration allows processing by installed ImageMagick 6
        'GFX' => [
            'processor' => 'ImageMagick',
            'processor_path' => '/usr/bin/',
            'processor_path_lzw' => '/usr/bin/',
        ],
        // This mail configuration sends all emails to mailpit
        'MAIL' => [
            'transport' => 'smtp',
            'transport_smtp_encrypt' => false,
            'transport_smtp_server' => 'localhost:1025',
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
