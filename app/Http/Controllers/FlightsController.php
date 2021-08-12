<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clients\AviationAirline;
use App\Models\Flight;
use App\Repositories\Contracts\FlightRepository;
use App\Http\Traits\FlightTrait;

class FlightsController extends Controller
{

    use FlightTrait;

  
  
}
