<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Mattsmithdev\User;
use Mattsmithdev\UserRepository;

$userRepository = new UserRepository();

$userRepository->resetTable();

$user1 = new User();
$user1->setUsername('matt');
$user1->setPassword('password1');
$userRepository->insert($user1);

$user2 = new User();
$user2->setUsername('john');
$user2->setPassword('password2');
$userRepository->insert($user2);

$users = $userRepository->findAll();
print '<pre>';
var_dump($users);
print '</pre>';
