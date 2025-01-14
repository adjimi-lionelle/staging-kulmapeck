<?php

namespace App\Twig;

use App\Repository\EleveRepository;
use Symfony\Component\Security\Core\Security;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    private $eleveRepository;
    private $security;

    public function __construct(EleveRepository $eleveRepository, Security $security)
    {
        $this->eleveRepository = $eleveRepository;
        $this->security = $security;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('tempsRestant', [$this, 'getTempsRestant']),
        ];
    }

    public function getTempsRestant(): int
    {
        $user = $this->security->getUser();
        if (!$user) {
            return 0; // Pas connecté
        }
    
        $eleve = $this->eleveRepository->findOneBy(['utilisateur' => $user]);
        if (!$eleve) {
            return 0; // Pas un élève
        }
    
        $dateInscription = $eleve->getJoinAt();
        $dateFinGratuite = (clone $dateInscription)->modify('+5 days');
        $now = new \DateTime();
    
        // Debug : Affichez les dates
       /* var_dump([
            'diff' => $dateFinGratuite->getTimestamp() - $now->getTimestamp(),
        ]);*/
    
        if ($now <= $dateFinGratuite) { 
            return $dateFinGratuite->getTimestamp() - $now->getTimestamp();
        }
    
        return 0; // Temps expiré
    }

}
