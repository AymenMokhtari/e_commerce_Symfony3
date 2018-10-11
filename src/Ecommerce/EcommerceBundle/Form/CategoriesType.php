<?php

namespace Ecommerce\EcommerceBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


/**
 * Description of CategorieType
 *
 * @author aymen
 */
class CategoriesType extends AbstractType
{
    
       /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('save','submit')
   
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Ecommerce\EcommerceBundle\Entity\Categories'
        ));
    }

    public function getName() {
        
    }

    /**
     * @return string
     */

}
