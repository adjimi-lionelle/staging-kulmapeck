<?php

namespace App\Validator;

use App\Repository\PersonneRepository;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class InvitationCodeValidator extends ConstraintValidator
{
    private $personneRepository;

    public function __construct(PersonneRepository $personneRepository)
    {
        $this->personneRepository = $personneRepository;
    }

    public function validate($value, Constraint $constraint)
    {
        if (null === $value || '' === $value) {
            return;
        }

        // Check if the code exists in the database
        $personne = $this->personneRepository->findOneBy(['invitationCode' => $value]);
        if (!$personne) {
            $this->context->buildViolation('INVALID_INVITATION_CODE_KEY')
                ->addViolation();
        }
    }
}
