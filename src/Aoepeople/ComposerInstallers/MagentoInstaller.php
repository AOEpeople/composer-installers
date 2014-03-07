<?php
namespace Aoepeople\ComposerInstallers;

class MagentoInstaller extends BaseInstaller
{
    protected $locations = array(
        'module'   => '.modman/{$name}/',
        'source'    => 'htdocs/'
    );
}
