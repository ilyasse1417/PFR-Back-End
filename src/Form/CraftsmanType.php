<?php

namespace App\Form;


use App\Entity\Profession;
use App\Entity\Craftsman;
use App\Entity\User;
use App\Entity\City;
use App\Entity\Constant;
use App\Form\UserType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CraftsmanType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('user', UserType::class, [
                'data_class' => User::class,
                'label' => false,
            ])
            ->add('cities', EntityType::class, [
                'required' => false,
                'class' => City::class,
                "choice_label" => function (City $city) {
                    return $city->getFrName();
                },
                "query_builder" => function (EntityRepository $repository) {
                    return $repository->createQueryBuilder("City");
                },
                "multiple" => true,
                "expanded" => false,
                "autocomplete" => true,
            ])
            ->add('professions', EntityType::class, [
                'class' => Profession::class,
                'choice_label' => 'name', // Customize the displayed city name, you can change it to the desired property
                'multiple' => true,
                'expanded' => true, // Use checkboxes instead of a select dropdown
            ])
            ->add('description')
            ->add('status', ChoiceType::class, [
                'choices' => array_flip(Constant::$statesList)
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Craftsman::class,
        ]);
    }
}
