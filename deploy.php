<?php
namespace Deployer;

require 'recipe/typo3.php';



// Config

//set('repository', 'https://github.com/TYPO3-Documentation/site-introduction.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('ssh.vehlage.project.host')
    ->set('remote_user', 'ssh-ef94aw@a-qfw3hn')
    ->set('deploy_path', '/home/p-jui7qu/html/typo3-ucxeb');

// Hooks

after('deploy:failed', 'deploy:unlock');

// Add task to run TYPO3 database update
task('typo3:database:update', function () {
    run('cd {{release_path}} && vendor/bin/typo3 database:updateschema safe');
});

// Run database update after successful deployment
after('deploy:dbupdate', 'typo3:database:update');
