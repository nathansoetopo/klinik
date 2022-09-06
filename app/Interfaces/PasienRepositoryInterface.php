<?php

namespace App\Interfaces;

interface PasienRepositoryInterface
{
    public function getAllByDatePagination($date);
    public function getAllPagination();
    public function storeDataPasien($payload);
    public function updateDataPasien($payload, $pasienID);
    public function deleteDataPasien($pasienID);
}
