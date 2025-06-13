<?php
namespace Deployer;

require 'recipe/typo3.php';


new \SourceBroker\DeployerLoader\Load([
    ['get' => 'sourcebroker/deployer-typo3-media'],
    ['get' => 'sourcebroker/deployer-typo3-database'],
    ['get' => 'sourcebroker/deployer-typo3-deploy'],
    ['get' => 'sourcebroker/deployer-extended-typo3'],
]);



// Hosts

host('ssh.vehlage.project.host')
    ->set('remote_user', 'ssh-ef94aw@a-qfw3hn')
    ->set('deploy_path', '/home/p-jui7qu/html/typo3-ucxeb');

// Hooks

after('deploy:failed', 'deploy:unlock');
