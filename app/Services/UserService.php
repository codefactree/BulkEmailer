<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Support\LazyCollection;

class UserService 
{
    /**
     * UserRepository variable
     *
     * @var UserRepository
     */
    private $userRepository;

    /**
     * UserService constructor.
     * 
     * @param UserRepository $userRepository
     *
     */
    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

    /**
     * Get All Users from Db function
     *
     * @return LazyCollection
     */
    public function getAllUsers(): LazyCollection
    {
        return $this->userRepository->getAllUsers();
    }
}