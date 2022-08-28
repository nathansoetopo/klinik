<?php

namespace App\Interfaces;

interface PasienRepositoryInterface
{
    public function getAllByDatePagination($date);
    public function getAllPagination();
}
