<?php
namespace App\Http\Traits;
use App\Clients\AviationAirline;
use App\Models\Flight;

use App\Repositories\Contracts\FlightRepository;

trait FlightTrait {

    protected $flights;

    public function __construct(FlightRepository $flights)
      {
          $this->flights = $flights;
      }
      

   public function index()
   {
       $aviation = new AviationAirline;

      $aviation->checkAvailability();
   
          $flights = $this->flights->all();
      
          return  view('/dashboard', compact('flights'));
 
   }

}