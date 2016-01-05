<?php
namespace Aoepeople\ComposerInstallers;

class StackformationInstaller extends BaseInstaller
{
    protected $locations = array(
        'stack'   => 'stacks/{$name}/'
    );
}
