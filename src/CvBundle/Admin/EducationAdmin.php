<?php

namespace CvBundle\Admin;

use Doctrine\DBAL\Types\IntegerType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class EducationAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('interval_work', TextType::class);
        $formMapper->add('speciality', TextType::class);
        $formMapper->add('univiersity', TextType::class);
    //    $formMapper->add('created', IntegerType::class);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('speciality');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('interval_work');
        $listMapper->addIdentifier('speciality');
        $listMapper->addIdentifier('univiersity');
   //     $listMapper->addIdentifier('created');
    }
}
