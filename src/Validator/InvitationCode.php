<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class InvitationCode extends Constraint
{
    public $message = 'INVALID_INVITATION_CODE_KEY';
}
