<?php

namespace Erebot\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class   GenericDocInstaller
extends LibraryInstaller
{
    public function getInstallPath(PackageInterface $package)
    {
        return 'doc/src/generic/';
    }

    public function supports($packageType)
    {
        return 'erebot-generic-doc' === $packageType;
    }
}
