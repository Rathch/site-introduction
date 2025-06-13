<?php
namespace Deployer;

require 'recipe/typo3.php';



// Config

set('repository', 'git@github.com:Rathch/site-introduction.git');

add('shared_files', []);
add('shared_dirs', ['config', 'fileadmin', 'typo3temp', 'uploads', 'var']);
add('writable_dirs', []);

// Hosts

host('ssh.vehlage.project.host')
    ->set('remote_user', 'ssh-w5i8rk@a-qfw3hn')
    ->set('deploy_path', '/home/p-jui7qu/html/typo3-ucxeb');

// Hooks

after('deploy:failed', 'deploy:unlock');

// Add task to run TYPO3 database update
task('typo3:database:update', function () {
    run('cd {{release_path}} && vendor/bin/typo3 database:updateschema safe');
});

// Add task to symlink environment-specific configuration
task('typo3:symlink-env', function () {
    run('cd {{release_path}} && ln -sf ../../.env .env');
});

// Run database update after successful deployment
before('typo3:database:update', 'typo3:symlink-env');
before('deploy:symlink', 'typo3:database:update');
