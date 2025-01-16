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

        // First check if the format is valid (5-6 alphanumeric characters)
        if (!preg_match('/^[A-Z0-9]{5,6}$/', $value)) {
            $this->context->buildViolation('INVALID_INVITATION_CODE_KEY')
                ->addViolation();
            return;
        }

        // Then check if the code exists in the database
        $personne = $this->personneRepository->findOneBy(['invitationCode' => $value]);
        if (!$personne) {
            $this->context->buildViolation('INVALID_INVITATION_CODE_KEY')
                ->addViolation();
        }
    }
}
