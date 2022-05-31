<?php

namespace App\Http\Businesses;

use App\Repository\Interfaces\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class UserBusiness
{
    private UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param mixed $field
     * @param mixed $value
     * @return Collection
     */
    public function validateExistingUser(mixed $field, mixed $value): Collection
    {
        return $this->userRepository->findByParam($field, $value);
    }
}