<?php
namespace App;

use Symfony\Component\HttpKernel\Kernel;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            // ...
            new Gesdinet\JWTRefreshTokenBundle\GesdinetJWTRefreshTokenBundle(),
        ];
    }

    public function registerContainerConfiguration(\Symfony\Component\Config\Loader\LoaderInterface $loader)
    {
        // TODO: Implement registerContainerConfiguration() method.
    }
}
