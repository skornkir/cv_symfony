<?php

namespace CvBundle\Admin;

use Doctrine\DBAL\Types\IntegerType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class WorkAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('interval_work', TextType::class);
        $formMapper->add('post', TextType::class);
        $formMapper->add('company', TextType::class);
        //    $formMapper->add('created', IntegerType::class);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('post');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('interval_work');
        $listMapper->addIdentifier('post');
        $listMapper->addIdentifier('company');
        //     $listMapper->addIdentifier('created');
    }
}
