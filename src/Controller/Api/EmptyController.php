<?php

namespace App\Controller\Api;

use App\Entity\Comment;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Security;


class EmptyController
{

    public function __invoke()
    {
        return new Response();
    }
    
}
