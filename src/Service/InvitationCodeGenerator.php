<?php

namespace App\Service;

use App\Repository\PersonneRepository;

class InvitationCodeGenerator
{
    public function __construct(
        private PersonneRepository $personneRepository
    ) {}

    public function generateCode(): string
    {
        $code = substr(str_shuffle(str_repeat('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', 6)), 0, 6);
        while ($this->personneRepository->findOneBy(['invitationCode' => $code])) {
            $code = substr(str_shuffle(str_repeat('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', 6)), 0, 6);
        }
        return $code;
    }
}
