<?php

namespace App\Interfaces;

interface SOAPRepositoryInterface
{
    public function store($payload, $userID);
}
