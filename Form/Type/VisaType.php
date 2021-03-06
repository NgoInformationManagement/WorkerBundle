<?php

/*
 * This file is part of the NIM package.
 *
 * (c) Langlade Arnaud
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NIM\WorkerBundle\Form\Type;

use NIM\FormBundle\Form\Core\ResourceBaseType;
use Symfony\Component\Form\FormBuilderInterface;

class VisaType extends ResourceBaseType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('country', 'country', array(
                'label' => 'visa.field.country.label',

            ))
            ->add('startedAt', 'date', array(
                'label' => 'visa.field.startedAt.label',

            ))
            ->add('length', 'integer', array(
                'label' => 'visa.field.length.label',
            ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'nim_visa';
    }
}
