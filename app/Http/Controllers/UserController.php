<?php

namespace App\Http\Controllers;

use App\Http\Business\UserBusiness;
use App\Repository\Interfaces\UserRepositoryInterface;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    private UserRepositoryInterface $userRepository;
    // private UserBusiness $userBusiness;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
        // $this->userBusiness = $userBusiness;
    }

    public function addUser(Request $request): Response
    {
        $this->userRepository->create([
            'fullname' => 'Matheus Tavares',
            'email' => 'matheus.tavares@teste.com',
            'password' => 'teste'
        ]);

        return response($this->userRepository->create([
            'fullname' => 'Matheus Tavares',
            'email' => 'matheus.tavares@teste.com',
            'password' => 'teste'
        ]), 200)->json();
    }
}
