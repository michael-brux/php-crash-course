<?php
namespace Mattsmithdev;

use Mattsmithdev\PdoCrudRepo\DatabaseTableRepository;

class UserRepository extends DatabaseTableRepository
{
    public function findOneByUsername(string $username): ?User
    {
        $users = $this->searchByColumn('username', $username);

        if (count($users) != 1) {
            return NULL;
        }

        return $users[0];
    }
}
