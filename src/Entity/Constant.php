<?php

namespace App\Entity;

class Constant
{
    const FORM_ERROR_MESSAGE = "Cette valeur ne doit pas être vide.";
    const FLASH_LABEL_ERROR_MESSAGE = "Pour pouvoir imprimer l'étiquette, veuillez remplir les champs manquants.";
    const ERROR_OCCURRED_MESSAGE  = "Une erreur est survenue.";


    public const STATE_NEW = 'new';
    public const STATE_PENDING = 'pending';
    public const STATE_VALIDATED = 'validated';
    public const STATE_REFUNDED = 'refunded';
    public const STATE_DELETED = 'deleted';

    public static $statesList = [
        self::STATE_NEW => 'Nouveau',
        self::STATE_PENDING => 'En cours',
        self::STATE_VALIDATED => 'Validé',
        self::STATE_REFUNDED => 'Refesué',
        self::STATE_DELETED => 'Supprimé',
    ];
}
