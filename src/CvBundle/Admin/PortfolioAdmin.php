<?php
/**
 * Created by PhpStorm.
 * User: Кирилл
 * Date: 14.04.2018
 * Time: 13:25
 */

namespace CvBundle\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PortfolioAdmin extends AbstractAdmin
{
    public function configureFormFields(FormMapper $form)
    {
        $form->add('title', TextareaType::class);
        $form->add('description', TextType::class);
        $form->add('client', TextType::class);
        $form->add('delivered', IntegerType::class);
        $form->add('mainimage', FileType::class, array('data_class' => null));
    }

    public  function  configureListFields(ListMapper $list)
    {
        $list->addIdentifier('title');
        $list->addIdentifier('description');
        $list->addIdentifier('client');
        $list->addIdentifier('delivered');
        $list->addIdentifier('mainimage');
    }


}