<?php

namespace MiAppBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MiAppBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
