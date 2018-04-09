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
        $blogs = $this->getBlogs();
        return $this->render('@Blog/Bundle/show.html.twig',[
            'blogs' => $blogs,
        ]);
    }

    /**
     * @Route("blog/{id}", name="blogId")
     */
    public function showArticleAction($id){
        $blog = $this->getBlogById($id);
        return $this->render('@Blog/Bundle/showBlog.html.twig', [
           'blog' => $blog,
        ]);
    }

    function getBlogById($id){
        $entityManager = $this->getDoctrine()->getManager();
        return $entityManager->getRepository('BlogBundle:Blog')->find($id);
    }

    function getBlogs(){
        $entityManager = $this->getDoctrine()->getManager();
        return $entityManager->getRepository('BlogBundle:Blog')->findAll();
    }

}
