<?php

namespace CvBundle\Admin;

use CvBundle\Entity\Image;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Sonata\AdminBundle\Admin\AbstractAdmin;

class ImageAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('file', FileType::class, [
                'required' => false
            ]);
    }

    public function prePersist($image)
    {
        $this->manageFileUpload($image);
    }

    public function preUpdate($image)
    {
        $this->manageFileUpload($image);
    }

    private function manageFileUpload(Image $image)
    {
        if ($image->getFile()) {
            $image->refreshUpdated();
        }
    }

    // ...
}