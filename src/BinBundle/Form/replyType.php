<?php

namespace BinBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class replyType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('category' ,EntityType::class,array('class'=>'BinBundle:categoryy',
            'choice_label'=>'type',
            'multiple'=>false,
            'expanded'=> false))
            ->add('sender' ,EntityType::class,array('class'=>'BinBundle:parentt',
                'choice_label'=>'name',
                'multiple'=>false,
                'expanded'=> false))
            ->add('receiver' ,EntityType::class,array('class'=>'ExamsBundle:teacher',
                'choice_label'=>'fullname',
                'multiple'=>false,
                'expanded'=> false))
            ->add('content')
            ->add('state')
            ->add('add',SubmitType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BinBundle\Entity\notification'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'binbundle_notification';
    }


}
