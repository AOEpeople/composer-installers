<?php
namespace Aoepeople\ComposerInstallers;

class MagentoInstaller extends BaseInstaller
{
    protected $locations = array(
        'module'   => '.modmanss/{$name}/',
        'source'    => 'htdocs/'
    );
}
