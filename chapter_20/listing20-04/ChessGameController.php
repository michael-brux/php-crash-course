<?php

namespace App\Controller;

use App\Entity\ChessGame;
use App\Entity\Comment;
use App\Form\ChessGameType;
use App\Repository\ChessGameRepository;
use App\Repository\CommonRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("/chessgame")
 */
class ChessGameController extends AbstractController {
    private $session;
    public function __construct(SessionInterface $session)
    {
        // ... other code goes here ...
    }

    // ... other code goes here ...

}