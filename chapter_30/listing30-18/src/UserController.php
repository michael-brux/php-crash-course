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

    public function loginForm(): void
    {
        $template = 'user/login.html.twig';
        $args = [];
        print $this->twig->render($template, $args);
    }

    public function processLogin(string $username, string $password): void
    {
        $loginSuccess = $this->isValidUsernamePassword($username, $password);
        if ($loginSuccess) {
            print 'success - username and password found in database';
        } else {
            print 'sorry - there was an error with your username/password';
        }
    }

    private function isValidUsernamePassword($username, $password): bool
    {
        $user = $this->userRepository->findOneByUsername($username);

        // False if no user for username
        if ($user == NULL) {
            return false;
        }

        // See if entered password matches stored (hashed) one
        return password_verify($password, $user->getPassword());
    }

}