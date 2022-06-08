<?php

namespace App\Form;

use App\Entity\Wish;
use App\Entity\Category;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WishType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, ["label" => "Votre idée"])
            ->add('description', TextareaType::class, ["label" => "votre description"])
            ->add('author', TextType::class, ["label" => "l'auteur"])
            ->add('category', EntityType::class, [
                "class" => Category::class,
                "label" => "La catégorie",
                "choice_label"=>"name"
            ])  
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Wish::class,
        ]);
    }
}
