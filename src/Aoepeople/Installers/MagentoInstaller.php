<?php
namespace Aoepeople\Installers;

class MagentoInstaller extends BaseInstaller
{
    protected $locations = array(
        'module'   => '.modman/{$name}/',
        'source'    => 'htdocs/'
    );
}
