<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class BundleController extends Controller
{
    /**
     * @Route("/blog", name="blog")
     */
    public function showAction()
    {
        return $this->render('@Blog/Bundle/show.html.twig');
    }

}
