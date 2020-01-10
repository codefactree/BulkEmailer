<?php

namespace App\Repositories;

use App\User;
use Illuminate\Support\LazyCollection;

class UserRepository
{
    /**
     * MailService constructor.
     *
     */
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    /**
     * Get All Users function
     *
     * @return LazyCollection
     */
    public function getAllUsers(): LazyCollection
    {
        return $this->model->cursor();
    }
}
