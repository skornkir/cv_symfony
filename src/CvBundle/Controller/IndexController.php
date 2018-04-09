<?php

namespace CvBundle\Controller;

use CvBundle\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    function indexAction(Request $request){
        $contact = new Contact();
        $form = $this->getContactForm($contact);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contact);
            $entityManager->flush();
            $flashbag = $this->get('session')->getFlashBag();
            $flashbag->add("success", "Ваше сообщение принято");
            return $this->redirectToRoute('index');
        }

        return $this->render('@Cv/cv/index.html.twig',[
            'educations' => $this->getEducation(),
            'works' => $this->getWork(),
            'contactForm' => $form->createView(),
        ]);
    }

    function getEducation(){
        $repo = $this->getDoctrine()->getManager();
        return $repo->getRepository('CvBundle:Education')->findAll();
    }

    function getWork(){
        $repo = $this->getDoctrine()->getManager();
        return $repo->getRepository('CvBundle:Work')->findAll();
    }

    function submitContactForm(Request $request){
        $contact = new Contact();
        $form = $this->createFormBuilder($contact);
    }

    function getContactForm(Contact $contact){
        return  $this->createFormBuilder($contact)
            ->add('name', TextType::class, array('label' => 'Имя*', 'required' => TRUE))
            ->add('email', TextType::class, array('label' => 'Email*', 'required' => TRUE))
            ->add('subject', TextType::class, array('label' => 'Тема*', 'required' => TRUE))
            ->add('text', TextareaType::class, array('label' => 'Текст*', 'required' => TRUE))
            ->add('save', SubmitType::class, array('label' => 'Сохранить'))
            ->getForm();
    }

}
