<?php

namespace App\Repositories\Eloquent;

use App\Models\Flight;
use App\Repositories\Contracts\FlightRepository;
use App\Repositories\RepositoryAbstract;


class EloquentFlightRepository extends RepositoryAbstract implements FlightRepository
{
    public function entity()
    {
        return Flight::class;
    }
}