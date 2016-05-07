<?php

namespace MiAppBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class UserController extends Bundle
{
    public function currentUserRole()
    {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }    }
}