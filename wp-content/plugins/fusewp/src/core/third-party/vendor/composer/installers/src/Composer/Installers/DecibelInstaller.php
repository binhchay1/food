<?php

namespace FuseWPVendor\Composer\Installers;

class DecibelInstaller extends BaseInstaller
{
    /** @var array */
    protected $locations = array('app' => 'app/{$name}/');
}
