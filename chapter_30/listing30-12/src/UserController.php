<?php

namespace Mattsmithdev;

class UserController extends Controller
{
    private UserRepository $userRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
    }

    public function list(): void
    {
        $users = $this->userRepository->findAll();

        $template = 'user/list.html.twig';
        $args = [
            'users' => $users,
        ];
        print $this->twig->render($template, $args);
    }
}