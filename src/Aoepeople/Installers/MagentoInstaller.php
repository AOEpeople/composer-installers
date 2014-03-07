<?php
namespace Aoepeople\Installers;

class MagentoInstaller extends BaseInstaller
{
    protected $locations = array(
        'module'   => '.modmanss/{$name}/',
        'source'    => 'htdocs/'
    );
}
